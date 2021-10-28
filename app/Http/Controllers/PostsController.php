<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller {

    public function __construct()
    {
        $this->middleware('isAdmin')->only(['edit', 'update', 'destroy']);
    }

    public function index()
    {
        return view('home', ['posts' => Post::paginate(20)]);
    }

    public function create()
    {
        return view('makepost');
    }

    public function store(Request $request)
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

    public function show(Post $post)
    {
        return view('post', array('post' => $post));
    }

    public function edit(Post $post)
    {
        return view('edit', array('post' => $post));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate(
            [
                'title' => 'required|min:4|max:50',
                'content' => 'required|min:4|max:500',
            ]
        );
        $post->update($data);

        return redirect(route('index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route('admin.admin'));
    }
}
