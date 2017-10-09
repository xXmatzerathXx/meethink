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
    if (!Auth::check()){
        return view('start');
    }
    else{
        return view('home');
    }
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/start', 'StartController@index')->name('start');
Route::get('/steps', 'StepsController@index')->name('steps');