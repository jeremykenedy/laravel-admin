{!! Form::open(array('url' => 'auth/login', 'method' => 'POST', 'class' => 'login-form', 'role' => 'form')) !!}
	{!! csrf_field() !!}

	@include('admin.partials.return-messages')

	<div class="form-group has-feedback">
		{!! Form::label('email', Lang::get('auth.email'), array('class' => 'sr-only')); !!}
		{!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder'   => Lang::get('auth.ph_email'),'value' => '','required' => 'required',)) !!}
		<span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="form-group has-feedback">
		{!! Form::label('password', Lang::get('auth.password'), array('class' => 'sr-only')); !!}
		{!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder'   => Lang::get('auth.ph_password'),'required' => 'required')) !!}
		<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<div class="checkbox icheck">
				{!! Form::checkbox('remember', 'remember', true, array('id' => 'remember', 'class' => 'icheckbox_square-blue')); !!}
				{!! Form::label('remember', Lang::get('auth.rememberMe')); !!}
			</div>
		</div>
		<div class="col-xs-6">
			{!! Form::button('<i class="fa fa-sign-in" aria-hidden="true"></i> '.Lang::get('auth.login-button'), array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
		</div>
	</div>

{!! Form::close() !!}