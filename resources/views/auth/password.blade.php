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
                    {!! Form::open(array('url' => '/password/email', 'method' => 'POST', 'class' => 'lockscreen-credentials')) !!}
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="input-group">
                        {!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder'   => 'Your e-mail address','value' => '{{ old("email") }}','required' => 'required',)) !!}
                        <div class="input-group-btn">
                            {!! Form::button('<i class="fa fa-arrow-right text-muted"></i>', array('class' => 'btn','type' => 'submit')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
            </div>
            {!! Form::label('email', 'Enter your E-Mail to reset your password', array('class' => 'help-block text-center')); !!}
            <div class="lockscreen-footer text-center">
                <p class="text-muted text-center">- OR -</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" >
                        <div class="text-center">
                            @if (Auth::check())
                                <a href="/home" class="text-center btn btn-primary btn-block btn-flat">Dashboard</a>
                                <a href="/user" class="text-center btn btn-primary btn-block btn-flat">Profile</a>
                            @else
                                <a href="/login" class="text-center btn btn-primary btn-block btn-flat">Sign In</a>
                                <a href="/register" class="text-center btn btn-primary btn-block btn-flat">Register</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>