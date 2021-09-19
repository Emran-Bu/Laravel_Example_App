<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class showFormData extends Controller
{
    //
    function showData () {
        $data = student::paginate(4);
        // $data = student::all();
        return view('showForm', ['showData'=>$data]);
    }

    //
    function delete($id) {
        $data=student::find($id);
        $data->delete();
        return redirect('show');
    }

    //
    function edit($id){
        // $data = student::find($id);
        $data = student::where('id' ,$id)->first();
        return view('edit', ['data'=>$data]);
    }
    //
    function update(Request $req){
        $data = student::find($req->id);
        $data->first_name=$req->f_name;
        $data->last_name=$req->l_name;
        $data->save();
        return redirect('show');
    }

}
