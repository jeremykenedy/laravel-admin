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