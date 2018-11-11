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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'BezoekersController@index')->name('home')->middleware('auth');

Route::get('/home', 'BezoekersController@index')->name('home')->middleware('auth');

Route::get('/minor', 'HomeController@minor')->name('minor');

Route::get('/bzregister', 'BezoekersController@create')->name('bzregister')->middleware('auth');

Route::get('/bzinfo/$id', 'BezoekersController@info')->name('bzinfo')->middleware('auth');

Route::post('/bzcreate', 'BezoekersController@store')->name('bzcreate')->middleware('auth');
