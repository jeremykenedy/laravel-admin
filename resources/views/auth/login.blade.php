{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Login
@endsection

@section('template_fastload_css')

	{{-- Add to SCSS later --}}
	.login-full-span {
		margin-left:-20px;
		margin-right:-20px;
	}
	.btn-37signals  {
		background: #67aa49;
		color: #fff;
	}
	a.btn-37signals:hover,
	.btn-37signals:hover {
		background: #329f2a;
		color: #fff;
	}
	.btn-youtube {
		background: #cd201f;
		color: #fff;
	}
	a.btn-youtube:hover,
	.btn-youtube:hover {
		background: #AF1B1A;
		color: #fff;
	}
	.btn-twitch {
		background: #6441A5 ;
		color: #fff;
	}
	a.btn-twitch:hover,
	.btn-twitch:hover {
		background: #55378E ;
		color: #fff;
	}
	.alert .close {
		text-decoration: none;
	}

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