<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_school;

class show_school_controller extends Controller
{
    function show(){
        $data= add_school::all();
        return view('show_school',['detail'=>$data]);
    }
}
