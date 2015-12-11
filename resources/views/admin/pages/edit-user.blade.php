@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Showing User {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">

	    	<h1>Edit {{ $user->name }}</h1>

            <ol class="breadcrumb">
                <li><a href="{{ URL::to('users') }}"><i class="fa fa-users"></i> Users</a></li>
                <li class="active">{{ $user->name }}</li>
            </ol>
	    </section>
	    <section class="content">




<!-- if there are creation errors, they will show here -->
{!! HTML::ul($errors->all()) !!}

{!! Form::model($user, array('action' => array('UsersManagementController@update', $user->id), 'method' => 'PUT')) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nerd_level', 'User Level') !!}
		{!! Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Edit the User!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}






	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')


@endsection