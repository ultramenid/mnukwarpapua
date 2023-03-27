<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function inbox(){
        $title = 'Dashboard - Inbox';
        $nav = 'inbox';
        return view('backends.inbox', compact('title','nav'));
    }

    public function contact(){
        $title = 'Contact Us';
        $nav = 'inbox';
        return view('frontends.contact', compact('title','nav'));
    }
}
