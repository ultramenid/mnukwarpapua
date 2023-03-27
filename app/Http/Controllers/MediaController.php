<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function foto(){
        $title = 'Dashboard - Foto';
        $nav = 'foto';
        return view('backends.foto', compact('title','nav'));
    }

    public function addfoto(){
        $title = 'Dashboard - Add foto';
        $nav = 'foto';
        return view('backends.addfoto', compact('title','nav'));
    }

    public function editfoto($id){
        $id = $id;
        $title = 'Dashboard - Edit foto';
        $nav = 'foto';
        return view('backends.editfoto', compact('title','nav', 'id'));
    }

    public function video(){
        $title = 'Dashboard - Video';
        $nav = 'video';
        return view('backends.video', compact('title','nav'));
    }

    public function addvideo(){
        $title = 'Dashboard - Add video';
        $nav = 'video';
        return view('backends.addvideo', compact('title','nav'));
    }

    public function editvideo($id){
        $id = $id;
        $title = 'Dashboard - Edit video';
        $nav = 'video';
        return view('backends.editvideo', compact('title','nav', 'id'));
    }

    public function frontendFoto(){
        $title = 'Foto';
        $nav = 'media';
        return view('frontends.foto', compact('title','nav'));
    }

    public function frontendVideo(){
        $title = 'Video';
        $nav = 'media';
        return view('frontends.video', compact('title','nav'));
    }
}
