{!! Form::open(array('url' => url('/password/reset'), 'method' => 'POST', 'role' => 'form')) !!}
	{!! csrf_field() !!}
	{!! Form::hidden('token', $token) !!}

	@include('admin.partials.return-messages')

    <div class="form-group has-feedback">
		{!! Form::label('email', Lang::get('auth.email') , array('class' => 'sr-only')); !!}
		{!! Form::email('email', old('email'), array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_email'), 'required' => 'required')) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
		{!! Form::label('password', Lang::get('auth.password') , array('class' => 'sr-only')); !!}
		{!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_password'), 'required' => 'required',)) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
		{!! Form::label('password_confirmation', Lang::get('auth.confirmPassword') , array('class' => 'sr-only')); !!}
		{!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_password_conf'), 'required' => 'required',)) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
    </div>

	<div class="form-group">
		{!! Form::button(Lang::get('auth.resetPassword').'&nbsp;&nbsp;<i class="fa fa-unlock-alt" aria-hidden="true"></i>', array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
	</div>
{!! Form::close() !!}



