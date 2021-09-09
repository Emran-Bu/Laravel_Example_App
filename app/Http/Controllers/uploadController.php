<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function uploadImg (Request $req) {
        // return "Upload controller";
        return $req->file('file')->store('img');
    }
}
