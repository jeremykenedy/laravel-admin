<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

	/**
	* Show the User DASHBOARD Page
	*
	* @return View
	*/
	public function showUserDashboard()
	{
		return view('admin.layouts.dashboard');
	}

	/**
	* Show the User PROFILE Page
	*
	* @return View
	*/
	public function showUserProfile()
	{
		return view('admin.layouts.user-profile');
	}
}