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

Route::get('/home', function () {
    return view('templates.default');
});

Route::get('/calendar', function () {
    return view('templates.calendar');
});

Route::get('/upload', function () {
    return view('templates.upload');
});

Route::get('/gallery', function(){
    return view('templates.gallery');
});

Route::get('/', function(){
    return view('templates.login');
});
Route::get('/agama', function(){
    return view('templates.Matkul.agama');
});
Route::get('/ind', function(){
    return view('templates.Matkul.ind');
});
Route::get('/profile', function(){
    return view('templates.profile');
});
Route::get('profile','UserController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
