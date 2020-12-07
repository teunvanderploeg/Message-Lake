<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrerenController extends Controller
{
    public function show(){
        return view('registreren');
    }

    public function registreren(Request $request){
        echo"registreren";

        $data = $request->validate(
            [
                'email' => 'required|min:4|max:50',
                'username' => 'required|min:4|max:50',
                'password' => 'required|min:4|max:50',
            ]
            );
    }
}
