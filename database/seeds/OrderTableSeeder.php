<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class OrderTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(6)->create('App\Order');
    }

}