@extends('admin.structure.master')

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
        Dashboard
          <small>Control panel</small>
      </h1>
      @include('admin.modules.breadcrumbs')
    </section>
    <section class="content">
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

@section('additional-template-jscripts')
@stop