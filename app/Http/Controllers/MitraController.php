<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mitra;
use App\Jasa;
<<<<<<< HEAD
use App\Kategori;
=======
use App\Pesanan;
>>>>>>> origin/Firyal_1202180097
use Auth;

class MitraController extends Controller
{
<<<<<<< HEAD
	public function dashboard()
	{
		return view('auth.mitra.dashboard');
	}

	public function jasa()
	{
		$jasa = Jasa::where('id_mitra'('mitra')->user()->id)->get();

		$kategori = Kategori::all();

		return view('auth.mitra.jasa', compact('jasa', 'kategori'));
	}

	public function pesanan()
	{
=======
	public function dashboard(){
		
		return view('auth.mitra.dashboard');
	}

	public function pesanan(){
>>>>>>> origin/Firyal_1202180097
		$jasa = Jasa::where('id_mitra', Auth::guard('mitra')->user()->id)->get();

		$jasas = [];

		foreach ($jasa as $key) {
<<<<<<< HEAD
			$jasas[] = [$key->id];
=======
			$jasas[] = [$key->id];	
>>>>>>> origin/Firyal_1202180097
		};

		$pesanan = Pesanan::whereIn('id_jasa', $jasas)->get();

<<<<<<< HEAD
		return view('auth.mitra.pesanan', compact('pesanan'));
	}

	// ACTION
	public function store(Request $request)
	{
		$post = new Mitra();
=======
		return view('auth.mitra.pesanan',compact('pesanan'));
	}

    // ACTION
	public function store(Request $request){
		$post = New Mitra();
>>>>>>> origin/Firyal_1202180097
		$post->username = $request->username;
		$post->password = Hash::make($request->password);
		$post->nama = $request->nama;
		$post->notelp = $request->notelp;
		$post->rating = $request->rating;
		$post->descPerform = $request->descPerform;

		$post->save();

		return redirect()->back();
	}

<<<<<<< HEAD
	public function edit(Request $request, $id)
	{
=======
	public function edit(Request $request, $id){
>>>>>>> origin/Firyal_1202180097
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

<<<<<<< HEAD
	public function delete($id)
	{
=======
	public function delete($id){
>>>>>>> origin/Firyal_1202180097
		$post = Mitra::find($id);
		$post->delete();

		return redirect()->back();
	}
}
