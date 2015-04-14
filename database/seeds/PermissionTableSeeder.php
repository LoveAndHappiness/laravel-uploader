<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PermissionTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

    	// Users
    	App\Permission::create([
            'name' => 'create-user',
            'display_name' => 'Create User',
            'description' => 'Can create users up to any level'
    	]);

    	App\Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Edit User',
            'description' => 'Can edit all users'
    	]);

    	App\Permission::create([
            'name' => 'delete-user',
            'display_name' => 'Delete User',
            'description' => 'Can delete users entirely'
    	]);

    	// Roles and Permissions
    	App\Permission::create([
            'name' => 'attach-role',
            'display_name' => 'Attach Role',
            'description' => 'Can give users specific roles'
    	]);

    	App\Permission::create([
            'name' => 'attach-permission',
            'display_name' => 'Attach Permission',
            'description' => 'Can give roles specific permissions'
    	]);    	


    	// Orders
    	App\Permission::create([
            'name' => 'create-order',
            'display_name' => 'Create Order',
            'description' => 'Can create test-orders to see how staff solves the given problems'
    	]);

      	App\Permission::create([
            'name' => 'edit-order',
            'display_name' => 'Edit Order',
            'description' => 'Can edit orders at any time.'
    	]);

        App\Permission::create([
            'name'         => 'delete-order',
            'display_name' => 'Delete Order',
            'description'  => 'Is allowed to terminally delete any order'
        ]);

        App\Permission::create([
        	'name' => 'refund-order',
        	'display_name' => 'Refund Order',
        	'description' => 'Can refund orders when customer was dissatisfied with the service or when no mistakes were found'
        ]);

        App\Permission::create([
        	'name' => 'complete-order',
        	'display_name' => 'Complete Order',
        	'description' => 'Can set order to complete.'
        ]);

    }

}