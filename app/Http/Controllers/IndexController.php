<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function getCover(){
        return DB::table('cover')->where('id',1)->first();
    }

    public function getNews(){
        return DB::table('posts')
        ->where('publishdate', '<' , Carbon::now('Asia/Jakarta'))
        ->where('status', 1)
        ->orderBy('publishdate', 'desc')
        ->take(4)
        ->get();
    }
    public function getFoto(){
        return DB::table('foto')
        ->where('status', 1)
        ->where('category', 1)
        ->first();
    }

    public function index(){
        // dd($this->getFoto());
        // dd($this->getCover());
        $cover = $this->getCover();
        $title = 'Mnukwar Papua';
        $nav = 'home';
        $posts = $this->getNews();
        $foto = $this->getFoto();
        return view('frontends.index',compact('title', 'nav', 'cover', 'posts', 'foto') );
    }
}
