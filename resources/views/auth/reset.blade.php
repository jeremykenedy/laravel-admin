{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Reset Password
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">{{ Lang::get('titles.resetPword') }}</div>
					<div class="panel-body">

	        			@include('admin.partials.return-messages')

	        			@include('admin.forms.reset-password-form')

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('template_scripts')
@endsection