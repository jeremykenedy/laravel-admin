@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Edit your profile
@endsection

@section('template_fastload_css')
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
			<div class="row">

				{{-- LEFT/TOP COLUMN --}}
				<div class="col-lg-8 col-md-7 col-sm-6">
					@if ($user->profile)
						@if (Auth::user()->id == $user->id)
							@include('admin.partials.return-callouts')
							@include('admin.modules.profile-image-box')
							@include('admin.forms.edit-profile-form')
						@else
							<p>{{ Lang::get('profile.notYourProfile') }}</p>
						@endif
					@else
						<p>{{ Lang::get('profile.noProfileYet') }}</p>
						{!! HTML::link(url('/profile/'.Auth::user()->name.'/edit'), Lang::get('titles.createProfile')) !!}
					@endif
				</div>

			    {{-- RIGHT/BOTTOM COLUMN --}}
			    <div class="col-lg-4 col-md-5 col-sm-6">
			    	@include('admin.modules.profile-basics')
			    	@include('admin.modules.profile-about')
			    </div>

			</div>
	    </section>
	</div>
@endsection

@section('template_scripts')
	 @include('admin.structure.dashboard-scripts')
@endsection
