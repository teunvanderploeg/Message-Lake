<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', ['posts' => Post::paginate(20)]);
    }
}
