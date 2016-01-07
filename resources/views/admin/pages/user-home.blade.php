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

		    @include('admin.modules.welcome-msg')

			@include('admin.modules.twitter.twitter-user-home-timeline')

	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')

@endsection