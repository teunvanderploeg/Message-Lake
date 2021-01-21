<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MijnPost;

class AdminController extends Controller
{
    public function admin()
    {
        $post = DB::table('mijn_posts')->get();
        return view('admin', ['posts' => $post]);
    }

    public function deleteAdmin($postID)
    {
        $dpost = MijnPost::find($postID);
        // DB::table('mijn_posts')->where('id', $postID)->first();
        if (!$dpost) {
            abort(404);
        } else {
            MijnPost::destroy($postID);
        }

        $post = DB::table('mijn_posts')->get();
        return view('admin', ['posts' => $post]);
    }
}
