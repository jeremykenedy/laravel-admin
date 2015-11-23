{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = '';
?>

@extends('admin.layouts.dashboard')

@section('template_title')
	Welcome {{ Auth::user()->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ Lang::get('titles.home') }}</div>
				<div class="panel-body">
					{{ Lang::get('auth.loggedIn') }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('template_scripts')
@endsection