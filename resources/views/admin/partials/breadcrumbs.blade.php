@if ($breadcrumbs)
	<ol class="breadcrumb">
		@foreach ($breadcrumbs as $breadcrumb)
			@if ($breadcrumb->url && !$breadcrumb->last)
				<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="{{{ $breadcrumb->url }}}" itemprop="url">
						@if ($breadcrumb->icon)
							<i class="{{{ $breadcrumb->icon }}}"></i>
						@endif
						{{{ $breadcrumb->title }}}
					</a>
				</li>
			@else
				<li class="active" itemprop="child" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
					{{--<a href="{{{ $breadcrumb->url }}}" itemprop="url">--}}
						@if ($breadcrumb->icon)
							<i class="{{{ $breadcrumb->icon }}}"></i>&nbsp;
						@endif
						{{{ $breadcrumb->title }}}
					{{--</a>--}}
				</li>
			@endif
		@endforeach
	</ol>
@endif