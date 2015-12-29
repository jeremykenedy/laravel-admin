{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = '';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Errors
@endsection

@section('template_fastload_css')
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@if ($error_title)
				<div class="panel-heading">
					{!! $error_title !!}
				</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-body">
					<p>{!! $error !!}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('template_scripts')
@endsection