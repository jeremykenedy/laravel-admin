{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Reset Password
@endsection

@section('template_fastload_css')
	{{-- move to scss later --}}
	.alert .close {
		font-size:3.5em;
		font-weight: 100;
		-webkit-transition: all .15s ease-in-out;
		-moz-transition: all .15s ease-in-out;
		-o-transition: all .15s ease-in-out;
		transition: all .15s ease-in-out;
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		transform: rotate(360deg);
	}
	.alert .close:active {
		-webkit-transform: rotate(180deg);
		-moz-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		-o-transform: rotate(180deg);
		transform: rotate(180deg);
		opacity: 0 !important;
	}
@endsection

@include('partials.macros')

@section('content')
    <div class="login-box">
		<div class="login-logo">
			<a href="/">Lara<strong>Admin</strong>LTE</a>
		</div>
		<div class="login-box-body">

			<h4 class="login-box-msg">
			  	{{ Lang::get('titles.resetPword') }}
			</h4>

			@include('admin.forms.reset-password-form')

      	</div>
    </div>
@endsection

@section('template_scripts')
	{!! HTML::script('/assets/js/login.js', array('type' => 'text/javascript')) !!}
	{!! HTML::script('https://www.google.com/recaptcha/api.js', array('type' => 'text/javascript')) !!}
	@include('scripts.checkbox');
	@include('scripts.html5-password-check');
@endsection