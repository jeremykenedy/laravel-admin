@if ($user->profile->twitter_username)
	<div class="box box-primary">
	    <div class="box-body box-profile">

		    <h3 class="profile-username text-center">
                <i class="fa fa-twitter fa-fw twitter"></i>
                {!! HTML::link('https://twitter.com/jeremyekenedy', '@'.$user->profile->twitter_username , array('id' => 'user_twitter_link')) !!}
		    </h3>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <strong>{{ Lang::get('modules.twitterCardTitleFollowers') }}</strong>
                    {!! HTML::twitter_followers($user, true, false, false, false, true) !!}
                </li>
                <li class="list-group-item">
                    <strong>{{ Lang::get('modules.twitterCardTitleFollowing') }}</strong>
                    {!! HTML::twitter_followers($user, true, false, false, false, true, '','','friends_count') !!}
                </li>
                <li class="list-group-item">
                    <strong>{{ Lang::get('modules.twitterCardTitleTweets') }}</strong>

                    {!! HTML::twitter_followers($user, true, false, false, false, true, '','','statuses_count') !!}

                </li>
            </ul>

            {!! HTML::twitter_user_home_timeline($user, 10); !!}

			{{--
			{!! HTML::twitter_lookup_timeline($user, 20); !!}
			 --}}

		    {{--
		    <a href="#" class="btn btn-primary btn-block"><strong>Follow</strong></a>
		    --}}

	    </div>
	</div>

@endif