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
| http://laravel.com/docs/5.1/authentication
| http://laravel.com/docs/5.1/authorization
| http://laravel.com/docs/5.1/routing
| http://laravel.com/docs/5.0/schema
| http://socialiteproviders.github.io/
|
*/

// HOMEPAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

// ALL AUTHENTICATION ROUTES - HANDLED IN THE CONTROLLERS
Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
]);
// REGISTRATION EMAIL CONFIRMATION ROUTES
Route::get('/resendEmail', [
    'as' 		=> 'user',
	'uses'		=> 'Auth\AuthController@resendEmail'
]);
Route::get('/activate/{code}', [
    'as' 		=> 'user',
	'uses'		=> 'Auth\AuthController@activateAccount'
]);

// CUSTOM REDIRECTS
Route::get('restart', function () {
    \Auth::logout();
    return redirect('auth/register')->with('anError',  \Lang::get('auth.loggedOutLocked'));
});
Route::get('another', function () {
    \Auth::logout();
    return redirect('auth/login')->with('anError',  \Lang::get('auth.tryAnother'));
});

// LARAVEL SOCIALITE AUTHENTICATION ROUTES
Route::get('/social/redirect/{provider}', [
	'as' 		=> 'social.redirect',
	'uses' 		=> 'Auth\AuthController@getSocialRedirect'
]);
Route::get('/social/handle/{provider}',[
	'as' 		=> 'social.handle',
	'uses' 		=> 'Auth\AuthController@getSocialHandle'
]);

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
Route::get('reset', function () {
    return redirect('password/email');
});
Route::get('admin', function () {
    return redirect('dashboard');
});

// USER PAGE ROUTES - RUNNING THROUGH AUTH MIDDLEWARE
Route::group(['middleware' => 'auth'], function () {

	// USER DASHBOARD ROUTE
	Route::get('home', function () {
	    return redirect('/dashboard');
	});

	Route::get('/dashboard', [
	    'as' 		=> 'user',
	    'uses' 		=> 'UserController@index'
	]);

	Route::group(['middleware'=> 'currentUser'], function () {
			Route::resource(
				'profile',
				'ProfilesController', [
					'only' 	=> [
						'show',
						'edit',
						'update'
					]
				]
			);
	});
	Route::get('profile/{username}', [
		'as' 		=> '{username}',
		'uses' 		=> 'ProfilesController@show'
	]);

	Route::get('dashboard/profile/{username}', [
		'as' 		=> '{username}',
		'uses' 		=> 'ProfilesController@show'
	]);

});

// CATCH ALL ERROR FOR USERS AND NON USERS
Route::any('/{page?}',function(){
	if (Auth::check()) {
	    return view('admin.errors.users404');
	} else {
		return View('errors.404');
	}
})->where('page','.*');

// PAGE ROUTE ALIASES
// Route::get('app', function () {
//     return redirect('/');
// });

//***************************************************************************************//
//***************************** USER ROUTING EXAMPLES BELOW *****************************//
//***************************************************************************************//

// //** OPTION - ALL FOLLOWING ROUTES RUN THROUGH AUTHETICATION VIA MIDDLEWARE **//
// Route::group(['middleware' => 'auth'], function () {

// 	// OPTION - GO DIRECTLY TO TEMPLATE
// 	Route::get('/', function () {
// 	    return view('pages.user-home');
// 	});

// 	// OPTION - USE CONTROLLER
// 	Route::get('/', [
// 	    'as' 			=> 'user',
// 	    'uses' 			=> 'UsersController@index'
// 	]);

// });

// //** OPTION - SINGLE ROUTE USING A CONTROLLER AND AUTHENTICATION VIA MIDDLEWARE **//
// Route::get('/', [
//     'middleware' 	=> 'auth',
//     'as' 			=> 'user',
//     'uses' 			=> 'UsersController@index'
// ]);