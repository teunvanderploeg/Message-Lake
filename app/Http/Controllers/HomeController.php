<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MijnPost;

class HomeController extends Controller
{
    //
    public function home()
    {

        // $post = DB::table('mijn_posts')->get()->paginate(3);
        $post = MijnPost::paginate(20);

        return view('home', ['posts' => $post]);
    }
}
