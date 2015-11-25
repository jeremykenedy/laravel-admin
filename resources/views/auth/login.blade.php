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
			  	{{ Lang::get('auth.login') }}
			</h4>

			@include('admin.forms.login-form')

			<div class="social-auth-links text-center">
				<p>- OR -</p>
				@include('partials.macros')
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'facebook'] ), 'fa fa-facebook', 'Sign in using Facebook', array('title' => 'Sign in using Facebook', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'google'] ), 'fa fa-google-plus', 'Sign in using Google+', array('title' => 'Sign in using Google+', 'class' => 'btn btn-block btn-social btn-google btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitter'] ), 'fa fa-twitter', 'Sign in using Twitter', array('title' => 'Sign in using Twitter', 'class' => 'btn btn-block btn-social btn-twitter btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'github'] ), 'fa fa-github', 'Sign in using GitHub', array('title' => 'Sign in using GitHub', 'class' => 'btn btn-block btn-social btn-github btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'youtube'] ), 'fa fa-youtube', 'Sign in using YouTube', array('title' => 'Sign in using YouTube', 'class' => 'btn btn-block btn-social btn-youtube btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitch'] ), 'fa fa-twitch', 'Sign in using twitch', array('title' => 'Sign in using twitch', 'class' => 'btn btn-block btn-social btn-twitch btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'instagram'] ), 'fa fa-instagram', 'Sign in using instagram', array('title' => 'Sign in using instagram', 'class' => 'btn btn-block btn-social btn-instagram btn-flat', 'target' => '')) !!}
				{!! HTML::icon_link( route( 'social.redirect', ['provider' => '37signals'] ), 'fa fa-user', 'Sign in using 37signals', array('title' => 'Sign in using 37signals', 'class' => 'btn btn-block btn-social btn-37signals btn-flat', 'target' => '')) !!}
			</div>

	        <hr class="login-full-span">

			<div class="row btn-block">
				<div class="col-xs-12">
					<a href="/auth/register">
						<i class="fa fa-{{ Lang::get('auth.register_icon') }}" aria-hidden="true"></i>
						{{ Lang::get('auth.register') }}
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

	<script type="text/javascript">
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
@endsection