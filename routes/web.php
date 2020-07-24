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
Route::get('/antropologi', function(){
    return view('templates.Matkul.antropologi');
});
Route::get('/indo', function(){
    return view('templates.Matkul.indo');
});
Route::get('/inggris', function(){
    return view('templates.Matkul.inggris');
});
Route::get('/bk', function(){
    return view('templates.Matkul.bk');
});
Route::get('/biologi', function(){
    return view('templates.Matkul.biologi');
});
Route::get('/ekonomi', function(){
    return view('templates.Matkul.ekonomi');
});
Route::get('/fisika', function(){
    return view('templates.Matkul.fisika');
});
Route::get('/geografi', function(){
    return view('templates.Matkul.geografi');
});
Route::get('/jerman', function(){
    return view('templates.Matkul.jerman');
});
Route::get('/kimia', function(){
    return view('templates.Matkul.kimia');
});
Route::get('/mandarin', function(){
    return view('templates.Matkul.mandarin');
});
Route::get('/matematika', function(){
    return view('templates.Matkul.matematika');
});
Route::get('/penjas', function(){
    return view('templates.Matkul.penjas');
});
Route::get('/pendidikannilai', function(){
    return view('templates.Matkul.pendidikannilai');
});
Route::get('/perancis', function(){
    return view('templates.Matkul.perancis');
});
Route::get('/pkn', function(){
    return view('templates.Matkul.pkn');
});
Route::get('/pkwu', function(){
    return view('templates.Matkul.pkwu');
});
Route::get('/sejarah', function(){
    return view('templates.Matkul.sejarah');
});
Route::get('/senirupa', function(){
    return view('templates.Matkul.senirupa');
});
Route::get('/sosiologi', function(){
    return view('templates.Matkul.sosiologi');
});
Route::get('/profile', function(){
    return view('templates.profile');
});
Route::get('profile','UserController@profile');

Auth::routes();



Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('/home', 'User@index');

