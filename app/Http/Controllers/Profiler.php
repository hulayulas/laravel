<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profiler extends Controller
{
    public function index(){
        return view("profile");
    }

    
}
