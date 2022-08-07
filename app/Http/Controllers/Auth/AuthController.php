<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6|confirmed',
            'yegrpo' => 'required',
            'ygtyyarnama_no' => 'required',
            'corpname' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'yegrpo' => $request->yegrpo,
            'corpname' => 'Ulaggozegchilik',
            'ygtyyarnama_no' => $request->ygtyyarnama_no,
            'password' => Hash::make($request->password)
        ]);


        return redirect('dashboard')->withSuccess('Siz üstünlikli registrasiýa bolduňyz');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Siz login bolduňyz');
        }

        return redirect('login')->withSuccess('Siziň girizen maglumatlaryňyz nädogry');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }

        return redirect('login')->with('error', "You don't have access!");
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'yegrpo' => $data['yegrpo'],
            'corpname' => 'Ulaggozegchilik',
            'ygtyyarnama_no' => $data['ygtyyarnama_no'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

}