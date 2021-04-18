<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Kategori;
use App\Pesanan;
use Auth;

class CustomerController extends Controller
{
	public function order(){
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id_customer', Auth::guard('customer')->user()->id)->get();

		return view('auth.customer.order', compact('kategoris','pesanan'));
	}

	public function pembayaran($id){
		$kategoris = Kategori::limit(4)->get();
		$pesanan = Pesanan::where('id', $id)->get();

		return view('auth.customer.pembayaran', compact('kategoris','pesanan'));
	}
}
