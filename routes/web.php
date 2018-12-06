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

Route::get('/help', function () {
    return view('help');
});

Auth::routes();

Route::get('/', 'BezoekersController@index')->name('home');

Route::get('/home', 'BezoekersController@index')->name('home');

Route::get('/bzregister', 'BezoekersController@create')->name('bzregister');

Route::post('/bzcreate', 'BezoekersController@store')->name('bzcreate');

Route::get('/home/{id}', 'BezoekersController@show')->name('bzinfo');

Route::get('/home/{id}/edit', 'BezoekersController@edit')->name('edit');

Route::patch('/home/{id}', 'BezoekersController@update')->name('update');

Route::get('/home/{id}/tijduit', 'BezoekersController@tijduit');

Route::get('/minor', 'HomeController@minor')->name('minor');

Route::get('/totallist', 'ReportsController@index')->name('totallist');

Route::get('/user', 'UseradminController@index')->name('user');
