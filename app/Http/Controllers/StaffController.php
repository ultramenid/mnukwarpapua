<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index(){
        $title = 'Dashboard - Staff';
        $nav = 'pages';
        return view('backends.staff', compact('title','nav'));
    }

    public function addstaff(){
        $title = 'Dashboard - Add Staff';
        $nav = 'pages';
        return view('backends.addstaff', compact('title','nav'));
    }

    public function editstaff($id){
        $id = $id;
        $title = 'Dashboard - Edit Staff';
        $nav = 'pages';
        return view('backends.editstaff', compact('title', 'id', 'nav'));
    }

    public function getStaff(){
        return DB::table('staff')->select('nama', 'foto', 'deskripsi', 'posisi')->where('status', 1)->orderByDesc('id')->get();
    }
    public function frontEndIndex(){
        $title = 'Staff';
        $staff = $this->getStaff() ;
        $nav = 'aboutus';
        return view('frontends.staff', compact('title', 'staff', 'nav'));
    }
}
