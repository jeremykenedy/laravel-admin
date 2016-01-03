{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'hold-transition lockscreen';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Reset Password Request
@endsection

@section('template_fastload_css')
@endsection

@section('content')

    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="/">Lara<b>Admin</b>LTE</a>
        </div>

        @include('admin.partials.return-messages')

        <div class="lockscreen-name margin-bottom-2">
            {{ Lang::get('titles.resetPword') }}
        </div>

		@include('admin.forms.submit-pw-reset-form')

        <div class="lockscreen-footer text-center">
            <p class="text-muted text-center margin-bottom-2">- OR -</p>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2" >
                    <div class="text-center">
                        @if (Auth::check())
                            {!! HTML::icon_link( "/home", 'fa fa-dashboard', '&nbsp;Dashboard', array('title' => 'Dashboard', 'class' => 'text-center btn btn-primary btn-block btn-flat')) !!}
                            {!! HTML::icon_link( "/user", 'fa fa-user', '&nbsp;Profile', array('title' => 'Profile', 'class' => 'text-center btn btn-primary btn-block btn-flat')) !!}
                        @else
                            {!! HTML::icon_link( "/login", 'fa fa-sign-in', '&nbsp;Sign In', array('title' => 'Sign In', 'class' => 'text-center btn btn-primary btn-block btn-flat')) !!}
                            {!! HTML::icon_link( "/register", 'fa fa-user-plus', '&nbsp;Register a new membership', array('title' => 'Register a new membership', 'class' => 'text-center btn btn-primary btn-block btn-flat')) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('template_scripts')
    {!! HTML::script('/assets/js/login.js', array('type' => 'text/javascript')) !!}
@endsection