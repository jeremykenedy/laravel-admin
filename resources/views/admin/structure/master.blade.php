<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ Lang::get('titles.app') }}</title>
    <meta name="description" content="">
    <meta name="author" content="Jeremy Kenedy">

    {{-- Load Layout Head --}}
    @yield('layout-head')

  </head>

  <body class="{{ isset($layoutBodybodyClasses) ? $layoutBodybodyClasses : '' }} {{ isset($templateBodybodyClasses) ? $templateBodybodyClasses : '' }}">

    {{-- Load Google Analytics --}}
    {{-- @include('blog.partials.analytics') --}}

    {{-- Load Layout --}}
    @yield('layout-content')

    {{-- Load Global Scripts --}}
    @include('admin.partials.scripts')

    {{-- Load Layout Scripts --}}
    @yield('layout-scripts')

  </body>
</html>