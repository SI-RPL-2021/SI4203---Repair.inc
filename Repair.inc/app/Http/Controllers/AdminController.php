<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Customer;

class AdminController extends Controller
{
	public function dashboard(){
		return view('auth.admin.dashboard');
	}
	public function customer(){
		$customer = Customer::all();
		return view('auth.admin.customer', compact('customer'));
	}
}