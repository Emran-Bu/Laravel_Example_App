<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Validator;
use Facade\FlareClient\Http\Response;

class testApiController extends Controller
{
    // get Data
    function getData(){
        return [

            'id'=>'1',
            'name'=>'Emran',
            'city'=>'Dhaka',
            'mobile'=>'15487'

        ];
    }

    // get Data with param
    function list($id=null){
        return $id?student::find($id):student::all();
    }

    // post Data
    function postData(Request $Req){
        $student = new student;
        $student->first_name=$Req->first_name;
        $student->last_name=$Req->last_name;
        $result = $student->save();
        if($result){
            return ["result"=>"data has been saved"];
        } else {
            return ["result"=>"data has been saved unsuccessfully"];
        }
    }

    // update Data
    function updateData(Request $Req){
        $student = new student;
        $student = student::find($Req->id);
        $student->first_name=$Req->first_name;
        $student->last_name=$Req->last_name;
        $result = $student->save();
        if($result){
            return ["result"=>"data has been updated"];
        } else {
            return ["result"=>"data has been updated unsuccessfully"];
        }
    }

    // Delete data

    function deleteData ($id) {
        $student = student::find($id);
        if ($student) {
            $result = $student->delete();
        } else {
            return ["result"=>"No Record Found $id"];
        }

        if ($result) {
            return ["result"=>"Data has been deleted $id"];
        } else {
            return ["result"=>"Data has been deleted unsuccessfully $id"];
        }
    }

    // search data
    function searchData($name){
        
        $search = student::where("first_name", "like", "%" . $name . "%")->orWhere("last_name", "like", "%" . $name . "%")->get();
        if (count($search)) {
            return Response()->json($search);
        } else {
            return Response()->json(["result"=>"No record found"]);
        }
        
    }

    // validation
    function validateData(Request $req){
        $rules = array(
            "first_name"=>"required",
            "last_name"=>"required"
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            // return $validator->errors();
            // return response()->json(["result"=>"feild are required"]);
            return response()->json([$validator->errors()], 401);
        } else {
            $student = new student;
            $student->first_name = $req->first_name;
            $student->last_name = $req->last_name;
            $result = $student->save();
            if ($result) {
                return ["result"=>"Data save successfully"];
            } else {
                return ["result"=>"Data save unsuccessfully"];
            }
            
        }
        
    }

}
