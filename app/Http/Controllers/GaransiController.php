<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garansi;

class GaransiController extends Controller
{
	public function store(Request $request)
	{
		$post = new Garansi();
		$post->id_pesanan = $request->id_pesanan;
		$post->garansi = $request->garansi;
		$post->save();

		return redirect()->back();
	}

	public function edit(Request $request, $id)
	{
		$post = Garansi::find($id);
		$post->id_pesanan = $request->id_pesanan;
		$post->garansi = $request->garansi;
		$post->save();

		return redirect()->back();
	}

	public function delete($id)
	{
		$post = Garansi::find($id);
		$post->delete();

		return redirect()->back();
	}
}
