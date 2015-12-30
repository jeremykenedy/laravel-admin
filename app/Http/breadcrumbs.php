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

// DASHBOARD > USERS > SHOW USERS
Breadcrumbs::register('users', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Users', '/users', ['icon' => 'users']);
});

// DASHBOARD > USERS > EDIT USERS
Breadcrumbs::register('edit_users', function($breadcrumbs)
{
    $breadcrumbs->parent('users');
    $breadcrumbs->push('Edit Users', '/edit-users', ['icon' => 'cog']);
});

// DASHBOARD > USERS > EDIT USERS > SHOW USER
Breadcrumbs::register('show_user_admin_view', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('edit_users');
    $breadcrumbs->push($user->name, '/users/'.$user->id, ['icon' => 'user']);
});

// DASHBOARD > USERS > EDIT USERS > USER > EDIT USER
Breadcrumbs::register('edit_user_admin_view', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('show_user_admin_view', $user);
    $breadcrumbs->push('Edit', '/users/'.$user->id.'/edit', ['icon' => 'user']);
});

// DASHBOARD > USERS > EDIT USERS > CREATE USER
Breadcrumbs::register('create_user_admin_view', function($breadcrumbs)
{
    $breadcrumbs->parent('edit_users');
    $breadcrumbs->push('Create User', '/create-user', ['icon' => 'user']);
});