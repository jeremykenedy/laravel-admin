{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Login
@endsection

@section('template_fastload_css')
@endsection

@section('content')
    <div class="login-box">
		<div class="login-logo">
			<a href="/">Lara<strong>Admin</strong>LTE</a>
		</div>
		<div class="login-box-body">

			<h4 class="login-box-msg">
			  	{{ Lang::get('auth.register') }}
			</h4>

	        @include('admin.forms.register-form')

			<div class="social-auth-links text-center">
				<p>- OR -</p>
				@include('partials.macros')
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'facebook'] ), 'fa fa-facebook', 'Sign up using Facebook', array('title' => 'Sign up using Facebook', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'google'] ), 'fa fa-google-plus', 'Sign up using Google+', array('title' => 'Sign up using Google+', 'class' => 'btn btn-block btn-social btn-google btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitter'] ), 'fa fa-twitter', 'Sign up using Twitter', array('title' => 'Sign up using Twitter', 'class' => 'btn btn-block btn-social btn-twitter btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'github'] ), 'fa fa-github', 'Sign up using GitHub', array('title' => 'Sign up using GitHub', 'class' => 'btn btn-block btn-social btn-github btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'youtube'] ), 'fa fa-youtube', 'Sign up using YouTube', array('title' => 'Sign up using YouTube', 'class' => 'btn btn-block btn-social btn-youtube btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitch'] ), 'fa fa-twitch', 'Sign up using twitch', array('title' => 'Sign up using twitch', 'class' => 'btn btn-block btn-social btn-twitch btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'instagram'] ), 'fa fa-instagram', 'Sign up using instagram', array('title' => 'Sign up using instagram', 'class' => 'btn btn-block btn-social btn-instagram btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => '37signals'] ), 'fa fa-user', 'Sign up using 37signals', array('title' => 'Sign up using 37signals', 'class' => 'btn btn-block btn-social btn-37signals btn-flat', 'target' => '')) !!}
			</div>

	        <hr class="login-full-span">

			<div class="row btn-block">
				<div class="col-xs-12">
					<a href="/auth/login">
						<i class="fa fa-{{ Lang::get('auth.login_link_icon') }}" aria-hidden="true"></i>
						{{ Lang::get('auth.login_link') }}
					</a>
				</div>
			</div>

	        <div class="row btn-block">
				<div class="col-xs-12">
					<a id="forgot" href="/password/email">
						<i class="fa fa-{{ Lang::get('auth.forgot_icon') }}" aria-hidden="true"></i>
						{{ Lang::get('auth.forgot') }}
					</a>
				</div>
	        </div>

      	</div>
    </div>
@endsection

@section('template_scripts')
	{!! HTML::script('/assets/js/login.js', array('type' => 'text/javascript')) !!}
	{!! HTML::script('https://www.google.com/recaptcha/api.js', array('type' => 'text/javascript')) !!}

	<script type="text/javascript">

		// CROSS BROWSER FORM CHECKBOX
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});

		// CHECK FOR PASSWORDS TO MATCH
		document.addEventListener("DOMContentLoaded", function(event) {
		  	matching_password_check();
		});
        function matching_password_check() {
            var password = document.getElementById("password");
            var confirm_password = document.getElementById("password_confirmation");
            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("The Passwords do not match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        }
    </script>

@endsection