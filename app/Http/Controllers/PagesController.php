<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function school(){
        return view('about.school');
    }
    public function message(){
        return view('about.message');
    }
    public function vm(){
        return view('about.vm');
    }
    public function organizational(){
        return view('about.chart');
    }
    public function academic(){
        return view('academic');
    }
    public function admission(){
        return view('policy.admission');
    }
    public function requirement(){
        return view('policy.requirement');
    }
}
