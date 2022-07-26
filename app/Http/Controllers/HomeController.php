<?php

namespace App\Http\Controllers;

use App\Models\User_Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $email = Session::get('email');
        $users = User_Model::where('email', "=", $email)->first();
        return view('home', ['users' => $users]);
    }
}
