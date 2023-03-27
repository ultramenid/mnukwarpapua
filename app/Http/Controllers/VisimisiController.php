<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisimisiController extends Controller
{
    public function index(){
        $title = 'Dashboard - Visi dan Misi';
        $nav = 'pages';
        return view('backends.visimisi', compact('title','nav'));
    }

    public function getVisimisi(){
        return DB::table('visidanmisi')
                ->select('content')
                ->where('id', 1)
                ->first();
    }
    public function frontEndIndex(){
        $title = 'Visi dan Misi';
        $visimisi = $this->getVisimisi() ;
        $nav = 'aboutus';
        return view('frontends.visimisi', compact('title', 'visimisi', 'nav'));
    }
}
