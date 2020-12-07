<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //loginpage
    public function loginpage(){
        return view('login');
    }

    public function login(Request $request){
        $data = $request->validate(
            [
                'email' => 'required|min:4|max:50',
                'password' => 'required|min:4|max:50',
            ]
            );
    }
}
