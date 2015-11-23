{!! Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->name],  'class' => 'form-horizontal', 'role' => 'form' ]) !!}
	{!! csrf_field() !!}
	<div class="form-group has-feedback">
		{!! Form::label('location', Lang::get('profile.label-location') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::text('location', old('location'), array('id' => 'location', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-location'))) !!}
			<span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('bio', Lang::get('profile.label-bio') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::textarea('bio', old('bio'), array('id' => 'bio', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-bio'))) !!}
			<span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('twitter_username', Lang::get('profile.label-twitter_username') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::text('twitter_username', old('twitter_username'), array('id' => 'twitter_username', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-twitter_username'))) !!}
			<span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('github_username', Lang::get('profile.label-github_username') , array('class' => 'col-sm-4 control-label')); !!}
		<div class="col-sm-6">
			{!! Form::text('github_username', old('github_username'), array('id' => 'github_username', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-twitter_username'))) !!}
			<span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4">
			{!! Form::button(Lang::get('profile.submitButton'), array('class' => 'btn btn-primary','type' => 'submit')) !!}
		</div>
	</div>

{!! Form::close() !!}