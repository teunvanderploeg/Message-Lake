<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\MijnPost;

class PostsController extends Controller

{
    public function show($postID)
    {

        $post = MijnPost::find($postID);
        // DB::table('mijn_posts')->where('id', $postID)->first();
        if (!$post) {
            abort(404);
        }

        return view('post', array('post' => $post));
    }
    public function makepost()
    {
        return view('makepost');
    }

    public function handle(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|min:4|max:50',
                'content' => 'required|min:4|max:500',
                'img' => 'required|image',
            ]
        );

        $newFilename = $data['img']->store('upload_img', 'public');
        $data['img'] = $newFilename;
        MijnPost::create($data);
        return view('makepost');
    }
}
