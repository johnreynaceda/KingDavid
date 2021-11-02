<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('administrator.dashboard');
    }
    
    public function carousel(){
        return view('administrator.carousel');
    }
    public function announcement(){
        return view('administrator.announcement');
    }
    public function news(){
        return view('administrator.news');
    }
}
