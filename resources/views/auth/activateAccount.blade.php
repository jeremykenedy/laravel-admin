{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'hold-transition lockscreen login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Activation Sent
@endsection

@section('template_fastload_css')
@endsection

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
					        <div class="welcome-image">
					            {!! HTML::image(Gravatar::get(Lang::get('auth.newUserEmail',['email' => $email] )), Lang::get('auth.newUsername',['username' => $username] ), array('class' => 'image-no-drag')) !!}
					        </div>
					        <div class="lockscreen-name margin-bottom-2">
					        	<h3>
					        		<strong>
					        			{{ Lang::get('auth.newUserWelcome',['username' => $username] ) }}
					        		</strong>
					        	</h3>
					        </div>
					    </div>
		            </div>
		        </div>
		    </div>

		    <div class="lockscreen-body text-center margin-bottom-2">
				<p>
					{{ Lang::get('auth.sentEmail',['email' => $email] ) }}
				</p>
				<p>
					{{ Lang::get('auth.clickInEmail') }}
				</p>
				<p>
					{{ Lang::get('auth.attempsUsed',[
						'attempts' => $attempts,
						'remaining' => $remaining
					]) }}
				</p>
		    </div>

	        <hr class="login-full-span">

			<div class="input-group-btn text-center">
				{!! HTML::icon_btn( '/resendEmail', 'fa fa-paper-plane-o margin-left-1', Lang::get('auth.clickHereResend'), array('title' => Lang::get('auth.clickHereResend'), 'class' => 'btn btn-primary btn-flat margin-top-1 margin-bottom-1')) !!}
			</div>

      	</div>
    </div>

@endsection

@section('template_scripts')
@endsection








