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
      <div class="col-md-6">
        <h3>Skills Tags <small>» Show</small></h3>
      </div>
      <div class="col-md-6 text-right">
        <a href="/admin/skilltags/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New Tag
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('admin.partials.return-messages')

        <table id="tags-table" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>Skill Tag</th>
            <th class="hidden-sm">Direction</th>
            <th data-sortable="false">Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($skillstags as $skillTag)
            <tr>
              <td>{{ $skillTag->tag }}</td>
              <td class="hidden-sm">
                @if ($skillTag->reverse_direction)
                  Reverse
                @else
                  Normal
                @endif
              </td>
              <td>
                <a href="/admin/skilltags/{{ $skillTag->id }}/edit"
                   class="btn btn-xs btn-info">
                  <i class="fa fa-edit"></i> Edit
                </a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
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