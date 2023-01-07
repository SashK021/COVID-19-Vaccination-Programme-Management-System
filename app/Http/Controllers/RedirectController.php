<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenPop;
use Carbon\Carbon;

class RedirectController extends Controller
{
    public function redirect(){

        $posts = GenPop::whereDate('created_at',Carbon::today())->count();

        return view('admin.home', compact('posts'));
    }
}
