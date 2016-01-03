@extends('admin.layouts.dashboard')

@section('template_title')
	Showing User {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">

	    	<h1>
	    		Edit {{ $user->name }}
	    	</h1>

			{!! Breadcrumbs::render('edit_user_admin_view', $user) !!}

	    </section>
	    <section class="content">
			@include('admin.modules.profile-image-box-w-bg')








{!! Form::model($user, array('action' => array('UsersManagementController@update', $user->id), 'method' => 'PUT')) !!}

@include('admin.partials.return-messages')

	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('role_id', 'User Access Level') !!}
		{!! Form::select('role_id', array('0' => 'Select a Level', '1' => 'User', '2' => 'Editor', '3' => 'Administrator'), $access, array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Edit the User!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}





	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')


@endsection