<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

//AUTH

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function getHome()
    {
        return view('pages.home');
    }


//LTE




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



    public function show($id)
    {
        //
    }

}
