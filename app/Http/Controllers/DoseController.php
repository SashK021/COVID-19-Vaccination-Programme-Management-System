<?php

namespace App\Http\Controllers;
use App\Models\RegisterUser1;
use App\Models\GenPop;
use Illuminate\Http\Request;

class DoseController extends Controller
{
    public function addview(){

        $data = RegisterUser1::all();

        return view('admin.dose', compact('data'));
    }
}
