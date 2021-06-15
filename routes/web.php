<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@home')->name('home');
Route::get('/register', 'HomeController@register')->name('home.register')->middleware('guest');
Route::get('/login', 'HomeController@login')->name('login')->middleware('guest');
Route::get('/artikel', 'HomeController@artikel')->name('artikel');
Route::post('/login', 'LoginController@postLogin');
Route::post('/register/post', 'LoginController@register_store')->name('register.store');
Route::get('/logout', 'LoginController@logout');
Route::get('/artikel/{id}', 'HomeController@artikel_detail')->name('artikel.detail');

// ADMIN
Route::prefix('admin')->middleware('auth:admin')->group(function () {
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

	Route::prefix('customer')->group(function () {
		Route::get('/', 'AdminController@customer')->name('admin.customer');
		Route::post('/edit/{id}', 'CustomerController@edit')->name('admin.customer.edit');
		Route::post('/delete/{id}', 'CustomerController@delete')->name('admin.customer.delete');
});

Route::prefix('artikel')->group(function () {
		Route::get('/', 'AdminController@artikel')->name('admin.artikel');
		Route::post('/store', 'ArtikelController@store')->name('admin.artikel.store');
		Route::post('/edit/{id}', 'ArtikelController@edit')->name('admin.artikel.edit');
		Route::post('/delete/{id}', 'ArtikelController@delete')->name('admin.artikel.delete');
	});

});

// CUSTOMER
Route::prefix('customer')->middleware('auth:customer')->group(function () {
	Route::get('/', 'CustomerController@dashboard')->name('customer.dashboard');
	
});