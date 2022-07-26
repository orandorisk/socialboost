<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function postregister(Request $request)
    {
        if ($request->all()) {
            $validateData = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'saldo' => '0',
                'level' => 'Users',
            ];
            User::create($validateData);
            return redirect('/login');
        }

        return redirect('/register');
    }
}
