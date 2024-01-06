<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointagesController extends Controller
{
    public function liste(){
        return view('pointages.list');
    }

    public function form(){
        return view('pointages.formulaire4');
    }
        
}
