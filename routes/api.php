<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['prefix'=>'pizza'], function() {
    Route::get('/', 'PizzaController@index');
});

Route::group(['prefix'=>'profile', 'middleware'=>'auth:api'], function() {
    Route::get('history', 'OrderController@index');


    Route::get('user', function (Request $request) {
        return response()->json(['status'=>true, 'user'=> $request->user()]);
    });
});
