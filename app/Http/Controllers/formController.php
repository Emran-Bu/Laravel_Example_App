<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function form (Request $req){
        // return view("form");
        echo "Form Submitted";
        return $req->input();
    }
}
