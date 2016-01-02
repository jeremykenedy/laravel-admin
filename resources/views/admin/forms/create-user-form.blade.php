{!! Form::open(array('action' => 'UsersManagementController@store', 'method' => 'POST', 'role' => 'form')) !!}
{{-- -or- {!! Form::open(array('url' => url('/users'), 'method' => 'POST', 'method' => 'POST', 'role' => 'form')) !!} --}}

	{!! csrf_field() !!}

	<div class="form-group has-feedback">
		{!! Form::label('email', Lang::get('profile.create_user_label_email'), array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('email', NULL, array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('profile.create_user_ph_email'))) !!}
	        	<label class="input-group-addon" for="email"><i class="fa fa-fw {{ Lang::get('profile.create_user_icon_email') }}" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('name', Lang::get('profile.create_user_label_username'), array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => Lang::get('profile.create_user_ph_username'))) !!}
	        	<label class="input-group-addon" for="name"><i class="fa fa-fw {{ Lang::get('profile.create_user_icon_username') }}" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('first_name', Lang::get('profile.create_user_label_email'), array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('first_name', NULL, array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => Lang::get('profile.create_user_ph_email'))) !!}
	        	<label class="input-group-addon" for="first_name"><i class="fa fa-fw {{ Lang::get('profile.create_user_icon_email') }}" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('last_name', Lang::get('profile.create_user_label_email'), array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('last_name', NULL, array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => Lang::get('profile.create_user_ph_email'))) !!}
	        	<label class="input-group-addon" for="last_name"><i class="fa fa-fw {{ Lang::get('profile.create_user_icon_email') }}" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('user_level', 'User Access Level' , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
			<div class="input-group">
	        	{!! Form::select('user_level', array('0' => 'Select Access Level', '1' => 'User', '2' => 'Editor', '3' => 'Administrator'), NULL, array('class' => 'form-control')) !!}
				<label class="input-group-addon" for="user_level"><i class="fa fa-fw fa-exclamation-circle" aria-hidden="true"></i></label>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('password', Lang::get('profile.create_user_label_password'), array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => Lang::get('profile.create_user_ph_password'))) !!}
	        	<label class="input-group-addon" for="password"><i class="fa fa-fw {{ Lang::get('profile.create_user_icon_password') }}" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('password_confirmation', Lang::get('profile.create_user_label_pw_confirmation'), array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('password_confirmation', NULL, array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => Lang::get('profile.create_user_ph_pw_confirmation'))) !!}
	        	<label class="input-group-addon" for="password_confirmation"><i class="fa fa-fw {{ Lang::get('profile.create_user_icon_pw_confirmation') }}" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

	<div class="form-group has-feedback">
		{!! Form::label('location', Lang::get('profile.label-location') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('location', old('location'), array('id' => 'location', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-location'))) !!}
	        	<label class="input-group-addon" for="location"><i class="fa fa-fw fa-map-marker" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

Lang::get('profile.create_user_label_email')
Lang::get('profile.create_user_ph_email')
{{ Lang::get('profile.create_user_icon_email') }}

'create_user_label_email'	=> 'YYYYYYYYYYYYYYY',
'create_user_ph_email'		=> 'YYYYYYYYYYYYYYY',
'create_user_icon_email'	=> 'YYYYYYYYYYYYYYY',

	<div class="form-group has-feedback">
		{!! Form::label('bio', Lang::get('profile.label-bio') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::textarea('bio', old('bio'), array('id' => 'bio', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-bio'))) !!}
	        	<label class="input-group-addon" for="bio"><i class="fa fa-fw fa-pencil" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

Lang::get('profile.create_user_label_email')
Lang::get('profile.create_user_ph_email')
{{ Lang::get('profile.create_user_icon_email') }}

'create_user_label_email'	=> 'YYYYYYYYYYYYYYY',
'create_user_ph_email'		=> 'YYYYYYYYYYYYYYY',
'create_user_icon_email'	=> 'YYYYYYYYYYYYYYY',

	<div class="form-group has-feedback">
		{!! Form::label('twitter_username', Lang::get('profile.label-twitter_username') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('twitter_username', old('twitter_username'), array('id' => 'twitter_username', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-twitter_username'))) !!}
	        	<label class="input-group-addon" for="twitter_username"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

Lang::get('profile.create_user_label_email')
Lang::get('profile.create_user_ph_email')
{{ Lang::get('profile.create_user_icon_email') }}

'create_user_label_email'	=> 'YYYYYYYYYYYYYYY',
'create_user_ph_email'		=> 'YYYYYYYYYYYYYYY',
'create_user_icon_email'	=> 'YYYYYYYYYYYYYYY',

	<div class="form-group has-feedback">
		{!! Form::label('github_username', Lang::get('profile.label-github_username') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('github_username', old('github_username'), array('id' => 'github_username', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-github_username'))) !!}
	        	<label class="input-group-addon" for="github_username"><i class="fa fa-fw fa-github" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

Lang::get('profile.create_user_label_email')
Lang::get('profile.create_user_ph_email')
{{ Lang::get('profile.create_user_icon_email') }}

'create_user_label_email'	=> 'YYYYYYYYYYYYYYY',
'create_user_ph_email'		=> 'YYYYYYYYYYYYYYY',
'create_user_icon_email'	=> 'YYYYYYYYYYYYYYY',

	<div class="form-group has-feedback">
		{!! Form::label('career_title', Lang::get('profile.label-career_title') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('career_title', old('career_title'), array('id' => 'career_title', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-career_title'))) !!}
	        	<label class="input-group-addon" for="career_title"><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

Lang::get('profile.create_user_label_email')
Lang::get('profile.create_user_ph_email')
{{ Lang::get('profile.create_user_icon_email') }}

'create_user_label_email'	=> 'YYYYYYYYYYYYYYY',
'create_user_ph_email'		=> 'YYYYYYYYYYYYYYY',
'create_user_icon_email'	=> 'YYYYYYYYYYYYYYY',

	<div class="form-group has-feedback margin-bottom-2">
		{!! Form::label('education', Lang::get('profile.label-education') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
		<div class="col-lg-9">
	      	<div class="input-group">
	        	{!! Form::text('education', old('education'), array('id' => 'education', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-education'))) !!}
	        	<label class="input-group-addon" for="education"><i class="fa fa-fw fa-graduation-cap" aria-hidden="true"></i></label>
	      	</div>
		</div>
	</div>

Lang::get('profile.create_user_label_email')
Lang::get('profile.create_user_ph_email')
{{ Lang::get('profile.create_user_icon_email') }}

'create_user_label_email'	=> 'YYYYYYYYYYYYYYY',
'create_user_ph_email'		=> 'YYYYYYYYYYYYYYY',
'create_user_icon_email'	=> 'YYYYYYYYYYYYYYY',

	<div class="col-lg-9">
		{!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Create New User', array('class' => 'btn btn-primary btn-flat btn-lg margin-bottom-1','type' => 'submit')) !!}
	</div>

{!! Form::close() !!}