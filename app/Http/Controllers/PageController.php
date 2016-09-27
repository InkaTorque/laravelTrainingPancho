<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class PageController extends Controller
{


	public function getHome()
	{
		return view('pages.welcome');
	}

	public function getTest()
	{
		return view('pages.test');
	}

	public function getAbout($name="WANMARCOS")
	{
		return view('pages.about')->with("name",$name);
	}


}