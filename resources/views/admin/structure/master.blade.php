<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- Load Head --}}
    @include('admin.structure.head')
  </head>
  <body class="hold-transition skin-blue sidebar-mini">

    {{-- Load Google Analytics --}}
    {{-- @include('blog.partials.analytics') --}}

    <div class="wrapper">

      {{-- Load Template Specific Header --}}
      @yield('template-header')

      {{-- Load Template Specific Sidebar --}}
      @yield('template-sidebar')

      {{-- Load Template Specific Content --}}
      @yield('template-content')

      {{-- Load Admin Footer --}}
      @include('admin.partials.footer')

      {{-- Load Template Specific Footer --}}
      @yield('additional-template-footer')

    </div>

    {{-- Load Admin Scripts --}}
    @include('admin.structure.jscripts')

    {{-- Load Template Scripts --}}
    @yield('additional-template-jscripts')

  </body>
</html>