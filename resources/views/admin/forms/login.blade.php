{!! Form::open(array('url' => '/auth/login', 'method' => 'POST')) !!}
  {!! csrf_field() !!}
  @if (count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  <div class="form-group has-feedback">
    {!! Form::label('email', 'E-mail Address', array('class' => 'sr-only')); !!}
    {!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder'   => 'E-mail Address','value' => '{{ old("email") }}','required' => 'required',)) !!}
    <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
  </div>
  <div class="form-group has-feedback">
    {!! Form::label('password', 'Password', array('class' => 'sr-only')); !!}
    {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder'   => 'Password','required' => 'required')) !!}
    <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
  </div>
  <div class="row">
    <div class="col-xs-6">
      <div class="checkbox icheck">
        {!! Form::checkbox('remember', 'remember', true, array('id' => 'remember')); !!}
        {!! Form::label('remember', '&nbsp;&nbsp;Remember Me'); !!}
      </div>
    </div>
    <div class="col-xs-6">
      {!! Form::button('<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Sign In', array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
    </div>
  </div>
{!! Form::close() !!}