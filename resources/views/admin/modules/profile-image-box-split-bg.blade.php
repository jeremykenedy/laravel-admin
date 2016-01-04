<div class="box box-widget widget-user">

    <div class="widget-user-header bg-light-blue" {{-- style="background: url() center center;" --}} >
        <h3 class="widget-user-username">{{ $user->first_name }} {{ $user->last_name }}</h3>
        @if ($user->profile->career_title)
            <h5 class="widget-user-desc">{{ $user->profile->career_title}}</h5>
        @endif
    </div>

    <div class="widget-user-image">
        {!! HTML::show_gravatar($user->gravatar,'','img-circle') !!}
    </div>

    @if ($user->profile->twitter_username)
        <div class="box-footer">
            <div class="row">
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">
                            {!! HTML::twitter_followers($user, false, false, false, false, false, '','','friends_count') !!}
                        </h5>
                        <span class="description-text">FOLLOWING</span>
                    </div>
                </div>
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">
                            {!! HTML::twitter_followers($user, false, false, false, false, false) !!}
                        </h5>
                        <span class="description-text">FOLLOWERS</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">
                            {!! HTML::twitter_followers($user, false, false, false, false, false, '','','statuses_count') !!}
                        </h5>
                        <span class="description-text">TWEETS</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>