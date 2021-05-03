<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
	public function dashboard(){

		return view('auth.customer.dashboard');
	}
}
