<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RoleUserTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
		DB::table('role_user')->insert(
		    [
		        'crop_id' => 6, 
		        'loan_id' => 2,
		        'crop_year' => 2015,
		        'acres' => 120,
		        'markettowhom' => 'Hidden Valley'
		    ]
		);
    }

}