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

Route::middleware('json.response')->group(function () {
    // public routes
    // ...

    // Private Routes
    Route::middleware('auth:api')->group(function () {
        Route::get('me', 'Api\UserController@get')->name('me');
    });

});
