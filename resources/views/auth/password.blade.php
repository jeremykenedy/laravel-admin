<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Load Head --}}
        @include('admin.structure.head')
        {!!HTML::style('/assets/css/admin/login.css') !!}
    </head>
    <body class="hold-transition lockscreen">

        {{-- Load Google Analytics --}}
        {{-- @include('blog.partials.analytics') --}}

        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <a href="/">Lara<b>Admin</b>LTE</a>
            </div>
            <div class="lockscreen-name">
                Reset Password
            </div>
            <div class="lockscreen-item">
                <div class="lockscreen-image">
                    {!! HTML::image('http://placekitten.com/g/128/128', 'User Image', array('class' => '')) !!}
                </div>

                @include('admin.forms.reset-pw')

            </div>
            {!! Form::label('email', 'Enter your E-Mail to reset your password', array('class' => 'help-block text-center')); !!}
            <div class="lockscreen-footer text-center">
                <p class="text-muted text-center">- OR -</p>
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
    </body>
</html>