<div class="table-responsive">
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th colspan="3">Actions</th>
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
						{!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete this User', array('class' => 'btn btn-danger btn-block btn-flat','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user ?')) !!}
					{!! Form::close() !!}
				</td>
				<td>
					<!-- show the nerd (uses the show method found at GET /users/{id} -->
					<a class="btn btn-small btn-success btn-block btn-flat" href="{{ URL::to('users/' . $value->id) }}">Show this User</a>
				</td>
				<td>
					<!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
					<a class="btn btn-small btn-info btn-block btn-flat" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this User</a>

				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>