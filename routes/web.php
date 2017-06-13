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
//Route::resource('run', 'RunControllre');

Route::get('/', function () {
    return view('welcome');
});

Route::get('run', 'RunController@index');
Route::get('run/create', 'RunController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
