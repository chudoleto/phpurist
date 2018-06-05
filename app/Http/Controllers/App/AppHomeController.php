<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppHomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function get(Request $request)
	{
		return view('app.home');
	}
}