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
Route::get('/index', 'AgeController@index')->name('ifelse.index');
Route::post('/show','AgeController@show')->name('ifelse.result');
Route::get('/index', 'GutuController@index')->name('gutu.index');
Route::post('/show','GutuController@show')->name('gutu.result');