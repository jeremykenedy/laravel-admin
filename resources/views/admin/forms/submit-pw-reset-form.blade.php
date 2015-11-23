{!! Form::open(array('url' => url('/password/email'), 'method' => 'POST', 'class' => 'lockscreen-credentials form-horizontal', 'role' => 'form')) !!}
	{!! csrf_field() !!}

	<div class="form-group has-feedback">
		{!! Form::label('email', Lang::get('auth.email') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_email'), 'required' => 'required',)) !!}
			<span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4 ">
			<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4">
			{!! Form::button(Lang::get('auth.sendResetLink'), array('class' => 'btn btn-primary','type' => 'submit')) !!}
		</div>
	</div>
{!! Form::close() !!}

@section('template_scripts')
	{!! HTML::script('https://www.google.com/recaptcha/api.js', array('type' => 'text/javascript')) !!}
@endsection