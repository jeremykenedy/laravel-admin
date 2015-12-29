<?php

use Illuminate\Database\Seeder;
use App\Models\AdminUI;

class SeedAdminUIBackgroundClasses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CLEAR THE TABLE
        DB::table('admin_ui')->delete();

        // ADD BACKGROUND COLOR CLASSES TO TABLE
        AdminUI::create([
			'bg_class_name'		=> 'bg-red',
			'bg_class_name'		=> 'bg-yellow',
			'bg_class_name'		=> 'bg-aqua',
			'bg_class_name'		=> 'bg-blue',
			'bg_class_name'		=> 'bg-light-blue',
			'bg_class_name'		=> 'bg-green',
			'bg_class_name'		=> 'bg-navy',
			'bg_class_name'		=> 'bg-teal',
			'bg_class_name'		=> 'bg-olive',
			'bg_class_name'		=> 'bg-lime',
			'bg_class_name'		=> 'bg-orange',
			'bg_class_name'		=> 'bg-fuchsia',
			'bg_class_name'		=> 'bg-purple',
			'bg_class_name'		=> 'bg-maroon',
			'bg_class_name'		=> 'bg-red-gradient',
			'bg_class_name'		=> 'bg-yellow-gradient',
			'bg_class_name'		=> 'bg-aqua-gradient',
			'bg_class_name'		=> 'bg-blue-gradient',
			'bg_class_name'		=> 'bg-light-blue-gradient',
			'bg_class_name'		=> 'bg-green-gradient',
			'bg_class_name'		=> 'bg-navy-gradient',
			'bg_class_name'		=> 'bg-teal-gradient',
			'bg_class_name'		=> 'bg-olive-gradient',
			'bg_class_name'		=> 'bg-lime-gradient',
			'bg_class_name'		=> 'bg-orange-gradient',
			'bg_class_name'		=> 'bg-fuchsia-gradient',
			'bg_class_name'		=> 'bg-purple-gradient',
			'bg_class_name'		=> 'bg-maroon-gradient'
        ]);

    }
}