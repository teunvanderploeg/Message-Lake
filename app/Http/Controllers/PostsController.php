<?php

namespace App\Http\Controllers;

use DB;

class PostsController extends Controller

{
    public function show($slug)
    {
        $post = DB::table('posts')->where('id', $slug)->first();


        return view('post', array(
            'post' => $post
        ));
    }
}
