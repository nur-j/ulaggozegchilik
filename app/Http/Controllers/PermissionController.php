<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use App\Models\Permission;
use App\Models\Brand;
use App\Models\Country;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;

class PermissionController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $countries = Country::all();
        $countries_json  = json_encode($countries);
        return view('front.permission', compact('brands', 'countries', 'countries_json'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'razresheniye_no' => 'required|unique:permissions',
            'gos_prinad' => 'required',
            'marka' => 'required', 
            'gos_nomer' => 'required',
            'woditel_fio' => 'required',
            'punkt_pog' => 'required',
            'punkt_wyg' => 'required',
            'marshrut' => 'required',
            'gruz' => 'required',
            'prinad' => 'required',
            'zayawitel' => 'required',
            'mesto_wydachi' => 'required',
            'cmr_no' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Permission::create($request->all());
        return redirect('dashboard')->withSuccess('Rugsatnama üstünlikli döredildi');
    }
    

    public function api()
    {
        try {
            $permissions = Permission::all();
        } catch (\Throwable $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $permissions,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    }

    public function adminIndex()
    {
        $permissions = Permission::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.permissions', compact('permissions'));
    }

    public function adminShow($id)
    {
        $permission = Permission::find($id);
        return view('admin.perm_single', compact('permission'));
    }

    public function destroy($id)
    {
        Permission::destroy($id);
        return redirect()->route('admin.permissions')->withSuccess('Rugsatnama öçürildi');
    }

    public function export()
    {
        return Excel::download(new PermissionExport, 'rugsatnamalar.xlsx');
    }
}
