<?php

$factory('App\User', [
	'name'     => $faker->name,
	'email'    => $faker->email,
	'password' => $faker->word,
	'role'     => 'staff'
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