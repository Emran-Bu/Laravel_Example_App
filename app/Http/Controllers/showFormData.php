<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class showFormData extends Controller
{
    //
    function showData () {
        $data = student::paginate(2);
        // $data = student::all();
        return view('showForm', ['showData'=>$data]);
    }
}
