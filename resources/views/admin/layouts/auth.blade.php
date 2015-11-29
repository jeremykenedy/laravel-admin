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

	@yield('content')

@stop

{{-- Load Common Layout Scripts --}}
@section('layout-scripts')

	{{-- Load Template Scripts --}}
	@yield('template_scripts')

@stop