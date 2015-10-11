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

// USER PAGES ROUTING
$router->group([
  'middleware' => 'auth',
], function () {
	Route::get('home', 'UsersController@showUserDashboard');
	Route::get('user', 'UsersController@showUserProfile');
});

// ADMIN PAGES ROUTING
$router->group([
  'middleware' => 'admin',
], function () {
	Route::get('admin', 'AdminController@showAdminDashboard');
});

////// WORKING HERE - NEED TO PUT IN CONTROLLER - WAITING UNTIL ACTUALL WORK ON THOSE PAGES.
// SUPER ADMIN ADMIN PAGES ROUTING
$router->group([
  'middleware' => 'superadmin',
], function () {

	Route::get('superadmin', function () {
	    echo 'Welcome to your superadmin page '. Auth::user()->email .'.';

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

// TEST OF IMAGE ROUTING WITH BACKEND FILTER
// Route::get('/image', function()
// {
//     $img = Image::make('http://www.entheosweb.com/fireworks/images/tracing/img18.jpg');
//     $img->resize(300, 200);
//     $img->pixelate(10);
//     $img->colorize(0, 30, 0);
//     $img->opacity(.9);
//     return $img->response('jpg');
// });

// CATCH ALL ERROR HANDLING FOR NOW
Route::any('/{page?}',function(){
	if (Auth::check()) {
	    return view('admin.errors.users404');
	} else {
		return View('errors.404');
	}
})->where('page','.*');

