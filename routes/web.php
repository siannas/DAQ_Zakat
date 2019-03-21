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
    return view('pages/dashboard');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/calculator', function () {
    return view('pages/calculator');
});

Route::get('/riwayat', function () {
    return view('pages/riwayat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');