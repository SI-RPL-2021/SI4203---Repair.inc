<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Customer;
use App\Kategori;
use App\Pesanan;
use App\Tracking;
use App\Garansi;
use App\Feedback;
use App\Chat;
use Auth;

class CustomerController extends Controller
{
	public function dashboard()
	{

		return view('auth.customer.dashboard');
	}

	public function order()
	{
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id_customer', Auth::guard('customer')->user()->id)->get();

		return view('auth.customer.order', compact('kategoris', 'pesanan'));
	}

	public function pembayaran($id)
	{
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id', $id)->get();

		return view('auth.customer.pembayaran', compact('kategoris', 'pesanan'));
	}


	public function proses($id)
	{
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id', $id)->get();
		$garansi = Garansi::where('id_pesanan', $id)->get();
		$garansi_tes = Garansi::where('id_pesanan', $id)->count();

		return view('auth.customer.proses', compact('kategoris', 'pesanan', 'tracking', 'garansi', 'selesai_tes', 'garansi_tes'));
	}

	// ACTION
	public function delete($id)
	{
		$post = Customer::find($id);
		$post->delete();

		return redirect()->back();
	}

	public function edit(Request $request, $id)
	{
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
