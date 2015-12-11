{!! Form::open(array('url' => url('/auth/register'), 'method' => 'POST', 'role' => 'form')) !!}

	{!! csrf_field() !!}

	@include('admin.partials.return-messages')

    <div class="form-group has-feedback">
    	{!! Form::label('name', Lang::get('auth.name') , array('class' => 'sr-only')); !!}
        {!! Form::text('name', old('name'), array('id' => 'name', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_name'), 'required' => 'required')) !!}
        <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
    </div>
	<div class="form-group has-feedback">
		{!! Form::label('first_name', Lang::get('auth.first_name') , array('class' => 'sr-only')); !!}
		{!! Form::text('first_name', old('first_name'), array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_firstname'), 'required' => 'required')) !!}
	    <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
	</div>
	<div class="form-group has-feedback">
		{!! Form::label('last_name', Lang::get('auth.last_name') , array('class' => 'sr-only')); !!}
		{!! Form::text('last_name', old('last_name'), array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_lastname'), 'required' => 'required')) !!}
	    <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
	</div>
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

    <div class="row form-group">
		<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="checkbox icheck">
                {!! Form::label('agree', 'I agree to the terms', array('class' => 'sr-only')); !!}
                {!! Form::checkbox('agree', 'agree', true, array('id' => 'agree',  'class' => 'icheckbox_square-blue','required' => 'required')); !!}
                &nbsp; I agree to the {!! HTML::link('#', 'terms'); !!}
            </div>
        </div>

        <div class="col-xs-6">
            {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;'.Lang::get('auth.register_submit'), array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
        </div>
    </div>
{!! Form::close() !!}