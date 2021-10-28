<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        return view('overmij', ['persons' => User::all()]);

    }

    public function overmij(User $person){
        return view('overmij', ['person' => $person]);
    }
}
