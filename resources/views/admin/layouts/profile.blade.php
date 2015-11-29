{{-- Load Layout Body Classes --}}
{!!
	$layoutBodybodyClasses = '';
!!}

@extends('admin.structure.master')

{{-- Load Auth Layout Head --}}
@section('layout-head')

    {{-- Load Common Admin Head --}}
	@include('admin.structure.head')

	{{-- STYLESHEETS --}}
	{!! HTML::style(asset(''), array('type' => 'text/css', 'rel' => 'stylesheet')) !!}

@stop

{{-- Load Layout Content --}}
@section('layout-content')

	@include('admin.partials.main-nav')

	@yield('content')

@stop

{{-- Load Common Layout Scripts --}}
@section('layout-scripts')

	{{-- Load Template Scripts --}}
	@yield('template_scripts')

@stop