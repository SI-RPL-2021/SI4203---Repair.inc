<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pesanan;
use Auth;

class PesananController extends Controller
{
	public function store(Request $request){
		// PESANAN
		$pesanan = New Pesanan();
		$pesanan->id_jasa = $request->id_jasa;
		$pesanan->id_customer = Auth::guard('customer')->user()->id;
		$pesanan->status = 'Belum disetujui';
		$pesanan->save();




















	public function setujui($id){
		$pesanan = Pesanan::find($id);
		$pesanan->status = 'Belum diproses';
		$pesanan->save();

		return redirect()->back();
	}

	public function tolak($id){
		$pesanan = Pesanan::find($id);
		$pesanan->status = 'Ditolak';
		$pesanan->save();

		return redirect()->back();
	}

	

	






































	
	public function konfirmasi_selesai($id){
		$tracking = New Tracking();
		$tracking->id_pesanan = $id;
		$tracking->status = 'Selesai';
		$tracking->save();

		$pesanan = Pesanan::find($id);
		$pesanan->status = 'Selesai';
		$pesanan->save();

		return redirect()->back();
	}
}
