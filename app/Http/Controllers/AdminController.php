<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use App\Customer;

=======
use App\Mitra;
>>>>>>> origin/Firyal_1202180097
class AdminController extends Controller
{
	public function dashboard(){
		return view('auth.admin.dashboard');
	}
<<<<<<< HEAD
	public function customer(){
		$customer = Customer::all();
		return view('auth.admin.customer', compact('customer'));
	}
}
=======
	public function mitra(){
		$mitra = Mitra::all();
		return view('auth.admin.mitra', compact('mitra'));
	}
}
>>>>>>> origin/Firyal_1202180097
