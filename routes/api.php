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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [
    'as' => 'register',
    'uses' => 'UserController@postRegisterAPI'
]);
Route::post('login', [
    'as' => 'login',
    'uses' => 'UserController@postLoginAPI'
]);

Route::group(['prefix' => 'shop'], function () {
    Route::get('get-data', 'ShopController@getData');
    Route::post('post-data', 'ShopController@postData');
    
});