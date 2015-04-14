<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(1)->create('App\User');

        App\User::create([
        	'name' => 'Georg Geladaris',
        	'email' => 'george@expimo.de',
        	'password' => password_hash('000400', PASSWORD_DEFAULT)
        ]);

        App\User::create([
        	'name' => 'Zoitsa Bakali',
        	'email' => 'zoi@expimo.de',
        	'password' => password_hash('000400', PASSWORD_DEFAULT)
        ]);
    }

}