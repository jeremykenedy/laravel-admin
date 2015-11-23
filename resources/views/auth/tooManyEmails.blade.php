{{-- Set Template Body Classes --}}
<?php
	$templateBodybodyClasses = 'login-page';
?>

@extends('admin.layouts.auth')

@section('template_title')
	Sorry, it's not going to work out
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

						<p>
							{ Lang::get('auth.tooManyEmails', ['email' => $email] ) }}
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('template_scripts')
@endsection
