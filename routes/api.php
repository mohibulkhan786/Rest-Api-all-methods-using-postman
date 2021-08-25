<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApi;
use App\Http\Controllers\DeviceController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data',[dummyApi::class,'getData']);

Route::get('list',[deviceController::class,'list']);

Route::get('lists/{id?}',[deviceController::class,'lists']);

Route::get('search/{name}',[deviceController::class,'search']);

Route::post('add',[deviceController::class,'add']);

Route::post('validate',[deviceController::class,'valids']);

Route::put('update',[deviceController::class,'update']);

Route::delete('delete/{id}',[deviceController::class,'delete']);

