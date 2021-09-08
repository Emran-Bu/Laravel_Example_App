<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
    function UserLogin(Request $req){
        $data = $req->input('fname');
        $req->session()->put('fname', $data);
        return redirect('loginCheck');
    }
}
