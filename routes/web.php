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
    return view('admin.artikel.Dartikel');
});

//Routing kategori
Route::resource('/kategori','KategoriController',[
    'except' => 'show'
]);
Route::get('/kategori','KategoriController@cari')->name('kategori.cari');

//Routing tag
Route::resource('/tag','TagController',[
	'except' => 'show'
]);
