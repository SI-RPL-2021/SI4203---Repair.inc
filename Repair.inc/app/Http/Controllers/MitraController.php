<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mitra;
use App\Pesanan;
use Auth;

class MitraController extends Controller
{
	public function dashboard(){
		return view('auth.mitra.dashboard');
	}

	public function pesanan(){

		return view('auth.mitra.pesanan');
	}
    // ACTION
	public function store(Request $request){
		$post = New Mitra();
		$post->username = $request->username;
		$post->password = Hash::make($request->password);
		$post->nama = $request->nama;
		$post->notelp = $request->notelp;
		$post->rating = $request->rating;
		$post->descPerform = $request->descPerform;

		$post->save();

		return redirect()->back();
	}

	public function edit(Request $request, $id){
		$post = Mitra::find($id);
		$post->username = $request->username;
		$post->password = Hash::make($request->password);
		$post->nama = $request->nama;
		$post->notelp = $request->notelp;
		$post->rating = $request->rating;
		$post->descPerform = $request->descPerform;

		$post->save();

		return redirect()->back();
	}

	public function delete($id){
		$post = Mitra::find($id);
		$post->delete();

		return redirect()->back();
	}
}
