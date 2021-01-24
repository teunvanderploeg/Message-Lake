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
        if (!Auth::check()) {
            return redirect('/login');
        }

        $post = DB::table('mijn_posts')->get();
        return view('admin', ['posts' => $post]);
    }

    public function deleteAdmin($postID)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $dpost = MijnPost::find($postID);
        // DB::table('mijn_posts')->where('id', $postID)->first();
        if (!$dpost) {
            abort(404);
        } else {
            MijnPost::destroy($postID);
        }

        return redirect('/admin');
    }
}
