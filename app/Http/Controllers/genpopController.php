<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class genpopController extends Controller
{
    public function addview(){

        return view('user.genpop');
    }

    public function report_view()
{
  
    $report=GenPop::all();

    return view ('admin.add_report', compact('report'));
    
}
}
