{!! Form::open(array('url' => url('/password/email'), 'method' => 'POST', 'class' => 'lockscreen-credentials form-horizontal', 'role' => 'form')) !!}
	{!! csrf_field() !!}

    <div class="lockscreen-item">
        <div class="lockscreen-image">
        	{{-- Havent decided what to put here yet - jk --}}
            {!! HTML::image('http://placekitten.com/g/128/128', 'User Image', array('class' => '')) !!}
        </div>

	    <div class="input-group">
	        {!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder'   => Lang::get('auth.ph_email'),'value' => '','required' => 'required',)) !!}
	        <div class="input-group-btn">
	            {!! Form::button('<i class="fa fa-arrow-right text-muted"></i>', array('class' => 'btn','type' => 'submit')) !!}
	        </div>
	    </div>

	</div>

	{!! Form::label('email', Lang::get('auth.email'), array('class' => 'help-block text-center control-label sr-only')); !!}

{!! Form::close() !!}