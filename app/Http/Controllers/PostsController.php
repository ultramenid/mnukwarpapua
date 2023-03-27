<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $title = 'Dashboard - Posts';
        $nav = 'posts';
        return view('backends.posts', compact('title','nav'));
    }

    public function addposts(){
        $title = 'Dashboard - Add posts';
        $nav = 'posts';
        return view('backends.addposts', compact('title','nav'));
    }

    public function editposts($id){
        $id = $id;
        $title = 'Dashboard - Edit posts';
        $nav = 'posts';
        return view('backends.editposts', compact('title', 'id', 'nav'));
    }

    public function frontendRisetdankajian(){
        $title = 'Riset dan Kajian';
        $nav = 'programs';
        return view('frontends.risetdankajian', compact('title', 'nav'));
    }

    public function frontendLivelihood(){
        $title = 'Livelihood';
        $nav = 'programs';
        return view('frontends.livelihood', compact('title', 'nav'));
    }
}
