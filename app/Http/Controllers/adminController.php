<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{

	/**
	* Show the ADMIN DASHBOARD Page
	*
	* @return View
	*/
	public function showAdminDashboard()
	{
		return view('admin.layouts.dashboard');
	}
}