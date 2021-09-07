<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usingController extends Controller
{
    //
    function test () {
        $name = ['Emran', 'Hasan', 'Ehav'];
        return view('bladeTest', ['name' => $name]);
    }
}
