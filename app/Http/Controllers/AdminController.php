<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MijnPost;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin', ['posts' => MijnPost::all()]);
    }

    public function deleteAdmin(MijnPost $post)
    {
        $post->delete();

        return redirect('/admin');
    }
}
