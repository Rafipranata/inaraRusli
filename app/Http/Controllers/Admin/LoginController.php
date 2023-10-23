<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        view('admin.login');
    }

    public function loginproses(Request $request ){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('admin/home');
        }
        
        return redirect('admin/login')->with('error', 'Login Gagal');
        
    }

    public function logout(){
        Auth::logout();
        
        return redirect('admin/login');
        
    }
}
