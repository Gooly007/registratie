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


Route::get('/reset', function () {
    return view('auth/passwords/reset');
});


Auth::routes();

Route::get('/', 'BezoekersController@index')->name('home');

Route::get('/home', 'BezoekersController@index')->name('home')->middleware('auth');

Route::get('/bzregister', 'BezoekersController@create')->name('bzregister');

Route::post('/bzcreate', 'BezoekersController@store')->name('bzcreate')->middleware('auth');

Route::get('/home/{id}', 'BezoekersController@show')->name('bzinfo')->middleware('auth');

Route::get('/home/{id}/edit', 'BezoekersController@edit')->middleware('auth');

Route::patch('/home/{id}', 'BezoekersController@update')->middleware('auth');

Route::get('/home/{id}/tijduit', 'BezoekersController@tijduit')->middleware('auth');

Route::get('/minor', 'HomeController@minor')->name('minor');

