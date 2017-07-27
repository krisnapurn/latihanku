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

Route::get('/about', function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

Route::get('/latihan', function(){
	return view('about');
});

Route::get('/latihan1', function(){
	return view('about.satu');
});

Route::get('/latihan2', function(){
	return view('about.dua');
});

Route::get('/latihan3', function(){
	return view('about.tiga');
});

Route::get('/latihan/{n}/{s}/{u}', function($a,$b,$c) {
	return '<br>Nama Saya:'.$a.
			'<br>Sekolah:'.$b.
			'<br>Umur:'.$c;
});

Route::get('/latihan/{n}', function($a) {
	$a=('Jhon');
	return '<br>Ini Halaman About'.$a;
});