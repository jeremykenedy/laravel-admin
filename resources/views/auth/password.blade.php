{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'hold-transition lockscreen';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Reset Password Request
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