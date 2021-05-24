<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@home')->name('home');
Route::get('/register', 'HomeController@register')->name('home.register')->middleware('guest');
Route::get('/login', 'HomeController@login')->name('login')->middleware('guest');

Route::post('/login', 'LoginController@postLogin');
Route::post('/register/post', 'LoginController@register_store')->name('register.store');
Route::get('/logout', 'LoginController@logout');

Route::get('/kategori', 'HomeController@kategori')->name('kategori');
Route::get('/kategori/{id}', 'HomeController@kategori_detail')->name('kategori.detail');
Route::get('/jasa/{id}', 'HomeController@jasa_detail')->name('jasa.detail');

// ADMIN
Route::prefix('admin')->middleware('auth:admin')->group(function () {
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

	Route::prefix('mitra')->group(function () {
		Route::get('/', 'AdminController@mitra')->name('admin.mitra');
		Route::post('/store', 'MitraController@store')->name('admin.mitra.store');
		Route::post('/edit/{id}', 'MitraController@edit')->name('admin.mitra.edit');
		Route::post('/delete/{id}', 'MitraController@delete')->name('admin.mitra.delete');
	});

	Route::prefix('jasa')->group(function () {
		Route::prefix('kategori')->group(function () {
			Route::get('/', 'AdminController@kategori')->name('admin.jasa.kategori');
			Route::post('/store', 'KategoriController@store')->name('admin.jasa.kategori.store');
			Route::post('/edit/{id}', 'KategoriController@edit')->name('admin.jasa.kategori.edit');
			Route::post('/delete/{id}', 'KategoriController@delete')->name('admin.jasa.kategori.delete');
		});
	});
	
});


// CUSTOMER
Route::prefix('customer')->middleware('auth:customer')->group(function () {
	Route::get('/', 'CustomerController@dashboard')->name('customer.dashboard');
});
Route::prefix('customer')->middleware('auth:customer')->group(function () {
	Route::get('/proses/{id}', 'CustomerController@proses')->name('customer.proses'); 

	Route::post('/ratting/post', 'RattingController@store')->name('customer.order.ratting.post');
});

// Mitra
Route::prefix('mitra')->middleware('auth:mitra')->group(function () {
	Route::get('/', 'MitraController@dashboard')->name('mitra.dashboard');

	Route::prefix('jasa')->group(function () {
		Route::get('/', 'MitraController@jasa')->name('mitra.jasa');
		Route::post('/store', 'JasaController@store')->name('mitra.jasa.store');
		Route::post('/edit/{id}', 'JasaController@edit')->name('mitra.jasa.edit');
		Route::post('/delete/{id}', 'JasaController@delete')->name('mitra.jasa.delete');
	});
	
	Route::prefix('pesanan')->group(function () {
		Route::get('/', 'MitraController@pesanan')->name('mitra.pesanan');
	});
});