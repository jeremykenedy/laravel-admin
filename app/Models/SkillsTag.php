<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsTag extends Model
{
  protected $fillable = [
    'tag', 'reverse_direction',
  ];

  /**
   * The many-to-many relationship between tags and posts.
   *
   * @return BelongsToMany
   */
  public function Profiles()
  {
    return $this->belongsToMany('App\Models\Profile', 'skills_tag_pivot');
  }

  /**
   * Add any tags needed from the list
   *
   * @param array $skilltags List of tags to check/add
   */
  public static function addNeededTags(array $skilltags)
  {
    if (count($skilltags) === 0) {
      return;
    }

    $found = static::whereIn('tag', $skilltags)->lists('tag')->all();

    foreach (array_diff($skilltags, $found) as $tag) {
      static::create([
        'tag' => $tag,
        'reverse_direction' => false,
      ]);
    }
  }
}

