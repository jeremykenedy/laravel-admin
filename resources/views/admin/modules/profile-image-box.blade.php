{{-- Profile Image Box --}}
<div class="box box-primary bg-light-blue">
    <div class="box-body box-profile">
        {!! HTML::show_gravatar($user->gravatar,'','profile-user-img img-responsive img-circle') !!}
        <h3 class="profile-username text-center">
        	{{ $user->first_name }} {{ $user->last_name }}
        </h3>
        <p class="text-muted text-center">
        	{{ $user->profile->career_title}}
        </p>
		{{--
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
                <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
        </ul>
        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
		--}}
    </div>
</div>