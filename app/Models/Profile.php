<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/**
	 * Fillable fields for a Profile
	 *
	 * @var array
	 */
	protected $fillable = [
		'location',
		'bio',
		'twitter_username',
		'github_username',
		'career_title',
		'education'
	];

	/**
	 * A profile belongs to a user
	 *
	 * @return mixed
	 */
	public function user()
	{
		return $this->belongsTo('App\Models\User;');
	}

    /**
     * The many-to-many relationship between posts and tags.
     *
     * @return BelongsToMany
     */
    public function skillstags()
    {
        return $this->belongsToMany('App\SkillsTag', 'skills_tag_pivot');
    }

    /**
     * Sync tag relation adding new tags as needed
     *
     * @param array $skilltags
     */
	public function syncTags(array $skilltags)
	{
		SkillsTag::addNeededTags($skilltags);

		if (count($skilltags)) {
		$this->skillstags()->sync(
		  	SkillsTag::whereIn('tag', $skilltags)->lists('id')->all()
		);
		return;
		}

		$this->skillstags()->detach();
	}


}