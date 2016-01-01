<div class="box box-primary">

	<div class="box-header with-border">
		<h3 class="box-title">Edit your profile</h3>
	</div>

	{!! Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->name],  'class' => 'form-horizontal', 'role' => 'form' ]) !!}
		{!! csrf_field() !!}

		<div class="box-body">
			<div class="form-group has-feedback">
				{!! Form::label('location', Lang::get('profile.label-location') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('location', old('location'), array('id' => 'location', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-location'))) !!}
	                	<label class="input-group-addon" for="location"><i class="fa fa-fw fa-map-marker" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('bio', Lang::get('profile.label-bio') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::textarea('bio', old('bio'), array('id' => 'bio', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-bio'))) !!}
	                	<label class="input-group-addon" for="bio"><i class="fa fa-fw fa-pencil" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('twitter_username', Lang::get('profile.label-twitter_username') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('twitter_username', old('twitter_username'), array('id' => 'twitter_username', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-twitter_username'))) !!}
	                	<label class="input-group-addon" for="twitter_username"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('github_username', Lang::get('profile.label-github_username') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('github_username', old('github_username'), array('id' => 'github_username', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-github_username'))) !!}
	                	<label class="input-group-addon" for="github_username"><i class="fa fa-fw fa-github" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('career_title', Lang::get('profile.label-career_title') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('career_title', old('career_title'), array('id' => 'career_title', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-career_title'))) !!}
	                	<label class="input-group-addon" for="career_title"><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('education', Lang::get('profile.label-education') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('education', old('education'), array('id' => 'education', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-education'))) !!}
	                	<label class="input-group-addon" for="education"><i class="fa fa-fw fa-graduation-cap" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>
		</div>

		<div class="box-footer">
			{!! Form::button('<i class="fa fa-fw fa-save" aria-hidden="true"></i> '.Lang::get('profile.submitButton'), array('class' => 'btn btn-primary btn-lg btn-block margin-bottom-1','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmSave', 'data-title' => Lang::get('profile.edit_user__modal_text_confirm_btn'), 'data-message' => Lang::get('profile.edit_user__modal_text_confirm_message'))) !!}
		</div>

	{!! Form::close() !!}

</div>