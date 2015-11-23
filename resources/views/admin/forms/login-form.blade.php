<?php include '../resources/macros.php' ?>

{!! Form::open(array('url' => 'auth/login', 'method' => 'POST', 'class' => '', 'role' => 'form')) !!}
	{!! csrf_field() !!}

	@include('admin.partials.return-messages')

	<div class="form-group has-feedback">
		{!! Form::label('email', 'E-mail Address', array('class' => 'sr-only')); !!}
		{!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder'   => 'E-mail Address','value' => '{{ old("email") }}','required' => 'required',)) !!}
		<span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="form-group has-feedback">
		{!! Form::label('password', 'Password', array('class' => 'sr-only')); !!}
		{!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder'   => 'Password','required' => 'required')) !!}
		<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<div class="checkbox icheck">
			{!! Form::checkbox('remember', 'remember', true, array('id' => 'remember')); !!}
			{!! Form::label('remember', '&nbsp;&nbsp;Remember Me'); !!}
			</div>
		</div>
		<div class="col-xs-6">
			{!! Form::button('<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Sign In', array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
		</div>
	</div>

{{-- 	<div class="form-group has-feedback">
		{!! Form::label('email', Lang::get('auth.email') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_email'), 'required' => 'required',)) !!}
			<span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<div class="form-group has-feedback">
		{!! Form::label('password', Lang::get('auth.password') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_password'), 'required' => 'required',)) !!}
			<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-6 col-xs-offset-1 col-sm-offset-4">
			<div class="checkbox">
				{!! Form::checkbox('remember', 'remember', true, array('id' => 'remember')); !!}
				{!! Form::label('remember', Lang::get('auth.rememberMe')); !!}
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-3">
			{!! Form::button(Lang::get('auth.login'), array('class' => 'btn btn-primary','type' => 'submit')) !!}
		</div>
	</div>
	<p class="text-center">Or</p> --}}

	<div class="form-group social-auth-links text-center">
		<p>- OR -</p>
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'facebook'] ), 'fa fa-facebook', 'Sign in using Facebook', array('title' => 'Sign in using Facebook', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'google'] ), 'fa fa-google-plus', 'Sign in using Google+', array('title' => 'Sign in using Google+', 'class' => 'btn btn-block btn-social btn-google btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitter'] ), 'fa fa-twitter', 'Sign in using Twitter', array('title' => 'Sign in using Twitter', 'class' => 'btn btn-block btn-social btn-twitter btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'github'] ), 'fa fa-github', 'Sign in using GitHub', array('title' => 'Sign in using GitHub', 'class' => 'btn btn-block btn-social btn-github btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'youtube'] ), 'fa fa-youtube', 'Sign in using YouTube', array('title' => 'Sign in using YouTube', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'youtube'] ), 'fa fa-youtube', 'Sign in using youtube', array('title' => 'Sign in using youtube', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitch'] ), 'fa fa-twitch', 'Sign in using twitch', array('title' => 'Sign in using twitch', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'instagram'] ), 'fa fa-instagram', 'Sign in using instagram', array('title' => 'Sign in using instagram', 'class' => 'btn btn-block btn-social btn-instagram btn-flat', 'target' => '')) !!}
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => '37signals'] ), 'fa fa-37signals', 'Sign in using 37signals', array('title' => 'Sign in using 37signals', 'class' => 'btn btn-block btn-social facebook btn-flat', 'target' => '')) !!}
	</div>


{!! Form::close() !!}




