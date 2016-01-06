{{-- Profile Image Box --}}
<div class="box box-primary">
    <div class="box-body box-profile">

        {!! HTML::show_gravatar($user->gravatar,'','profile-user-img img-responsive img-circle') !!}

        <h3 class="profile-username text-center">
        	{{ $user->first_name }} {{ $user->last_name }}
        </h3>

        <p class="text-muted text-center">
        	{{ $user->profile->career_title}}
        </p>

        @if ($user->profile->twitter_username)
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Followers</b>
                    {!! HTML::twitter_followers($user, true, false, false, false, true) !!}
                </li>
                <li class="list-group-item">
                    <b>Following</b>
                    {!! HTML::twitter_followers($user, true, false, false, false, true, '','','friends_count') !!}
                </li>
                <li class="list-group-item">
                    <b>Tweets</b>
                    {!! HTML::twitter_followers($user, true, false, false, false, true, '','','statuses_count') !!}
                </li>
            </ul>

            {!! HTML::twitter_user_home_timeline($user, 10); !!}

        @endif








{{--
{!! HTML::twitter_lookup_timeline($user, 20); !!}
 --}}




        {{--
        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        --}}

    </div>
</div>