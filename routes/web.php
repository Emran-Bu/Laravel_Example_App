<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\usingController;
use App\Http\Controllers\formController;
use App\Http\Controllers\db_controller;
use App\Http\Controllers\sessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 1st rule view data show form user.blade.php
// Route::get('users', function (){
//     return view('user');
// });

// 2nd rule view data show form user.blade.php
Route::view('users', 'user');

// 1st rule view data and data pass show form user.blade.php
// Route::get('users/{name}', function ($name){
//     return view('user', ["user"=>$name]);
// });

//  controller page from controller
// Route::get('controller', [userController::class, 'show']);

//  controller page from controller

Route::get('users/{name}', [userController::class, 'loadView']);

// pass id url rote from controller
// Route::get('controller/{id}', [userController::class, 'pass']);

// header component run
// Route::view('header', 'components/header');

// view add


// test blade
Route::get('test', [usingController::class, 'test']);

// form
Route::post('form', [formController::class, 'form']);

// view form
Route::view('form', 'form')->middleware('protectPage');

// no access
Route::view('noaccess', 'noaccess');

// group middleware age Check
Route::group(['middleware'=>['protectPage']],function(){
    Route::view('about', 'about');
});

// db_connection
Route::get('dbController', [db_controller::class, 'index']);

// db_models
Route::get('student', [db_controller::class, 'getData']);

// api data
Route::get('apiData', [db_controller::class, 'apiData']);

// session
// Route::view('login', 'login');
Route::view('loginCheck', 'loginCheck');
Route::post('user', [sessionController::class, 'UserLogin']);
Route::get('logout', function () {
    if(session()->has('fname')){
        session()->pull('fname', null);
    }
    return redirect('login');
});

Route::get('login', function () {
    if(session()->has('fname')){
        return redirect('loginCheck');
    }
    return view('login');
});
