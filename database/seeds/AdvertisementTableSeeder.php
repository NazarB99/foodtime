<?php

use Illuminate\Database\Seeder;

class AdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Advertisement::create([
        	'img' => 'images/category/header_event_1.png',
	        'active' => 1
        ]);

	    App\Advertisement::create([
		    'img' => 'images/category/header_event_2.png',
		    'active' => 1
	    ]);

	    App\Advertisement::create([
		    'img' => 'images/category/header_event_3.png',
		    'active' => 1
	    ]);
    }
}
