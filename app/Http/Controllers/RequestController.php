<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Request as R;
use App\Exports\RequestExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class RequestController extends Controller
{

    public function index()
    {
        $reqs = R::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.requests', compact('reqs'));
    }   

    public function save_request(Request $request)
    {
        if ($_POST['action'] === 'submit') {

            $validator = Validator::make($request->all(), [
                'corpname' => 'required',
                'cmr_number' => 'required',
                'permission_number' => 'required',
                'fullname' => 'required',
                'phone' => 'required',
                'yuztutma' => 'required',
                'ygtyyarnama' => 'required',
                'dowlet_sanaw' => 'required',
                'director_firstname' => 'required',
                'director_lastname' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('form', 'open');
            }


            $req = new R();
            $req->corpname = $request->corpname;
            $req->permission_number = $request->permission_number;
            $req->cmr_number = $request->cmr_number;
            $req->fullname = $request->fullname;
            $req->phone = $request->phone;
            $req->email = $request->email;

            if ($request->hasFile('yuztutma')) {
                $path1 = $request->yuztutma->store('images/yuztutmalar');
                $req->yuztutma = $path1;
            }

            if ($request->hasFile('ygtyyarnama')) {
                $path2 = $request->ygtyyarnama->store('images/yuztutmalar');
                $req->ygtyyarnama = $path2;
            }

            if ($request->hasFile('dowlet_sanaw')) {
                $path3 = $request->dowlet_sanaw->store('images/yuztutmalar');
                $req->dowlet_sanaw = $path3;
            }

            $req->save();
            \Mail::to('trans.id@ulaggozegchilik.gov.tm')->send(new \App\Mail\RequestMail($req));
            \Mail::to('trans.buhgalteriya@ulaggozegchilik.gov.tm')->send(new \App\Mail\RequestMail($req));

            return redirect()->route('home.page')->withSuccess('Siziň ýüztutmaňyz üstünlikli ugradyldy');
        }   

        if ($_POST['action'] === 'generate_pdf') {

            $validator = Validator::make($request->all(), [
                'corpname' => 'required',
                'cmr_number' => 'required',
                'permission_number' => 'required',
                'fullname' => 'required',
                'phone' => 'required',
                'director_firstname' => 'required',
                'director_lastname' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            $req = $request->all();
            $pdf = PDF::loadView('pdf', compact('req'));
            return $pdf->download('request.pdf');
        }
        /* return redirect('/'); */
    }

    public function show($id) {
        $req = R::find($id);
        return view('admin.request_single', compact('req'));
    }

    public function accept($id) 
    {
        $req = R::find($id);
        $req->status = 1;
        $req->save();
        return redirect()->back()->withSuccess('Bu ýüztutma kabul edildi!');
    }

    public function reject(Request $request, $id)
    {
        $req = R::find($id);
        $req->status = 2;
        $req->cause_of_reject = $request->cause_of_reject;
        $req->save();
        return redirect()->back()->withSuccess('Bu ýüztutma ret edildi!');
    }

    public function export()
    {
        return Excel::download(new RequestExport, 'yuztutmalar.xlsx');
    }
}
