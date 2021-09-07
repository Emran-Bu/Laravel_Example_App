<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;

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
// Route::view('users', 'user');

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