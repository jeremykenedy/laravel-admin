<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('admin', 'adminController@showView');

// HOMEPAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

// AUTHENTICATION ROUTES
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// AUTHENTICATION REGISTRATION ROUTES
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// AUTHENTICATION ALIASES/REDIRECTS
Route::get('login', function () {
    return redirect('auth/login');
});
Route::get('logout', function () {
    return redirect('auth/logout');
});
Route::get('register', function () {
    return redirect('auth/register');
});

// PASSWORD RESET LINK REQUEST ROUTES
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::get('/reset', function () {
    return view('auth.password');
});


// USER PAGES ROUTES
$router->group([
  'namespace' => 'Users',
  'middleware' => 'auth',
], function () {

	Route::get('home', function () {
	    return view('admin.layouts.dashboard');
	});

	Route::get('user', function () {
		return view('admin.layouts.user-profile');
	});

	Route::get('user/{id}', function ($id) {
		$user = App\User::find($id);
		echo 'User ID: '	. $id.			'<br />';
		echo 'User Email: '	. $user->email.	'<br />';
		echo 'User Name: '	. $user->name.	'<br />';
		echo '<a href="/auth/logout">Logout</a>';
	});

	Route::get('user/{id}', function ($id) {
		$user = App\User::find($id);
		echo 'User ID: '	. $id.			'<br />';
		echo 'User Email: '	. $user->email.	'<br />';
		echo 'User Name: '	. $user->name.	'<br />';
		echo '<a href="/auth/logout">Logout</a>';
	});

});

// ADMIN PAGES ROUTES
$router->group([
  'namespace' => 'Admin',
  'middleware' => 'admin',
], function () {
	Route::get('admin', function () {
	    echo 'Welcome to your admin page '. Auth::user()->email .'.';
	});
});

// SUPER ADMIN ADMIN PAGES ROUTES
$router->group([
  'namespace' => 'SuperAdmin',
  'middleware' => 'superadmin',
], function () {
	Route::get('superadmin', function () {
	    echo 'Welcome to your superadmin page '. Auth::user()->email .'.';
	});

});

// CATCH ALL ERROR HANDLING FOR NOW
Route::any('/{page?}',function(){
	if (Auth::check()) {
	    return view('admin.errors.users404');
	} else {
		return View('errors.404');
	}
})->where('page','.*');
