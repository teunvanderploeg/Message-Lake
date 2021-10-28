<?php

namespace App\Http\Controllers;

use App\Models\MijnPost;
use Illuminate\Http\Request;

class PostsController extends Controller

{
    public function show(MijnPost $post)
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
        return redirect()->route('posts.show', MijnPost::create($data));
    }

    public function edit(MijnPost $post)
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

        MijnPost::where('id', $data['id'])->update(['title' => $data['title'], 'content' => $data['content']]);

        return redirect('/admin');
    }
}
