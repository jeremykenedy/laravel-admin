{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'hold-transition lockscreen login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Too Many Activation Email Attempts
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

		@include('admin.partials.return-messages')

		<div class="login-box-body">

		    <div class="lockscreen-footer">
		        <div class="row">
		            <div class="col-xs-10 col-xs-offset-1" >
				        <div class="icon-with-message">
							@if(Auth::check())
								<div class="welcome-image">
								    {!! HTML::image(Gravatar::get(Auth::user()->email), Auth::user()->name, array('class' => 'image-no-drag')) !!}
								</div>
							@endif
					        <div class="lockscreen-name margin-bottom-2">
					        	<h3>
					        		<strong>
					        			Sorry @if(Auth::check()) {{ Auth::user()->name }} @endif
					        		</strong>
					        	</h3>
					        </div>
					    </div>
		            </div>
		        </div>
		    </div>

		    <div class="lockscreen-body text-center margin-bottom-2">
				<p>
					{{ Lang::get('auth.tooManyEmails', ['email' => $email] ) }}
				</p>
				<p>
					{{ Lang::get('auth.attempsDepleted',['attempts' => $attempts] ) }}
				</p>
		    </div>

	        <hr class="login-full-span">

			<div class="row btn-block">
				<div class="col-xs-12">
					{!! HTML::icon_link( "restart", 'fa fa-'.Lang::get('auth.register_icon'), Lang::get('auth.register'), array('title' => Lang::get('auth.register'))) !!}
				</div>
			</div>

			<div class="row btn-block">
				<div class="col-xs-12">
					{!! HTML::icon_link( "another", 'fa fa-'.Lang::get('auth.login_link_icon'), Lang::get('auth.login_link_another'), array('title' => Lang::get('auth.login_link_another'))) !!}
				</div>
			</div>
      	</div>
    </div>

@endsection

@section('template_scripts')
@endsection