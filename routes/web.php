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

Route::get('/', 'WebController@tampil');
Route::get('kategori/{kategori}','WebController@kategori');
Route::get('tag/{tag}','WebController@tag');
Route::post('/','WebController@cari');
Route::get('detail/{slug}','WebController@detail');

/*
|--------------------------------------------------------------------------
| Route Admin login dan CRUD
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::post('/','HomeController@gantiPas');

	// Registrasi Admin
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'Auth\RegisterController@register');

	//Routing kategori
	Route::resource('/kategori','KategoriController',[
	    'except' => 'show'
	]);
	Route::post('/kategori/cari','KategoriController@cari')->name('kategori.cari');

	//Routing tag
	Route::resource('/tag','TagController',[
		'except' => 'show'
	]);
	Route::post('/tag/cari','TagController@cari')->name('tag.cari');

	//route artikel
	Route::resource('/artikel','ArtikelController');
	Route::post('/artikel/cari','ArtikelController@cari')->name('artikel.cari');
	
	//route json kategori
	Route::get('tag/{kategori_id}', 'TagController@ambilTag');

});

/*
|--------------------------------------------------------------------------
| Override Route Autentifikasi User
|--------------------------------------------------------------------------
|
*/

//Route Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Lupa password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
|--------------------------------------------------------------------------
| Override Route Filemanager
|--------------------------------------------------------------------------
|
*/
Route::get('media',function(){
	return abort(404);
});