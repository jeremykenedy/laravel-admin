{{-- HTML5 Shim and Respond.js for IE8 support --}}
<!--[if lt IE 9]>
	{!! HTML::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array('type' => 'text/javascript')) !!}
	{!! HTML::script('//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js', array('type' => 'text/javascript')) !!}
	{!! HTML::script('//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js', array('type' => 'text/javascript')) !!}
	{!! HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array('type' => 'text/javascript')) !!}
<![endif]-->
<!--[if gte IE 9]>
	<style type="text/css">.gradient {filter: none;}</style>
<![endif]-->

{{-- Load FONTS --}}
{!! HTML::style('//fonts.googleapis.com/css?family=Roboto:400,300', array('type' => 'text/css', 'rel' => 'stylesheet')) !!}

{{-- Load Admin CSS --}}
{!! HTML::style(asset('/assets/css/admin/admin.css'), array('type' => 'text/css', 'rel' => 'stylesheet')) !!}

{{-- Load Template Specific CSS --}}
@yield('style-sheets')

{{-- Load Layout Specific INLINE CSS --}}
<style type="text/css">
	@yield('template_fastload_css')
</style>


