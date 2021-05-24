<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Customer;
use Auth;

class LoginController extends Controller
{

	public function postLogin(Request $request)
	{
		if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {

			return redirect()->intended('/admin');

		} else if (Auth::guard('customer')->attempt(['username' => $request->username, 'password' => $request->password])) {

			return redirect()->intended('/customer');

		} else {

			return redirect()->intended('/');
		}
	}

	public function logout()
	{
		if (Auth::guard('admin')->check()) {
			Auth::guard('admin')->logout();

		} else if (Auth::guard('customer')->check()) {
			Auth::guard('customer')->logout();	
		}
		return redirect('/');
	}

	public function register_store(Request $request){
		$post = New Customer();
		$post->username = $request->username;
		$post->password = Hash::make($request->password);
		$post->email = $request->email;
		$post->notelp = $request->notelp;
		$post->alamat = $request->alamat;

		$post->save();

		return redirect()->back();
	}

}