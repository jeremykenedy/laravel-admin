@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Welcome {{-- $user->name --}}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">

			<h1>
				{{-- {{ Lang::get('pages.dashboard-welcome',['username' => $user->name] ) }} <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small> --}}
				Create a New User
			</h1>

			{!! Breadcrumbs::render('create_user_admin_view') !!}

	    </section>
	    <section class="content">







<!-- if there are creation errors, they will show here -->
{!! HTML::ul($errors->all() )!!}

{!! Form::open(array('url' => 'create-user')) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nerd_level', 'Nerd Level') !!}
		{!! Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Create New User', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}














	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')

	{{--

		<script type="text/javascript">
			$(function () {
				$('#user_table').DataTable({
					"paging": true,
					"lengthChange": true,
					"searching": true,
					"ordering": true,
					"info": true,
					"autoWidth": true
				});
			});
	    </script>

		<script type="text/javascript">
			$('#confirmDelete').on('show.bs.modal', function (e) {
				var message = $(e.relatedTarget).attr('data-message');
				var title = $(e.relatedTarget).attr('data-title');
				var form = $(e.relatedTarget).closest('form');
				$(this).find('.modal-body p').text(message);
				$(this).find('.modal-title').text(title);
				$(this).find('.modal-footer #confirm').data('form', form);
			});

			$('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
			  	$(this).data('form').submit();
			});
		</script>

	--}}

@endsection