<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;
use Input;






use Illuminate\Support\Facades;
use App\Logic\User\UserRepository;
use App\Models\Social;
use App\Models\Role;
use App\Models\UsersRole;
use App\Models\Profile;

class UsersManagementController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Users Management Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "Show Users" and "Edit Users" pages.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the Users Management Main Page to the Admin.
	 *
	 * @return Response
	 */
	public function showUsersMainPanel()
	{

        $user           = \Auth::user();
        $users 			= \DB::table('users')->get();
        $total_users 	= \DB::table('users')->count();
        $userRole       = $user->hasRole('user');
        $editorRole     = $user->hasRole('editor');
        $adminRole      = $user->hasRole('administrator');

        if($userRole)
        {
            $access = 'User';
        } elseif ($editorRole) {
            $access = 'Editor';
        } elseif ($adminRole) {
            $access = 'Administrator';
        }

        return view('admin.pages.show-users', [
        		'users' 		=> $users,
        		'total_users' 	=> $total_users,
        		'user' 			=> $user,
        		'access' 		=> $access,
        		'' => $total_users,
        	]
        );
	}

    /**
     * Edit the Users Management Main Page to the Admin.
     *
     * @return Response
     */
    public function editUsersMainPanel()
    {

        $user           = \Auth::user();
        $users          = \DB::table('users')->get();
        $total_users    = \DB::table('users')->count();
        $userRole       = $user->hasRole('user');
        $editorRole     = $user->hasRole('editor');
        $adminRole      = $user->hasRole('administrator');

        if($userRole)
        {
            $access = 'User';
        } elseif ($editorRole) {
            $access = 'Editor';
        } elseif ($adminRole) {
            $access = 'Administrator';
        }

        return view('admin.pages.edit-users', [
                'users'             => $users,
                'total_users'       => $total_users,
                'user'              => $user,
                'access'            => $access,
            ]
        );
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name'          	=> 'required|max:255',
            'email'         	=> 'required|email|max:255',
            'location'          => '',
            'bio'               => '',
            'twitter_username'  => '',
            'career_title'      => '',
            'education'         => ''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return view('nerds.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET THE USER
        $user           = User::find($id);
        $userRole       = $user->hasRole('user');
        $editorRole     = $user->hasRole('editor');
        $adminRole      = $user->hasRole('administrator');
        if($userRole)
        {
            $access = '1';
        } elseif ($editorRole) {
            $access = '2';
        } elseif ($adminRole) {
            $access = '3';
        }

        return view('admin.pages.edit-user', [
                'user'              => $user,
                'access'            => $access,
            ]
        )->with('status', 'Successfully updated user!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $current_roles = array('3','2','1');

        $rules = array(
            'name'              => 'required',
            'email'             => 'required|email',
        );

        $validator = $this->validator($request->all(), $rules);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        } else {
            $user 				        = User::find($id);
            $user->name                 = $request->input('name');
            $user->email                = $request->input('email');

            $input = Input::only('role_id');
            $user->removeRole($current_roles);
            $user->assignRole($input);
            $user->save();

            return redirect('users/' . $user->id . '/edit')->with('status', 'Successfully updated the user!');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(
            'name'          => 'required|max:255',
            'email'         => 'required|email|max:255|unique:nerds',
            'nerd_level'    => 'required|numeric'
        );

        $validator = $this->validator($request->all(), $rules);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        } else {
            $nerd               = new Nerd;
            $nerd->name         = $request->input('name');
            $nerd->email        = $request->input('email');
            $nerd->nerd_level   = $request->input('nerd_level');
            $nerd->save();
            return redirect('nerds')->with('message', 'Successfully created nerd!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	// GET USER
        $user = User::find($id);

        return view('admin.pages.show-user')->withUser($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE USER
        $user = User::find($id);
        $user->delete();

        return redirect('edit-users')->with('status', 'Successfully deleted the user!');
    }

}
