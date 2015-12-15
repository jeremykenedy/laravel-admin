<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model {

    protected $fillable = ['role_id'];

	/**
	 * A profile belongs to a user
	 *
	 * @return mixed
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

    public function UserRole()
    {
        return $this->hasOne('App\User');
    }

}