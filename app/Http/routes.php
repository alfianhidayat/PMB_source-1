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

// Begin PMB

Route::get('home','PMBController@index');
Route::get('informasi','PMBController@viewInformasi');
Route::get('hasil','PMBController@viewBeritaHasil');
Route::get('ujian','PMBController@viewBeritaUjian');
Route::get('formulir','PMBController@viewFormulir');
Route::get('konfirmasi','PMBController@viewKonfirmasi');
Route::get('pendaftaran','PMBController@viewPendafOnline');
Route::get('informasipenting','PMBController@viewBeritaPenting');
Route::get('prodi','PMBController@viewProdi');
Route::get('db','RegController@index');
Route::get('cobawelcome','PMBController@coba');

Route::resource('peserta','PesertaController');

