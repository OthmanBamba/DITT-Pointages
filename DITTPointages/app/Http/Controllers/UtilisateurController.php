<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function liste(){
        return view('utilisateur.list');
    }
    public function form(){
        return view('formulaire6');
    }
}
