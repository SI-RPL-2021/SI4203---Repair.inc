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

	public function konfirmasi_bayar(Request $request){
		$pembayaran = Pembayaran::find($request->id);
		$pembayaran->id_pesanan = $pembayaran->id_pesanan;
		$pembayaran->kode_invoice = $pembayaran->kode_invoice;
		$pembayaran->status = 'Terbayar';
		$pembayaran->save();

		$pesanan = Pesanan::find($pembayaran->id_pesanan);
		$pesanan->status = 'Sedang diproses';
		$pesanan->save();

		$tracking = New Tracking();
		$tracking->id_pesanan = $pembayaran->id_pesanan;
		$tracking->status = 'Proses';
		$tracking->save();

		return redirect()->back();
	}
}
