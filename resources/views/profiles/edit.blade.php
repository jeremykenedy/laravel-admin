@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Edit your profile
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">
			<h1>

				{{ Lang::get('profile.editProfileTitle',['username' => $displayusername] ) }}
				<small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1>
            <ol class="breadcrumb">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="/profile/{{ Auth::user()->name }}"><i class="fa fa-user"></i> Profile</a></li>
                <li class="active"><i class="fa fa-cog"></i> Edit</li>
            </ol>
	    </section>
	    <section class="content">

 			{{-- LEFT/TOP COLUMN --}}
			<div class="row">
			    <div class="col-lg-4 col-md-5 col-sm-6">

			        {{-- Profile Image --}}
			        <div class="box box-primary">
			            <div class="box-body box-profile">
							{!! HTML::image(Gravatar::get($user->email), $user->name, array('class' => 'profile-user-img img-responsive img-circle', 'draggable' => 'false')) !!}
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
								{{-- $access --}}
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

			    </div>





<div class="col-lg-8 col-md-7 col-sm-6">



						@include('admin.partials.return-messages')

						@if ($user->profile)
							@if (Auth::user()->id == $user->id)

								@include('admin.forms.edit-profile-form')

							@else
								<p>{{ Lang::get('profile.notYourProfile') }}</p>
							@endif
						@else
							<p>{{ Lang::get('profile.noProfileYet') }}</p>
							{!! HTML::link(url('/profile/'.Auth::user()->name.'/edit'), Lang::get('titles.createProfile')) !!}
						@endif






	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
		   <li class="active"><a href="#settings" data-toggle="tab">Edit profile</a></li>
		</ul>
		<div class="tab-content">
		  <div class="active tab-pane" id="settings">
		    <form class="form-horizontal">
		      <div class="form-group">
		        <label for="inputName" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		          <input type="email" class="form-control" id="inputName" placeholder="Name">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
		        <div class="col-sm-10">
		          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputName" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		          <input type="text" class="form-control" id="inputName" placeholder="Name">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
		        <div class="col-sm-10">
		          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
		        <div class="col-sm-10">
		          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="col-sm-offset-2 col-sm-10">
		          <div class="checkbox">
		            <label>
		              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
		            </label>
		          </div>
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="col-sm-offset-2 col-sm-10">
		          <button type="submit" class="btn btn-danger">Submit</button>
		        </div>
		      </div>
		    </form>
		  </div>
		</div>
	</div>





<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Quick Example</h3>
	</div>




<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <br>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>

                  <h4>With icons</h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <br>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>

                  <h4>With checkbox and radio inputs</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                        <input type="text" class="form-control">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                        <input type="text" class="form-control">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row -->

                  <h4>With buttons</h4>
                  <p class="margin">Large: <code>.input-group.input-group-lg</code></p>
                  <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                  <p class="margin">Normal</p>
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-danger">Action</button>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                  <p class="margin">Small <code>.input-group.input-group-sm</code></p>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="button">Go!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.box-body -->
              </div>

<div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                    </div>

                    <!-- input states -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled="">
                          Checkbox disabled
                        </label>
                      </div>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Option one is this and that—be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                          Option three is disabled
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled="">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple="" class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple="" class="form-control" disabled="">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div>


		    <form class="form-horizontal">
		      <div class="form-group">
		        <label for="inputName" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		          <input type="email" class="form-control" id="inputName" placeholder="Name">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
		        <div class="col-sm-10">
		          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputName" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		          <input type="text" class="form-control" id="inputName" placeholder="Name">
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
		        <div class="col-sm-10">
		          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
		        </div>
		      </div>
		      <div class="form-group">
		        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
		        <div class="col-sm-10">
		          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="col-sm-offset-2 col-sm-10">
		          <div class="checkbox">
		            <label>
		              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
		            </label>
		          </div>
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="col-sm-offset-2 col-sm-10">
		          <button type="submit" class="btn btn-danger">Submit</button>
		        </div>
		      </div>
		    </form>



                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

</div>





</div>









			</div>

	    </section>
	</div>
@endsection

@section('template_scripts')

	 @include('admin.structure.dashboard-scripts')

@endsection
