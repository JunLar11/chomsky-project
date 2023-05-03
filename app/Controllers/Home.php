<?php

namespace App\Controllers;

use Chomsky\Http\Controller;
class Home extends Controller
{
    public function create(){
        if(isGuest()){
            return view('home', ['user' => "Guest"]);
            
        }
        return view('home', ['user' => auth()->name]);
    }
}
