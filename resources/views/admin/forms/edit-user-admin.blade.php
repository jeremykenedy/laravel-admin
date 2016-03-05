{!! Form::model($user, array('action' => array('UsersManagementController@update', $user->id), 'method' => 'PUT')) !!}

	{!! csrf_field() !!}

	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">{{ Lang::get('forms.edit-user-admin-title') }}</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>

		<div class="box-body">

			@include('admin.partials.return-messages')

			<div class="form-group has-feedback">
				{!! Form::label('name', Lang::get('forms.label-username') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('name', old('name'), array('id' => 'name', 'class' => 'form-control', 'placeholder' => Lang::get('forms.ph-username'))) !!}
	                	<label class="input-group-addon" for="name"><i class="fa fa-fw {{ Lang::get('forms.username-icon') }}" aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>
			<div class="form-group has-feedback">
				{!! Form::label('email', Lang::get('forms.label-useremail') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
	              	<div class="input-group">
	                	{!! Form::text('email', old('email'), array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('forms.ph-useremail'))) !!}
	                	<label class="input-group-addon" for="email"><i class="fa fa-fw {{ Lang::get('forms.useremail-icon') }} " aria-hidden="true"></i></label>
	              	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('role_id', Lang::get('forms.label-userrole_id') , array('class' => 'col-lg-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-12">
	              		{!! Form::select('role_id', array('0' => Lang::get('forms.option-label'), '1' => Lang::get('forms.option-user'), '2' => Lang::get('forms.option-editor'), '3' => Lang::get('forms.option-admin')), $access, array('class' => 'form-control')) !!}
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('first_name', Lang::get('forms.create_user_label_firstname'), array('class' => 'col-md-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
			      	<div class="input-group">
			       	 	{!! Form::text('first_name', NULL, array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => Lang::get('forms.create_user_ph_firstname'))) !!}
			        	<label class="input-group-addon" for="first_name"><i class="fa fa-fw {{ Lang::get('forms.create_user_icon_firstname') }}" aria-hidden="true"></i></label>
			      	</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('last_name', Lang::get('forms.create_user_label_lastname'), array('class' => 'col-md-3 control-label margin-bottom-half')); !!}
				<div class="col-lg-9">
			      	<div class="input-group">
			       	 	{!! Form::text('last_name', NULL, array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => Lang::get('forms.create_user_ph_lastname'))) !!}
			        	<label class="input-group-addon" for="last_name"><i class="fa fa-fw {{ Lang::get('forms.create_user_icon_lastname') }}" aria-hidden="true"></i></label>
			      	</div>
				</div>
			</div>

		</div>

		<div class="box-footer">
			{!! Form::button('<i class="fa fa-fw '.Lang::get('forms.submit-btn-icon').'" aria-hidden="true"></i> '.Lang::get('forms.submit-btn-text'), array('class' => 'btn btn-primary btn-lg btn-block margin-bottom-1','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmSave', 'data-title' => Lang::get('profile.edit_user__modal_text_confirm_btn'), 'data-message' => Lang::get('profile.edit_user__modal_text_confirm_message'))) !!}
		</div>

	</div>

{!! Form::close() !!}