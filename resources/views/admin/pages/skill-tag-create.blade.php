@extends('admin.layouts.dashboard')

@section('template_title')
  {{ (Auth::user()->name === Auth::user()->email) ? ((is_null(Auth::user()->first_name)) ? (Auth::user()->name) : (Auth::user()->first_name)) : (((is_null(Auth::user()->name)) ? (Auth::user()->email) : (Auth::user()->name))) }}'s Profile
@endsection

@section('template_fastload_css')
@endsection




@section('content')
   <div class="content-wrapper">
{{--       <section class="content-header">
        <h1>
          {{ Lang::get('profile.showProfileTitle',['username' => $displayusername] ) }}
          <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-user"></i> Profile</li>
        </ol>
      </section> --}}
      <section class="content">

{{--       @if ($user->profile)
        @if (Auth::user()->id == $user->id)
          {!! HTML::link(url('/profile/'.Auth::user()->name.'/edit'), Lang::get('titles.editProfile')) !!}
        @endif
      @endif --}}

      <div class="row">


          <div class="col-lg-12">





  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Tags <small>» Create New Tag</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">New Tag Form</h3>
          </div>
          <div class="panel-body">

            @include('admin.partials.return-messages')

            <form class="form-horizontal" role="form" method="POST"
                  action="/admin/skilltags">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label for="tag" class="col-md-3 control-label">Tag</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" name="tag" id="tag" value="{{ $tag }}" autofocus>
                </div>
              </div>

              @include('admin.forms.skilltags-form')

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-plus-circle"></i>
                      Add New Tag
                  </button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>






          </div>



      </div>

      </section>
  </div>
@endsection




@section('template_scripts')

  @include('admin.structure.dashboard-scripts')
  <script>
    $(function() {
      $("#tags-table").DataTable({});
    });
  </script>
@endsection