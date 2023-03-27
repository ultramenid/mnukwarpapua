<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $title = 'Login - Dashboard Mnukwar';
        return view('backends.login', compact('title'));
    }
}
