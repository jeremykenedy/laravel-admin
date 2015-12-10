{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Login
@endsection

@section('template_fastload_css')
	{{-- move to scss later --}}
{{-- 	.alert .close {
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
	} --}}
@endsection

@include('partials.macros')

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

			<div class="row">
				<div class="col-xs-12">
					<p class="text-center margin-top-1 margin-bottom-2">- OR -</p>

					{{-- Calls Social Media Login Buttons with Icon Only --}}
					{{--@include('partials.sm-logins-icons')--}}

					{{-- Calls Social Media Login Buttons with Text and Icon --}}
					@include('partials.sm-logins-full')

				</div>
			</div>

	        <hr class="login-full-span">

			<div class="row btn-block">
				<div class="col-xs-12">
					{!! HTML::icon_link( "/register", 'fa fa-'.Lang::get('auth.register_icon'), Lang::get('auth.register'), array('title' => Lang::get('auth.register'))) !!}
				</div>
			</div>

	        <div class="row btn-block">
				<div class="col-xs-12">
					{!! HTML::icon_link( "/password/email", 'fa fa-'.Lang::get('auth.forgot_icon'), Lang::get('auth.forgot'), array('title' => Lang::get('auth.forgot'), 'id' => 'forgot')) !!}
				</div>
	        </div>

      	</div>
    </div>
@endsection

@section('template_scripts')
	{!! HTML::script('/assets/js/login.js', array('type' => 'text/javascript')) !!}
	@include('scripts.checkbox');
@endsection