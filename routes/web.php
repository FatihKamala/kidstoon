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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@listvideo')->name('home.detail');
Route::resource('parentmode', 'ParentModeController');
Route::resource('verifikasi', 'VerifikasiController');
Route::get('/search', 'HomeController@listvideo')->name('post.search');

