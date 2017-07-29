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

Route::get('/krisna', function(){
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

Route::get('/testmodel', function(){
	$k = App\Post::all();
	return $k;
});

Route::get('/testmodel1', function(){
	$k = App\Post::find(1);
	return $k;
});

Route::get('/testmodel2', function(){
	$k = App\Post::where('title','like','%cepat nikah%')->get();
	return $k;
});

Route::get('/testmodel3', function(){
	$post = App\Post::find(1);
	$post->title = "Ciri Keluarga Sakinah";
	$post->save();
	return $post;
});

Route::get('/testmodel4', function(){
	$post = App\Post::find(1);
	$post->delete();
});

Route::get('/testmodel5', function(){
	$post = new App\Post;
	$post->title = "7 Amalan Pembuka Jodoh 3";
	$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
	$post->save();
	return $post;
});

Route::get('cektampilan', function(){
	return view('layouts.master');
});

Route::get('/halo', function(){
	return view('index');
});

Route::get('/orangtua', function(){
	$ortu = App\orang_tua::all();
	foreach ($ortu as $key) {
		echo $key->nama_ayah;
		echo " dengan ";
		echo $key->nama_ibu;
		echo " mempunyai anak ";
		foreach ($key->siswa as $data) {
			echo "<li>".$data->nama."</li>";
			echo "<hr>";
		}
	}
});

Route::get('/coba', 'myController@index');
Route::get('/coba2', 'myController@tampilmodel');
Route::get('/coba3', 'myController@tampilView');
Route::get('/coba4', 'myController@percobaan');