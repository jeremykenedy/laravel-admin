@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Edit your profile
@endsection

@section('template_fastload_css')

	{{-- move to scss later --}}
	.margin-bottom-half {
		margin-bottom: .5em !important;
	}
	.margin-bottom-1 {
		margin-bottom: 1em !important;
	}
	.margin-bottom-2 {
		margin-bottom: 2em !important;
	}
	.margin-bottom-5 {
		margin-bottom: 5em !important;
	}
	{{-- move to scss later --}}
	.alert .close {
		font-size:3.5em;
		font-weight: 100;
		-webkit-transition: all .15s ease-in-out;
		-moz-transition: all .15s ease-in-out;
		-o-transition: all .15s ease-in-out;
		transition: all .15s ease-in-out;
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		transform: rotate(360deg);
	}
	.alert .close:active {
		-webkit-transform: rotate(180deg);
		-moz-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		-o-transform: rotate(180deg);
		transform: rotate(180deg);
		opacity: 0 !important;
	}

@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">
			<h1>
				{{ Lang::get('profile.editProfileTitle',['username' => $displayusername] ) }}
				<small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1>
            <ol class="breadcrumb">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="/profile/{{ Auth::user()->name }}"><i class="fa fa-user"></i> Profile</a></li>
                <li class="active"><i class="fa fa-cog"></i> Edit</li>
            </ol>
	    </section>
	    <section class="content">

 			{{-- LEFT/TOP COLUMN --}}
			<div class="row">
			    <div class="col-lg-4 col-md-5 col-sm-6">
			    	@include('admin.modules.users-profiles')
			    </div>
				<div class="col-lg-8 col-md-7 col-sm-6">
					@if ($user->profile)
						@if (Auth::user()->id == $user->id)
							@include('admin.partials.return-callouts')
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
	    </section>
	</div>
@endsection

@section('template_scripts')
	 @include('admin.structure.dashboard-scripts')
@endsection
