<?php

use Illuminate\Http\Request;

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
Route::group(['namespace' => 'api'], function () {
    Route::any('/login', ['as'=>'login', 'uses'=>'UserController@login']);
    Route::middleware('auth:api')->get('/details', 'UserController@details');
});


