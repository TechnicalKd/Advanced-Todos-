<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return view('welcome');
});

Route::get('/todos','TodoController@index');
Route::get('/todos/create','TodoController@create');

Route::get('/test','TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::post('avatar','TestController@storeImage')->name('avatar.store');

Route::get('/home', 'HomeController@index')->name('home');
