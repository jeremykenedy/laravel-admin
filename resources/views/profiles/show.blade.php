@extends('admin.layouts.dashboard')

@section('template_title')
	{{ (Auth::user()->name === Auth::user()->email) ? ((is_null(Auth::user()->first_name)) ? (Auth::user()->name) : (Auth::user()->first_name)) : (((is_null(Auth::user()->name)) ? (Auth::user()->email) : (Auth::user()->name))) }}'s Profile
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">
			<h1>
				{{ Lang::get('profile.showProfileTitle',['username' => $displayusername] ) }}
				<small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1>

			{!! Breadcrumbs::render('profile', $user) !!}

	    </section>
	    <section class="content">

			@if ($user->profile)
				@if (Auth::user()->id == $user->id)
					{!! HTML::link(url('/profile/'.Auth::user()->name.'/edit'), Lang::get('titles.editProfile')) !!}
				@endif
			@endif

			<div class="row">

				{{-- LEFT/TOP COLUMN --}}
			    <div class="col-lg-4 col-md-5 col-sm-6">
			    	{{--
			    	@include('admin.modules.profile-image-box-split-bg')
			    	@include('admin.modules.profile-image-box')
			    	--}}

					@include('admin.modules.profile-image-box-w-bg')

					@include('admin.modules.profile-basics')

			    </div>

			    {{-- RIGHT/BOTTOM COLUMN --}}
			    <div class="col-lg-8 col-md-7 col-sm-6">
			    	@include('admin.modules.profile-about')
			    </div>

			</div>

	    </section>
	</div>
@endsection

@section('template_scripts')

	 @include('admin.structure.dashboard-scripts')

@endsection
