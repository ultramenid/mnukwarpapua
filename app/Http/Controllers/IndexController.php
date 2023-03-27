<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function getCover(){
        return DB::table('cover')->where('id',1)->first();
    }
    public function index(){
        // dd($this->getCover());
        $cover = $this->getCover();
        $title = 'Mnukwar Papua';
        $nav = 'home';
        return view('frontends.index',compact('title', 'nav', 'cover') );
    }
}
