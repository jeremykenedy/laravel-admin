{{-- About Me Box --}}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">About Me</h3>
		<div class="box-tools pull-right">
		    <button class="btn btn-box-tool" title="" data-widget="collapse" data-toggle="tooltip" type="button" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
		    <button class="btn btn-box-tool" title="" data-widget="remove" data-toggle="tooltip" type="button" data-original-title="close"><i class="fa fa-times"></i></button>
		</div>
    </div>
    <div class="box-body">

		@if ($user->profile->career_title)
	        <strong>
	        	<i class="fa fa-briefcase margin-r-5"></i>
	        	{{ Lang::get('profile.showProfilecareerTitle') }}
	        </strong>
	        <p class="text-muted">
				{{ $user->profile->career_title }}
	        </p>
		@endif

		@if ($user->profile->education)
	        <strong>
	        	<i class="fa fa-book margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileEducation') }}
	        </strong>
	        <p class="text-muted">
				{{ $user->profile->education }}
	        </p>
		@endif

		@if ($user->profile->location)
	        <strong>
	        	<i class="fa fa-map-marker margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileLocation') }}
	        </strong>
	        <p class="text-muted">
				<a href="https://www.google.com/maps/place/{{ $user->profile->location }}" title="View {{ $user->profile->location }} on Google Maps" target="_blank">
					{{ $user->profile->location }}
				</a>
	        </p>
		@endif


{{-- 		<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
        <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
        </p>
        <hr> --}}



		@if ($user->profile->bio)
	        <strong>
	        	<i class="fa fa-file-text-o margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileBio') }}
	        </strong>
	        <p>
				{{ $user->profile->bio }}
	        </p>
	        <hr>
		@endif

		@if ($user->profile->twitter_username)
	        <strong>
	        	<i class="fa fa-twitter margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileTwitterUsername') }}
	        </strong>
	        <p>
				{!! HTML::link('https://twitter.com/'.$user->profile->twitter_username, $user->profile->twitter_username, array('class' => 'twitter-link', 'target' => '_blank')) !!}
	        </p>
		@endif

		@if ($user->profile->github_username)
	        <strong>
	        	<i class="fa fa-github margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileGitHubUsername') }}
	        </strong>
	        <p>
				{!! HTML::link('https://github.com/'.$user->profile->github_username, $user->profile->github_username, array('class' => 'github-link', 'target' => '_blank')) !!}
	        </p>
		@endif

    </div>
</div>