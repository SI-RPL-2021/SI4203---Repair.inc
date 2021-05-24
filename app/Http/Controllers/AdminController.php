<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mitra;
use App\Kategori;
class AdminController extends Controller
{
	public function dashboard(){
		return view('auth.admin.dashboard');
	}
	public function mitra(){
		$mitra = Mitra::all();
		return view('auth.admin.mitra', compact('mitra'));
	}
	public function kategori(){
		$kategori = Kategori::all();
		return view('auth.admin.kategori', compact('kategori'));
	}
}