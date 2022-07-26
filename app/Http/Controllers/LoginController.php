<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $email = $request->email;
            Session::put('email', $email);
            return back()->with('sukses', 'Login Success!!');
        }
        return back()->with('error', 'Login Failed!!');
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
