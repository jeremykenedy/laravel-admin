{!! Form::open(array('url' => '', 'method' => 'get', 'class' => 'sidebar-form', 'role' => 'form')) !!}

    <div class="input-group">
    	{!! Form::label('q', Lang::get('sidebar-nav.search_bar_label'), array('class' => 'sr-only')); !!}
        {!! Form::text('q', null, array('id' => 'q', 'class' => 'form-control', 'placeholder'   => Lang::get('sidebar-nav.search_bar_placeholder'),'value' => '','required' => 'required')) !!}
        <span class="input-group-btn">
			{!! Form::button('<i class="fa '.Lang::get('sidebar-nav.search_bar_icon').'" aria-hidden="true"></i> '.Lang::get('sidebar-nav.search_bar_button'), array('class' => 'btn btn-flat','id' => 'search-btn','name' => 'search ','type' => 'submit')) !!}
        </span>
    </div>

{!! Form::close() !!}