<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
<<<<<<< HEAD
=======
use App\Kategori;
use App\Pesanan;
use App\Tracking;
use App\Garansi;
use App\Feedback;
use App\Chat;
use Auth;
>>>>>>> origin/Firyal_1202180097
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
	public function dashboard(){

		return view('auth.customer.dashboard');
	}
<<<<<<< HEAD
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
=======
	public function pembayaran($id){
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id', $id)->get();

		return view('auth.customer.pembayaran', compact('kategoris','pesanan'));
}
	public function proses($id){
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id', $id)->get();
		$tracking = Tracking::where('id_pesanan', $id)->get();
		$selesai_tes = Tracking::where('id_pesanan', $id)->where('status', 'Selesai')->count();
		return view('auth.customer.proses', compact('kategoris','pesanan','tracking','selesai_tes'));
>>>>>>> origin/Firyal_1202180097
	}
}
