<?php

namespace App\Http\Controllers;

use DB;

class PostsController extends Controller

{
    public function show($postID)
    {
        
        $post = DB::table('posts')->where('id', $postID)->first();

        if(!$post){
            abort(404);
        }

        return view('post', array('post' => $post));
    }
    public function makepost(){
        echo"Hier kan je een post maken";
    }
}
