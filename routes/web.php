<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'cliente'], function() {
    Route::get('', 'ClienteController@index');
    Route::get('{id}', 'ClienteController@show')->where('id', '[0-9]+');
    Route::post('', 'ClienteController@store');
    Route::put('{id}', 'ClienteController@update')->where('id', '[0-9]+');
    Route::delete('{id}', 'ClienteController@destroy')->where('id', '[0-9]+');
});
