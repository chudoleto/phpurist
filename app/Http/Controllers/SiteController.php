<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	public function home(Request $request)
	{
		return view('site.home');
	}
}