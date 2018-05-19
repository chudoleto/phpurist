<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	public function home(Request $request)
	{
		return view('site.home');
	}
	
	public function contact(Request $request)
	{
	    return view('site.contact');
	}
	
	public function news(Request $request)
	{
	    return view('site.news');
	}
}