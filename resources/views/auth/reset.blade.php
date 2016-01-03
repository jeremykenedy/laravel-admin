{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Reset Password
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
	@include('scripts.show-hide-passwords');
@endsection