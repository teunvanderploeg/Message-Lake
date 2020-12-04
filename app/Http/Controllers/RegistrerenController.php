<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrerenController extends Controller
{
    public function show(){
        echo"Registreren Pagina";
    }

    public function update($info){
        echo"registreren";
        echo $info;
    }
}
