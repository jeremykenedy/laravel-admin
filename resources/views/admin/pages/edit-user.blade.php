@extends('admin.layouts.dashboard')

@section('template_title')
	Showing User {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">

	    	<h1>
	    		Edit {{ $user->name }}
	    	</h1>

			{!! Breadcrumbs::render('edit_user_admin_view', $user) !!}

	    </section>
	    <section class="content">

			@include('admin.modules.profile-image-box-w-bg')

			@include('admin.forms.edit-user-admin')

	    </section>
	</div>

	@include('admin.modals.confirm-save')

@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')
	@include('scripts.modals')

@endsection