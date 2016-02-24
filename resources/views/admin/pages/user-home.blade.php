@extends('admin.layouts.dashboard')

@section('template_title')
	Welcome {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">

			<h1>
				{{ Lang::get('pages.dashboard-welcome',['username' => $user->name] ) }} <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1>

			{!! Breadcrumbs::render() !!}

	    </section>
	    <section class="content">

			<div class="row">

				{{-- LEFT/TOP COLUMN --}}
			    <div class="col-lg-4 col-md-5 col-sm-12">

			    	@include('admin.modules.profile-image-box')
			    	@include('admin.modules.weather.local-weather-card')

			    </div>


				{{-- LEFT/TOP COLUMN --}}
				<div class="col-lg-8 col-md-7 col-sm-12">

					@include('admin.modules.welcome-msg')
					@include('admin.modules.twitter.twitter-user-home-timeline')

				</div>
			</div>

	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')

@endsection