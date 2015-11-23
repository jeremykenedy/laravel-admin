{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'lockscreen';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Reset Password Request
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">{{ Lang::get('titles.resetPword') }}</div>
					<div class="panel-body">

	        			@include('admin.partials.return-messages')

	        			@include('admin.forms.submit-pw-reset-form')

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('template_scripts')
@endsection