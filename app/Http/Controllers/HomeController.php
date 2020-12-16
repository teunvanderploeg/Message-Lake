<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home()
    {

        $post = DB::table('mijn_posts')->get()->take(10);
        return view('home', ['post' => $post]);
    }
}
