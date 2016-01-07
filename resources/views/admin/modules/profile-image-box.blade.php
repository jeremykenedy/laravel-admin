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

    </div>
</div>