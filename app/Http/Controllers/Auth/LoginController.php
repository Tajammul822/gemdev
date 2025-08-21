<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
