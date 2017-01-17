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

Route::get('test', function() {
    return response([1,2,3,4,5], 200);
});

Route::post('register', 'AuthController@register');
Route::post('signin', 'AuthController@signin');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => 'jwt.auth'], function() {
	Route::get('uu',['UserController@index']);
	Route::get('ceshi', function() {
		return 123;
	});
});
