<dl class="user-info">

	<dt>
		{{ Lang::get('profile.showProfileGravatar') }}
	</dt>
	<dd>
		<a href="https://en.gravatar.com/" target="blank" title="Go to gravatar.com">
			{!! HTML::show_gravatar($user->gravatar,'','user-img img-responsive img-circle') !!}
		</a>
	</dd>

	<dt>
		{{ Lang::get('profile.showProfileUsername') }}
	</dt>
	<dd>
		{{ $user->name }}
	</dd>

	<dt>
		{{ Lang::get('profile.showProfileFirstName') }}
	</dt>
	<dd>
		{{ $user->first_name }}
	</dd>

	@if ($user->last_name)
		<dt>
			{{ Lang::get('profile.showProfileLastName') }}
		</dt>
		<dd>
			{{ $user->last_name }}
		</dd>
	@endif

	<dt>
		{{ Lang::get('profile.showProfileEmail') }}
	</dt>
	<dd>
		{{ $user->email }}
	</dd>

	<dt>
		{{ Lang::get('profile.showProfileAccessLevel') }}
	</dt>
	<dd>
		{{ $access }}
	</dd>

	@if ($user->profile)
		@if ($user->profile->location)
			<dt>
				{{ Lang::get('profile.showProfileLocation') }}
			</dt>
			<dd>
				{{ $user->profile->location }}
			</dd>
		@endif

		@if ($user->profile->bio)
			<dt>
				{{ Lang::get('profile.showProfileBio') }}
			</dt>
			<dd>
				{{ $user->profile->bio }}
			</dd>
		@endif

		@if ($user->profile->twitter_username)
			<dt>
				{{ Lang::get('profile.showProfileTwitterUsername') }}
			</dt>
			<dd>
				{!! HTML::link('https://twitter.com/'.$user->profile->twitter_username, $user->profile->twitter_username, array('class' => 'twitter-link', 'target' => '_blank')) !!}
			</dd>
		@endif

		@if ($user->profile->github_username)
			<dt>
				{{ Lang::get('profile.showProfileGitHubUsername') }}
			</dt>
			<dd>
				{!! HTML::link('https://github.com/'.$user->profile->github_username, $user->profile->github_username, array('class' => 'github-link', 'target' => '_blank')) !!}
			</dd>
		@endif
	@endif

</dl>