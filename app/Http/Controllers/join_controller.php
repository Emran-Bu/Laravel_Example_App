<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class join_controller extends Controller
{
    //
    function joinTable () {
        return DB::table('students')
        ->join('student_info', 'students.id', '=', 'student_info.id')
        // ->select('students.*', 'student_info.*')
        ->select('students.first_name', 'student_info.name')
        // ->where('students.first_name' , 'Emran')
        ->get();
    }
}
