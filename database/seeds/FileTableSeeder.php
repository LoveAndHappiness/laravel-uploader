<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class FileTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(40)->create('App\File');
    }

}