<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home(){

        $post = DB::table('posts')->get();

        if(!$post){
            abort(404);
        }

        return view('home', ['post' => $post]);

    } 
}
