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
          Sign in to start your session
        </p>
        <form method="POST" action="/auth/login">
          {!! csrf_field() !!}
          <div class="form-group has-feedback">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <div class="checkbox icheck">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">
                  &nbsp;&nbsp;Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">
                <i class="fa fa-sign-in "></i>
                &nbsp;Sign In
              </button>
            </div><!-- /.col -->
          </div>
        </form>
{{--          <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div> --}}
        <hr class="login-full-span">
        <div class="row btn-block">
          <div class="col-xs-12">
            <a href="/register">
              <i class="fa fa-user-plus"></i>
              &nbsp;Register a new membership
            </a>
          </div>
        </div>
        <div class="row btn-block">
          <div class="col-xs-12">
            <a href="/reset">
              <i class="fa fa-unlock-alt"></i>
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
    </script>

  </body>
</html>