<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@home')->name('home');
Route::get('/register', 'HomeController@register')->name('home.register')->middleware('guest');
Route::get('/login', 'HomeController@login')->name('login')->middleware('guest');

Route::post('/login', 'LoginController@postLogin');
Route::post('/register/post', 'LoginController@register_store')->name('register.store');
Route::get('/logout', 'LoginController@logout');


// ADMIN
Route::prefix('admin')->middleware('auth:admin')->group(function () {
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

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
	});
});
