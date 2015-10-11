<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Load Head --}}
        @include('admin.structure.head')
        {!!HTML::style('/assets/css/admin/login.css') !!}
        <style type="text/css">
          .login-full-span {
            margin-left:-20px;
            margin-right:-20px;
          }
        </style>
    </head>
    <body class="hold-transition login-page">

        {{-- Load Google Analytics --}}
        {{-- @include('blog.partials.analytics') --}}

        <div class="login-box">
            <div class="login-logo">
                <a href="/">Lara<b>Admin</b>LTE</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">
                    Register a new account
                </p>
                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full name" required="required">
                        <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="required">
                        <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                        <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Retype password" required="required">
                        <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="checkbox icheck">
                                <label for="agree">
                                    <input type="checkbox" id="agree" name="agree" required="required">&nbsp;&nbsp; I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                &nbsp;Register
                            </button>
                        </div>
                    </div>
                </form>
                <hr class="login-full-span">
                <div class="row btn-block">
                  <div class="col-xs-12">
                    <a href="/login">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      &nbsp;&nbsp;&nbsp;Sign In
                    </a>
                  </div>
                </div>
                <div class="row btn-block">
                  <div class="col-xs-12">
                    <a href="/reset">
                      <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                      &nbsp;&nbsp;&nbsp;&nbsp;I forgot my password
                    </a>
                  </div>
                </div>

            </div>
        </div>

        {{-- Load Template Scripts --}}
        {!! HTML::script('/assets/js/login.js', array('type' => 'text/javascript')) !!}

        <script type="text/javascript">
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
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
        </script>
    </body>
</html>