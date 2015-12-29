{{-- Profile Image Box with Background --}}
<div class="box box-widget widget-user-2">
    <div class="widget-user-header bg-aqua bg-random">
        <div class="widget-user-image">
            {!! HTML::show_gravatar($user->gravatar,'','img-circle') !!}
        </div>
        <h3 class="widget-user-username">{{ $user->first_name }} {{ $user->last_name }}</h3>
        <h5 class="widget-user-desc">{{ $user->profile->career_title}}</h5>
    </div>

    <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
            <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
            <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
            <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
            <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
        </ul>
    </div>

</div>