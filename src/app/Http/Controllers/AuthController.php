<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() {

    }

    public function login() {
        return view('login.login_form');
    }
}
