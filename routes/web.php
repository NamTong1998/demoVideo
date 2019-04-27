<?php

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

Route::get('/list', 'VideoController@index')->name('list');
Route::get('/create', 'VideoController@create')->name('create');
Route::post('/store', 'VideoController@store')->name('store');
Route::get('/show/{id}', 'VideoController@show')->name('show'); 
