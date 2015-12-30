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
	$breadcrumbs->push(Lang::get('sidebar-nav.link_title_dashboard'), '/dashboard', ['icon' => Lang::get('sidebar-nav.link_icon_dashboard')]);
});

// DASHBOARD > PROFILE
Breadcrumbs::register('profile', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(Lang::get('sidebar-nav.link_title_profile_view'), '/profile/'.$user->name, ['icon' => Lang::get('sidebar-nav.link_icon_profile_view')]);
});

// DASHBOARD > PROFILE > EDIT
Breadcrumbs::register('profile_edit', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('profile', $user);
    $breadcrumbs->push(Lang::get('sidebar-nav.link_title_profile_edit'), '/profile/'.$user->name.'/edit', ['icon' => Lang::get('sidebar-nav.link_icon_profile_edit')]);
});

// DASHBOARD > USERS > SHOW USERS
Breadcrumbs::register('users', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(Lang::get('sidebar-nav.link_title_users'), '/users', ['icon' => Lang::get('sidebar-nav.link_icon_users')]);
});

// DASHBOARD > USERS > EDIT USERS
Breadcrumbs::register('edit_users', function($breadcrumbs)
{
    $breadcrumbs->parent('users');
    $breadcrumbs->push(Lang::get('sidebar-nav.link_title_users_edit'), '/edit-users', ['icon' => Lang::get('sidebar-nav.link_icon_users_edit')]);
});

// DASHBOARD > USERS > EDIT USERS > SHOW USER
Breadcrumbs::register('show_user_admin_view', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('edit_users');
    $breadcrumbs->push($user->name, '/users/'.$user->id, ['icon' => Lang::get('sidebar-nav.link_icon_profile_view')]);
});

// DASHBOARD > USERS > EDIT USERS > USER > EDIT USER
Breadcrumbs::register('edit_user_admin_view', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('show_user_admin_view', $user);
    $breadcrumbs->push(Lang::get('sidebar-nav.title_admin_user_edit'), '/users/'.$user->id.'/edit', ['icon' => Lang::get('sidebar-nav.icon_admin_user_edit')]);
});

// DASHBOARD > USERS > EDIT USERS > CREATE USER
Breadcrumbs::register('create_user_admin_view', function($breadcrumbs)
{
    $breadcrumbs->parent('edit_users');
    $breadcrumbs->push(Lang::get('sidebar-nav.link_title_user_create'), '/create-user', ['icon' => Lang::get('sidebar-nav.link_icon_user_create')]);
});
