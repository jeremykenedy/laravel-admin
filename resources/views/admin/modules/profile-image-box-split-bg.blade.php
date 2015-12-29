<div class="box box-widget widget-user">
    <div class="widget-user-header bg-black bg-random" {{-- style="background: url() center center;" --}} >
        <h3 class="widget-user-username">{{ $user->first_name }} {{ $user->last_name }}</h3>
        <h5 class="widget-user-desc">{{ $user->profile->career_title}}</h5>
    </div>
    <div class="widget-user-image">
        {!! HTML::show_gravatar($user->gravatar,'','img-circle') !!}
    </div>

    <div class="box-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                </div>
            </div>
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                </div>
            </div>
        </div>
    </div>
</div>





