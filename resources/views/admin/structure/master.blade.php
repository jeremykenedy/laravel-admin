<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- Load Head --}}
    @include('admin.structure.head')
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-blue-light                         |
  |               | skin-black                              |
  |               | skin-black-light                        |
  |               | skin-purple                             |
  |               | skin-purple-light                       |
  |               | skin-yellow                             |
  |               | skin-yellow-light                       |
  |               | skin-red                                |
  |               | skin-red-light                          |
  |               | skin-green                              |
  |               | skin-green-light                        |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    {{-- Load Google Analytics --}}
    {{-- @include('blog.partials.analytics') --}}

    {{-- Load Template Nav --}}
    {{-- @include('blog.partials.page-nav') --}}

    {{-- Load Template Header --}}
    {{-- @yield('page-header') --}}

    {{-- Load Template Content --}}
    @yield('content')

    {{-- Load Template Specific Pre Footer --}}
    {{-- @yield('additional-page-footer') --}}

    {{-- Start Global Footer --}}
    {{-- @include('blog.partials.page-footer') --}}

    {{-- Load Global Scripts --}}
    @include('admin.structure.jscripts')

    {{-- Load Additonal Template Scripts --}}
    @yield('scripts')

  </body>
</html>