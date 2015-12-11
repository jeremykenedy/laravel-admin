@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Welcome {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">
			<h1>
				{{ Lang::get('pages.dashboard-welcome',['username' => $user->name] ) }} <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1>
            <ol class="breadcrumb">
                <li><a href="/users"><i class="fa fa-users"></i> Users</a></li>
                <li class="active"><i class="fa fa-smile-o"></i> Show Users</li>
            </ol>

	    </section>
	    <section class="content">



			@include('admin.partials.return-messages')



			<div class="table-responsive">
				<table class="table table-striped table-hover table-condensed">
					<thead>
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Email</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
					@foreach($users as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->email }}</td>
							<td>
								<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
								{!! Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) !!}
									{!! Form::hidden('_method', 'DELETE') !!}
									{!! Form::submit('Delete this User', array('class' => 'btn btn-warning')) !!}
								{!! Form::close() !!}

								<!-- show the nerd (uses the show method found at GET /users/{id} -->
								<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this User</a>

								<!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
								<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this User</a>

							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>














			<div class="box box-success">
			    <div class="box-header with-border">
			        <h3 class="box-title">
			            Users Snapshots
			        </h3>
			        <div class="box-tools pull-right">
			            {!! Form::button('<i class="fa fa-minus"></i>', array('class' => 'btn btn-box-tool','title' => 'Collapse', 'data-widget' => 'collapse', 'data-toggle' => 'tooltip')) !!}
			            {!! Form::button('<i class="fa fa-times"></i>', array('class' => 'btn btn-box-tool','title' => 'close', 'data-widget' => 'remove', 'data-toggle' => 'tooltip')) !!}
			        </div>
			    </div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>
										{{$total_users}}
									</h3>
									<p>
										<strong>Total</strong>
									</p>
								</div>
								<div class="icon">
									<i class="fa fa-users"></i>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="small-box bg-green">
								<div class="inner">
									<h3>
										{{$total_users}}
									</h3>
									<p>
										<strong>Confirmed</strong>
									</p>
								</div>
								<div class="icon">
									<i class="ion ion-ios-people"></i>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="small-box bg-red">
								<div class="inner">
									<h3>
										{{$total_users}}
									</h3>
									<p>
										<strong>Locked</strong>
									</p>
								</div>
								<div class="icon">
									<i class="fa fa-user-times"></i>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="small-box bg-yellow">
								<div class="inner">
									<h3>
										{{$total_users}}
									</h3>
									<p>
										<strong>New</strong>
									</p>
								</div>
								<div class="icon">
									<i class="fa fa-user-plus"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>









			<div class="box box-primary">
			    <div class="box-header with-border">
			        <h3 class="box-title">
			            {{$total_users}} Registered
						@if ($total_users > 2)
							Users
						@else
							User
						@endif
			        </h3>

			        <div class="box-tools pull-right">
			            {!! Form::button('<i class="fa fa-minus"></i>', array('class' => 'btn btn-box-tool','title' => 'Collapse', 'data-widget' => 'collapse', 'data-toggle' => 'tooltip')) !!}
			            {!! Form::button('<i class="fa fa-times"></i>', array('class' => 'btn btn-box-tool','title' => 'close', 'data-widget' => 'remove', 'data-toggle' => 'tooltip')) !!}
			        </div>
			    </div>
				<div class="box-body table-responsive">

					<table id="user_table" class="table table-striped table-hover table-condensed">
						<thead>
							<tr class="success">
								<th>Gravatar</th>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Created</th>
								<th>Updated</th>
							</tr>
						</thead>
						<tbody>
					        @foreach ($users as $a_user)
								<tr>
									<td>{!! HTML::image(Gravatar::get($a_user->email), $a_user->name, array('class' => 'profile-user-img img-responsive img-circle', 'draggable' => 'false')) !!}</td>
									<td>{{$a_user->id}} </td>
									<td>{{$a_user->name}} </td>
									<td>{{$a_user->email}} </td>
									<td>{{$a_user->created_at}} </td>
									<td>{{$a_user->updated_at}} </td>
								</tr>
					        @endforeach
						</tbody>
					</table>

				</div>
			</div>







	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')

    <script>
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

@endsection