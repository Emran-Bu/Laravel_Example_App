<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class query_builder_controller extends Controller
{
    //
    function operation(){
        // return DB::table('students')->get();

        $data = DB::table('students')->get();
        return view('builderList', ['data'=>$data]);
        
        // return DB::table('students')->where('last_name', 'khan')->get();
        // return DB::table('students')->where('last_name', 'khan')->get();
        // return (array) DB::table('students')->find(6);
        // return (array) DB::table('students')->count();

        // return DB::table('students')->insert(
        //     [
        //         'first_name'=>'jibon',
        //         'last_name'=>'khan'
        //     ]
        // );

        // return DB::table('students')->where('id', 28)->update(
        //     [
        //         'first_name'=>'Jibon',
        //         'last_name'=>'Rahman'
        //     ]
        // );

        // return DB::table('students')->where('id', 28)
        // ->delete();

        // return DB::table('students')->min('id');
        // return DB::table('students')->max('id');
        // $min = DB::table('students')->min('id');
        // $max = DB::table('students')->max('id');
        // return 'min = ' . $min . '<br>' . 'max = ' .  $max;
        // echo 'min = ' . $min . '<br>' . 'max = ' .  $max;
        // return DB::table('students')->avg('id');
        // return DB::table('students')->sum('id');
        // return DB::table('students')->max('first_name');
        // return DB::table('students')->min('first_name');
    }
}
