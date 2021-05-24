<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', 'HomeController@home')->name('home');
Route::get('/kategori', 'HomeController@kategori')->name('kategori');
Route::get('/kategori/{id}', 'HomeController@kategori_detail')->name('kategori.detail');
Route::get('/jasa/{id}', 'HomeController@jasa_detail')->name('jasa.detail');
=======
Route::get('/', 'HomeController@home')->name('home');
>>>>>>> origin/Firyal_1202180097
Route::get('/register', 'HomeController@register')->name('home.register')->middleware('guest');
Route::get('/login', 'HomeController@login')->name('login')->middleware('guest');

Route::post('/login', 'LoginController@postLogin');
Route::post('/register/post', 'LoginController@register_store')->name('register.store');
Route::get('/logout', 'LoginController@logout');

<<<<<<< HEAD
=======

>>>>>>> origin/Firyal_1202180097
// ADMIN
Route::prefix('admin')->middleware('auth:admin')->group(function () {
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

<<<<<<< HEAD
	Route::prefix('customer')->group(function () {
		Route::get('/', 'AdminController@customer')->name('admin.customer');
		Route::post('/edit/{id}', 'CustomerController@edit')->name('admin.customer.edit');
		Route::post('/delete/{id}', 'CustomerController@delete')->name('admin.customer.delete');
	});

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



// MITRA
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



// CUSTOMER
Route::prefix('customer')->middleware('auth:customer')->group(function () {
	Route::get('/', 'CustomerController@dashboard')->name('customer.dashboard');
	Route::get('/order', 'CustomerController@order')->name('customer.order');
	Route::get('/pembayaran/{id}', 'CustomerController@pembayaran')->name('customer.pembayaran');

	Route::get('/proses/{id}', 'CustomerController@proses')->name('customer.proses');

	Route::post('/garansi/post', 'GaransiController@store')->name('customer.garansi.store');
	Route::post('/garansi/edit/{id}', 'GaransiController@edit')->name('customer.garansi.edit');
	Route::post('/garansi/delete/{id}', 'GaransiController@delete')->name('customer.garansi.delete');

	Route::post('/order', 'PesananController@store')->name('customer.order.post');
	Route::post('/kirim-bukti/{id}', 'PesananController@kirim_bukti')->name('customer.order.bukti.post');
=======
Route::prefix('mitra')->group(function () {
	Route::get('/', 'AdminController@mitra')->name('admin.mitra');
	Route::post('/store', 'MitraController@store')->name('admin.mitra.store');
	Route::post('/edit/{id}', 'MitraController@edit')->name('admin.mitra.edit');
	Route::post('/delete/{id}', 'MitraController@delete')->name('admin.mitra.delete');
});
});

// CUSTOMER
Route::prefix('customer')->middleware('auth:customer')->group(function () {
});

// Mitra
Route::prefix('mitra')->middleware('auth:mitra')->group(function () {
	Route::get('/', 'MitraController@dashboard')->name('mitra.dashboard');
	
	Route::prefix('pesanan')->group(function () {
		Route::get('/', 'MitraController@pesanan')->name('mitra.pesanan');
		Route::get('/tolak/{id}', 'PesananController@tolak')->name('mitra.pesanan.tolak');
		Route::get('/setujui/{id}', 'PesananController@setujui')->name('mitra.pesanan.setujui');
		Route::post('/konfirmasi-bayar', 'PesananController@konfirmasi_bayar')->name('mitra.pesanan.konfirmasi_bayar');

	});
>>>>>>> origin/Firyal_1202180097
});
