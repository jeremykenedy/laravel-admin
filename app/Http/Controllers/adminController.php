<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
	/**
	* Show the Page
	*
	* @return View
	*/
	public function showView()
	{
		return view('admin.layouts.dashboard');
	}
}