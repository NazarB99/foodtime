<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Restaurant::create([
        	'name' => 'Kopetdag Restaurant',
	        'img' => 'images/restaurants/Kopetdag.jpg',
	        'header' => asset('images/headers/merdem_in.jpg')
        ]);

	    \App\Restaurant::create([
		    'name' => 'Alpet',
		    'img' => 'images/restaurants/AlpEt.jpg',
		    'header' => asset('images/headers/alpet_in.jpg')
	    ]);

	    \App\Restaurant::create([
		    'name' => 'Altyn Ada',
		    'img' => 'images/restaurants/AltynAda.jpg',
		    'header' => asset('images/headers/altynada_in.jpg')
	    ]);


    }
}
