<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
        return view('makepost');
    }
    
    public function handle(Request $request){
        
        $data = $request->validate(
            [
                'title' => 'required|min:4|max:50',
                'content' => 'required|min:4|max:500',
            ]
            );

            dd($data);
    }
}
