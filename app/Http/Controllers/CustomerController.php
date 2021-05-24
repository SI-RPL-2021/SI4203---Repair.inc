<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
	public function dashboard(){

		return view('auth.customer.dashboard');
	}
public function delete($id){
		$post = Customer::find($id);
		$post->delete();

		return redirect()->back();
	}

	public function edit(Request $request, $id){
		$post = Customer::find($id);

		$post->username = $request->username;
		$post->password = Hash::make($request->password);
		$post->email = $request->email;
		$post->notelp = $request->notelp;
		$post->alamat = $request->alamat;

		$post->save();

		return redirect()->back();
	}
}
