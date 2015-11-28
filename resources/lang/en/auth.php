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
    'newUsername'		=> ':username',
    'newUserEmail'		=> ':email',
    'newUserWelcome'	=> 'Welcome :username',
	'attempsUsed'		=> 'You have :remaining attempts remaining',
	'attempsDepleted'   => 'Attempted activation :attempts times',
	'sentEmail'			=> 'We have sent an E-mail to :email',
	'clickInEmail'		=> 'Please click the link in it to activate your account',
	'anEmailWasSent'	=> 'An E-mail was sent to :email on :date',
	'clickHereResend'	=> 'Click here to resend activation E-mail',
	'successActivated'	=> 'Success, your account has been activated',
	'unsuccessful'		=> 'Your account could not be activated; please try again',
	'notCreated'		=> 'Your account could not be created; please try again',
	'tooManyEmails'		=> 'Too many activation E-mails have been sent to :email',
	'welcome-activate'	=> 'Please activate your account.',
	'login_link_another'=> '&nbsp;&nbsp;Sign in with another account',
	'loggedOutLocked'	=> 'Try again with a different E-mail address',
	'tryAnother'		=> 'Login with a differnet E-mail',

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
	'register_icon'		=> 'user-plus',
	'register'			=> '&nbsp;Register a new membership',
	'register_submit'	=> '&nbsp;Register',
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
    'failed' 			=> 'These credentials do not match our records',
    'throttle' 			=> 'Too many login attempts. Please try again in :seconds seconds',

	// EMAIL LINKS
	'pleaseActivate'	=> 'Please activate your account.',
	'clickHereReset'	=> 'Click here to reset your password: ',
	'clickHereActivate'	=> 'Click here to activate your account: ',

	// REGISTER FOOTER PAGE LABEL
	'login_link_icon'	=> 'user',
	'login_link'		=> '&nbsp;&nbsp;&nbsp;I already have a membership',

];

/*
{{ Lang::get('auth.tooManyEmails',
	['email' => $email] ) }}
//*/