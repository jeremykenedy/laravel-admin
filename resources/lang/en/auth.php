<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

	// ACTIVATION ITEMS
	'sentEmail'			=> 'We have sent an email to :email.',
	'clickInEmail'		=> 'Please click the link in it to activate your account.',
	'anEmailWasSent'	=> 'An email was sent to :email on :date.',
	'clickHereResend'	=> 'Click here to resend the email.',
	'successActivated'	=> 'Success, your account has been activated.',
	'unsuccessful'		=> 'Your account could not be activated; please try again.',
	'notCreated'		=> 'Your account could not be created; please try again.',
	'tooManyEmails'		=> 'Too many activation emails have been sent to :email.',

	// LABELS
	'whoops'			=> 'Whoops!',
	'someProblems'		=> 'There were some problems with your input.',
	'email'				=> 'E-Mail Address',
	'password'			=> 'Password',
	'rememberMe'		=> '&nbsp;&nbsp;Remember Me',
	'login'				=> 'Sign in to start your session',
	'forgot_icon'		=> 'unlock-alt',
	'forgot'			=> '&nbsp;&nbsp;&nbsp;&nbsp;I forgot my password',
	'forgot_message'	=> 'Password Troubles?',
	'name'				=> 'Username',
	'first_name'		=> 'First Name',
	'last_name'			=> 'Last Name',
	'confirmPassword'	=> 'Confirm Password',
	'register_icon'			=> 'user-plus',
	'register'			=> '&nbsp;Register a new membership',
	'login-button'		=> '&nbsp;Sign In',

	// PLACEHOLDERS
	'ph_name'			=> 'Username',
	'ph_email'			=> 'E-mail Address',
	'ph_firstname'		=> 'First Name',
	'ph_lastname'		=> 'Last Name',
	'ph_password'		=> 'Password',
	'ph_password_conf'	=> 'Confirm Password',

	// USER FLASH MESSAGES
	'sendResetLink'		=> 'Send Password Reset Link',
	'resetPassword'		=> 'Reset Password',
	'loggedIn'			=> 'You are logged in!',
	'loggedOut'			=> 'Successfully Logged Out',
    'failed' 			=> 'These credentials do not match our records.',
    'throttle' 			=> 'Too many login attempts. Please try again in :seconds seconds.',

	// EMAIL LINKS
	'pleaseActivate'	=> 'Please activate your account.',
	'clickHereReset'	=> 'Click here to reset your password: ',
	'clickHereActivate'	=> 'Click here to activate your account: ',

];

/*
{{ Lang::get('auth.tooManyEmails',
	['email' => $email] ) }}
//*/