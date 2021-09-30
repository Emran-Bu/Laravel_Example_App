<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get data
Route::get('data', [testApiController::class, 'getData']);
// get data with param
Route::get('list/{id?}', [testApiController::class, 'list']);
// post data
Route::post('post', [testApiController::class, 'postData']);
// post data
Route::put('update', [testApiController::class, 'updateData']);
// delete data
Route::delete('delete/{id?}', [testApiController::class, 'deleteData']);
// search data
Route::get('search/{name}', [testApiController::class, 'searchData']);
// validation
Route::post('validate', [testApiController::class, 'validateData']);
