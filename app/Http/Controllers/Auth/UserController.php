<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(1);
        return view('admin.users', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user_single', compact('user'));
    }
}
