<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RoleTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

    	App\Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Access to every aspect of the application'
    	]);

        App\Role::create([
            'name'         => 'owner',
            'display_name' => 'Owner',
            'description'  => 'Owner has nearly as many rights as an admin.'
        ]);

        App\Role::create([
         'name'         => 'staff_manager',
         'display_name' => 'Manager',
         'description'  => 'Reduces mistakes companywide and increases customer satisfaction.'
        ]);

        App\Role::create([
         'name'         => 'staff_auditor',
         'display_name' => 'Auditor',
         'description'  => 'Audits incomming files, corrects them and writes the audit report'
        ]);

        App\Role::create([
         'name'         => 'staff_support',
         'display_name' => 'Customer Support',
         'description'  => 'Interacts with customers and handles complains, refunds and customer satisfaction'
        ]);

    }

}