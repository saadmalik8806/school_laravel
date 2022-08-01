<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_school;

class add_school_controller extends Controller
{
    public function add_data(Request $req){
        $add_school= new add_school;
        $add_school->name=$req->name;
        $add_school->address=$req->address;
        $add_school->city=$req->city;
        $add_school->state=$req->state;
        $add_school->contact=$req->contact;
        $add_school->images=$req->images;
        $add_school->mail=$req->mail;
        $add_school->save();
        return redirect('show_school');
    }
}
