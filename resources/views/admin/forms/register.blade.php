{!! Form::open(array('url' => '/auth/registe', 'method' => 'POST')) !!}
    {!! csrf_field() !!}
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-group has-feedback">
        {!! Form::label('name', 'Full Name', array('class' => 'sr-only')); !!}
        {!! Form::text('name', null, array('id' => 'name', 'class' => 'form-control', 'placeholder'   => 'Full Name','value' => '{{ old("name") }}', 'required' => 'required',)) !!}
        <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('email', 'E-mail Address', array('class' => 'sr-only')); !!}
        {!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder'   => 'E-mail Address','value' => '{{ old("email") }}', 'required' => 'required',)) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('password', 'Password', array('class' => 'sr-only')); !!}
        {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder'   => 'Password', 'required' => 'required')) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('password_confirmation', 'Retype Password', array('class' => 'sr-only')); !!}
        {!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder'   => 'Retype Password', 'required' => 'required')) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="checkbox icheck">
                {!! Form::label('agree', 'I agree to the terms', array('class' => 'sr-only')); !!}
                {!! Form::checkbox('agree', 'agree', true, array('id' => 'agree', 'required' => 'required')); !!}
                &nbsp; I agree to the {!! HTML::link('#', 'terms'); !!}
            </div>
        </div>
        <div class="col-xs-6">
            {!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Register', array('class' => 'btn btn-primary btn-block btn-flat','type' => 'submit')) !!}
        </div>
    </div>
{!! Form::close() !!}