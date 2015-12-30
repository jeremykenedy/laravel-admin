@if ($breadcrumbs)
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li>
                	<a href="{{{ $breadcrumb->url }}}">
                		<i class="fa {{{ $breadcrumb->icon }}}" aria-label="{{{ $breadcrumb->icon }}} icon"></i>
                		{{{ $breadcrumb->title }}}
                	</a>
                </li>
            @else
                <li class="active">
                	<i class="fa {{{ $breadcrumb->icon }}}" aria-label="{{{ $breadcrumb->icon }}} icon"></i>
                	{{{ $breadcrumb->title }}}
                </li>
            @endif
        @endforeach
    </ol>
@endif