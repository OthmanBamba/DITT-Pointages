<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentsController extends Controller
{
    public function liste(){
        return view('agents.list');
    }
    public function form(){
        return View('agents.formulaire5');
}

}