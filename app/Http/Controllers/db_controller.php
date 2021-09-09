<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use Illuminate\Support\Facades\Http;

class db_controller extends Controller
{
    //
    function index (){
        // echo "Db connection will be here";
        return DB::select("select * from language");
    }

    //
    function getData (){
        // return language::select("select * from language");
        return student::all();
    }

    //
    function apiData (){
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('showApi',['collection'=>$data['data']]);
    }

    //
    function saveData (Request $req){
        $data = $req->input('fname');
        $req->session()->flash('fname', $data);

        $student = new student;
        $student->std_name=$req->fname;
        $student->std_city=$req->city;
        $student->std_mobile=$req->number;
        $student->save();

        return redirect('add');
    }
}
