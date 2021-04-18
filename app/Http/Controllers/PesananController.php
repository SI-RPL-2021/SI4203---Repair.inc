<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pesanan;
use App\Pembayaran;
use App\Tracking;
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

		// PEMBAYARAN
		$pembayaran = New Pembayaran();
		$pembayaran->id_pesanan = $pesanan->id;
		$pembayaran->kode_invoice = Str::random(10);
		$pembayaran->gambar = null;
		$pembayaran->status = 'Belum dibayar';
		$pembayaran->save();

		// TRACKING
		$tracking = New Tracking();
		$tracking->id_pesanan = $pesanan->id;
		$tracking->status = 'Order';
		$tracking->save();

		return redirect()->intended('/customer/pembayaran'.'/'.$pesanan->id);
	}
}
