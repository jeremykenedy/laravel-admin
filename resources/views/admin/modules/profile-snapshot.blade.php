			        {{-- Profile Image --}}
			        <div class="box box-primary">
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

			        {{-- About Me Box --}}
			        <div class="box box-primary">
			            <div class="box-header with-border">
			                <h3 class="box-title">About Me</h3>
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
								{{ $access }}
					        </p>

					        <hr>

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
									{{ $user->profile->location }}
						        </p>
							@endif

							{{--
							<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
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