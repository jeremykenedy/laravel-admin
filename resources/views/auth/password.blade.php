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
                            <a href="/home" class="text-center btn btn-primary btn-block btn-flat">
                                <i class="fa fa-dashboard"></i>
                                &nbsp;Dashboard
                            </a>
                            <a href="/user" class="text-center btn btn-primary btn-block btn-flat">
                                <i class="fa fa-user"></i>
                                &nbsp;Profile
                            </a>
                        @else
                            <a href="/login" class="text-center btn btn-primary btn-block btn-flat">
                                <i class="fa fa-sign-in"></i>
                                &nbsp;Sign In
                            </a>
                            <a href="/register" class="text-center btn btn-primary btn-block btn-flat">
                                <i class="fa fa-user-plus"></i>
                                &nbsp;Register a new membership
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection