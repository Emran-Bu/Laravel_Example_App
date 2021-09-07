<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    // function show(){
    //     return "Hello from controller";
    // }

    function loadView($name){
        return view("user", ["user"=>$name]);
    }

    // form id pass
    // function pass($id){
    //     return $id;
    // }
}
