<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function overmij($persone){
        return view('overmij', ['name' => $persone]);
    }
    public function me(){
        return "Dit ben ik";
    } 
    public function users(){
        echo"Lijst met Useres";
    }

}
