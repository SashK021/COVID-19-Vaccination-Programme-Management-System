<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController2 extends Controller
{
    public function redirect(){
        return view('user.home');
    }
}
