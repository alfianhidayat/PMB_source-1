<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Begin Latihan

Route::get('/', function(){
	return 'hello laravel';
});

Route::get('helloworld',function(){
	return 'hello world from laravel framework';
});

Route::get('motor',function(){
	return 'dashbord motor';
});

Route::get('motor/{jenis}', function($jenis){
	return 'motor dengan jenis : '.$jenis;
});

Route::get('motor/{jenis?}',function($jenis=Sport){
	// if ($jenis==null) {
	// 	return "Motor Dashboard Page";
	// }
	return "motor dengan jenis :".$jenis; 
});

Route::get('book','BookController@index');

Route::get('book/{judul}','BookController@viewJudul');

// End Latihan


// Begin PMB

Route::get('home','PMBController@index');
Route::get('informasi','PMBController@viewInformasi');
Route::get('hasil','PMBController@viewBeritaHasil');
Route::get('ujian','PMBController@viewBeritaUjian');
Route::get('formulir','PMBController@viewFormulir');
Route::get('konfirmasi','PMBController@viewKonfirmasi');
Route::get('pendaftaran','PMBController@viewPendafOnline');