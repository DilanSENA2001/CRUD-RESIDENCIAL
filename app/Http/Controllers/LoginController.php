<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function register(Request $datos){ 
        dd($datos->all);
    }
}
