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

			<div class="row">
				<div class="col-xs-12">
					<p class="text-center margin-top-1 margin-bottom-2">- OR -</p>

					{{-- Calls Social Media Login Buttons with Icon Only --}}
					@include('partials.sm-logins-icons')

					{{-- Calls Social Media Login Buttons with Text and Icon --}}
					{{-- @include('partials.sm-logins-full') --}}

				</div>
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