<?php namespace App\Jobs;

use App\Jobs\Job;
use App\Models\User;
use App\Models\Profile;
use App\Models\SkillsTag;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class PostProfileFormFields extends Job implements SelfHandling
{

    /**
     * The id (if any) of the profile row
     *
     * @var integer
     */
    protected $id;

    /**
     * List of fields and default value for each field
     *
     * @var array
     */
    protected $fieldList = [
        'tags' => [],
    ];

    /**
     * Create a new job instance.
     *
     * @param integer $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return array of fieldnames => values
     */
    public function handle()
    {
        $fields = $this->fieldList;

        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        } else {
            $when = Carbon::now()->addHour();
            $fields['publish_date'] = $when->format('M-j-Y');
            $fields['publish_time'] = $when->format('g:i A');
        }

        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        return array_merge(
            $fields,
            ['allTags' => SkillsTag::lists('tag')->all()]
        );
    }


    /**
    * Return the field values from the model
    *
    * @param integer $id
    * @param array $fields
    * @return array
    */
    protected function fieldsFromModel($id, array $fields)
    {
        //$profile = User::findOrFail($id);
        $profile = SkillsTag::find($id);

        $fieldNames = array_keys(array_except($fields, ['tags']));

        $fields = ['id' => $id];
        foreach ($fieldNames as $field) {
          $fields[$field] = $profile->{$field};
        }

        //$fields['tags'] = $profile->tags()->lists('tag')->all();

        return $fields;
    }



}
