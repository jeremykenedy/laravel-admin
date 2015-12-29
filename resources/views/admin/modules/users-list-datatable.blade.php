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