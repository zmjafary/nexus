<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function viewhome()
	{
		return view('page/home');
	}
}
