{{-- Load Layout Body Classes --}}
<?php
	$layoutBodybodyClasses = 'hold-transition skin-blue sidebar-mini';
?>

@extends('admin.structure.master')

{{-- Load Auth Layout Head --}}
@section('layout-head')
    {{-- Load Common Admin Head --}}
	@include('admin.structure.head')
@stop

@include('admin.partials.header')
@include('admin.partials.dashboard-sidebar')

{{-- Load Layout Content --}}
@section('layout-content')
	@yield('content')
@stop

@include('admin.modules.control-sidebar')

{{-- Load Common Layout Scripts --}}
@section('layout-scripts')
	{{-- Load Template Scripts --}}
	@yield('template_scripts')
@stop