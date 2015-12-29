<?php

/*
|--------------------------------------------------------------------------
| Breadcrumbs Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the breadcrumbs for an application.
| It's a breeze. Simply tell Laravel the view it should respond to
| and give it the controller to call when that URI is requested.
|
| http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html
|
*/

// DASHBOARD
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
	$breadcrumbs->push('Dashboard', '/dashboard', ['icon' => 'dashboard']);
});

// DASHBOARD > PROFILE
Breadcrumbs::register('profile', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Profile', '/profile/'.$user->name, ['icon' => 'user']);
});

// DASHBOARD > PROFILE > EDIT
Breadcrumbs::register('profile_edit', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('profile', $user);
    $breadcrumbs->push('Edit', '/profile/'.$user->name.'/edit', ['icon' => 'cog']);
});