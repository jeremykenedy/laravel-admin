@extends('admin.layouts.profile')

@section('template_title')
	Edit your profile
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						{{ Lang::get('profile.editProfileTitle') }}
					</div>
					<div class="panel-body">

						@include('admin.partials.return-messages')

						@if ($user->profile)
							@if (Auth::user()->id == $user->id)

								@include('admin.forms.edit-profile-form')

							@else
								<p>{{ Lang::get('profile.notYourProfile') }}</p>
							@endif
						@else
							<p>{{ Lang::get('profile.noProfileYet') }}</p>
							{!! HTML::link(url('/profile/'.Auth::user()->name.'/edit'), Lang::get('titles.createProfile')) !!}
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('template_scripts')
@endsection