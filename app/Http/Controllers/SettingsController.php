<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $title = 'Settings - General';
        $nav = 'settings';
        $sidenav = 'general';
        return view('backends.settings', compact('title','nav','sidenav'));
    }

    public function cover(){
        $title = 'Settings - Cover';
        $nav = 'settings';
        $sidenav = 'cover';
        return view('backends.cover', compact('title','nav','sidenav'));
    }

    public function footer(){
        $title = 'Settings - Footer';
        $nav = 'settings';
        $sidenav = 'footer';
        return view('backends.footer', compact('title','nav','sidenav'));
    }
}
