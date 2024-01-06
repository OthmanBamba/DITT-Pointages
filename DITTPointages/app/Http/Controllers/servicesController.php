<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function liste(Request $request)
    {
       
        return view('services.list',compact('services'));

    }

    public function form(){
       
        return view('services.formulaire3',compact('sousDirections'));
    }

}
