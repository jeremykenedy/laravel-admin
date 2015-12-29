{{-- Basics About Box --}}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">The Basics</h3>
		<div class="box-tools pull-right">
		    <button class="btn btn-box-tool" title="" data-widget="collapse" data-toggle="tooltip" type="button" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
		    <button class="btn btn-box-tool" title="" data-widget="remove" data-toggle="tooltip" type="button" data-original-title="close"><i class="fa fa-times"></i></button>
		</div>
    </div>
    <div class="box-body">

		@if ($user->name)
	        <strong>
	        	<i class="fa fa-user margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileUsername') }}
	        </strong>
	        <p class="text-muted">
				{{ $user->name }}
	        </p>
		@endif

		@if ($user->first_name)
	        <strong>
	        	<i class="fa fa-user margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileFirstName') }}
	        </strong>
	        <p class="text-muted">
				{{ $user->first_name }}
	        </p>
		@endif

		@if ($user->last_name)
	        <strong>
	        	<i class="fa fa-user margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileLastName') }}
	        </strong>
	        <p class="text-muted">
				{{ $user->last_name }}
	        </p>
		@endif

		@if ($user->email)
	        <strong>
	        	<i class="fa fa-envelope margin-r-5"></i>
	        	{{ Lang::get('profile.showProfileEmail') }}
	        </strong>
	        <p class="text-muted">
				{{ $user->email }}
	        </p>
		@endif

        <strong>
        	<i class="fa fa-unlock margin-r-5"></i>
        	{{ Lang::get('profile.showProfileAccessLevel') }}
        </strong>
        <p class="text-muted">
			{{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }}
        </p>

    </div>
</div>