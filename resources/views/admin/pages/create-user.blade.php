@extends('admin.layouts.dashboard')

@section('template_title')
	Create New User
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">

			<h1>
				Create a New User
			</h1>

			{!! Breadcrumbs::render('create_user_admin_view') !!}

	    </section>
	    <section class="content">

			@include('admin.partials.return-messages')
			@include('admin.forms.create-user-form')

	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')
	@include('scripts.html5-password-check');
	@include('scripts.show-hide-passwords');
	@include('scripts.address-lookup-g-api')

@endsection