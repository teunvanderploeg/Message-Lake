<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller

{
    public function show(Post $post)
    {
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

        $data['img'] = $data['img']->store('upload_img', 'public');
        return redirect()->route('posts.show', Post::create($data));
    }

    public function edit(Post $post)
    {
        return view('edit', array('post' => $post));
    }

    public function editPost(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|min:4|max:50',
                'content' => 'required|min:4|max:500',
                'id' => 'required|integer',
            ]
        );

        Post::where('id', $data['id'])->update(['title' => $data['title'], 'content' => $data['content']]);

        return redirect('/admin');
    }
}
