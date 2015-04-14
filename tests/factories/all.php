<?php

$factory('App\User', [
	'name'     => 'Georg Geladaris',
	'email'    => $faker->email,
	'password' => password_hash('000400', PASSWORD_DEFAULT),
]);


$factory('App\Client', [
	'salutation' => $faker->title,
	'firstName'  => $faker->firstName,
	'lastName'   => $faker->lastName,
	'email'      => $faker->email,
	'phone'      => $faker->phoneNumber
]);

$factory('App\Order', [
	'user_id'        => 'factory:App\User',
	'client_id'      => 'factory:App\Client',
	'householdCount' => rand(1, 3),
	'city' 			 => $faker->city,
	'comments'       => $faker->text($maxNbChars = 500),
	'paid'           => 1,
	'claimed'        => 0, 
	'sent'           => 0, 
	'objected'       => 0,
	'refunded'       => 0, 
	'resolved'       => 0,
	'completed'		 => 0
]);

$factory('App\File', [
	'order_id'         => 'factory:App\Order',
	'originalFilename' => $faker->word,
	'filename'         => $faker->file(public_path('files/uploads/tmp'), public_path('files/uploads'), false),
	'filepath'         => 'files/uploads/'
]);

// $factory('App\Role', [
// 	'name'         => 'admin',
// 	'display_name' => 'Admin',
// 	'description'  => 'Admin role represents the user with access to everything'
// ]);

// $factory('App\Role', [
// 	'name'         => 'owner',
// 	'display_name' => 'Owner',
// 	'description'  => 'Owner has nearly as many rights as an admin.'
// ]);

// $factory('App\Role', [
// 	'name'         => 'staff_auditor',
// 	'display_name' => 'Staff Auditor',
// 	'description'  => 'Audits incomming files, corrects them and writes the audit report'
// ]);

// $factory('App\Role', [
// 	'name'         => 'staff_supervisor',
// 	'display_name' => 'Staff Supervisor',
// 	'description'  => 'Keeps auditors in check to reduce their mistakes and increase general customer satisfaction.'
// ]);

// $factory('App\Permission', [
// 	'name'         => 'view_orders',
// 	'display_name' => 'View Orders',
// 	'description'  => 'Allows you to view all orders and get access to the files and clients associated with it.'
// ]);

// $factory('App\Permission', [
// 	'name'         => 'modify_orders',
// 	'display_name' => 'Modify Index',
// 	'description'  => 'Allows you to edit and delete orders and audit reports associated with them.'
// ]);