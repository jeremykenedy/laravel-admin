{{-- Load Layout Body Classes --}}
<?php
	$layoutBodybodyClasses = 'hold-transition skin-blue sidebar-mini';
?>

@extends('admin.structure.master')

{{-- Load Auth Layout Head --}}
@section('layout-head')

    {{-- Load Common Admin Head --}}
	@include('admin.structure.head')

	{{-- STYLESHEETS --}}
	{!! HTML::style(asset('/assets/css/admin/login.css'), array('type' => 'text/css', 'rel' => 'stylesheet')) !!}

@stop

@section('layout-content')

{{--
	@include('admin.partials.main-nav')
 --}}
	@yield('content')

@stop

{{-- Load Common Layout Scripts --}}
@section('layout-scripts')

	{!! HTML::script('/assets/js/admin/admin.js', array('type' => 'text/javascript')) !!}

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script type="text/javascript">
	    $.widget.bridge('uibutton', $.ui.button);
	</script>
	{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js', array('type' => 'text/javascript')) !!}
	{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js', array('type' => 'text/javascript')) !!}


	{{-- Load Template Scripts --}}
	@yield('template_scripts')

@stop