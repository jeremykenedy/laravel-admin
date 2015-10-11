<?php
  $user = Auth::user();
  $username = $user->name;
  $userlevel = $user->user_level;
?>

@extends('admin.structure.master')

@section('style-sheets')
  {!!HTML::style('/assets/css/admin/admin.css') !!}
@stop

@section('template-header')
  @include('admin.partials.header')
@stop

@section('template-sidebar')
  @include('admin.partials.main-sidebar')
@stop

@section('template-content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        {{ $username }}'s Dashboard
          <small>
            @if ($userlevel == 1)
                User
            @elseif ($userlevel == 2)
                Admin
            @elseif ($userlevel == 3)
                Super Admin
            @else
                NOT ACTIVE
            @endif
            Control panel
          </small>
      </h1>
      @include('admin.modules.breadcrumbs')
    </section>
    <section class="content">
      @include('admin.modules.blank')
      @include('admin.modules.stat-boxes')
      <div class="row">
        <section class="col-lg-7 connectedSortable">
          @include('admin.modules.tabbed-charts')
          @include('admin.modules.chat-boxes')
          @include('admin.modules.todo-list')
          @include('admin.modules.quick-email-widget')
        </section>
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          {{-- @include('admin.modules.visitors-box') --}}
          @include('admin.modules.sales-graph')
          @include('admin.modules.calendar-tasks')
        </section><!-- right col -->
      </div>
    </section>
  </div>

@stop

@section('additional-template-footer')
  @include('admin.modules.control-sidebar')
@stop

@section('template-jscripts')
  @include('admin.structure.jscripts')
@stop

@stop