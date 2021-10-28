<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin', ['posts' => Post::all()]);
    }

    public function deleteAdmin(Post $post)
    {
        $post->delete();

        return redirect('/admin');
    }
}
