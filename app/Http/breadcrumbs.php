<?php

// USERS PROFILE BREADCRUMB
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('dashboard'),['icon' => 'fa fa-dashboard']);

});

// USERS PROFILE BREADCRUMB
Breadcrumbs::register('user', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('User Profile', route('user'),['icon' => 'fa fa-user']);
});