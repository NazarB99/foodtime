<?php

use Illuminate\Database\Seeder;

class RestaurantsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\RestaurantCategory::create([
        	'name' => 'Европейская'
        ]);

	    \App\RestaurantCategory::create([
		    'name' => 'Китайская'
	    ]);

	    \App\RestaurantCategory::create([
		    'name' => 'Восточная'
	    ]);

	    \App\RestaurantCategory::create([
		    'name' => 'Морская'
	    ]);

	    \App\RestaurantCategory::create([
		    'name' => 'Вегетарианская'
	    ]);

	    \App\RestaurantCategory::create([
		    'name' => 'Халяль'
	    ]);
    }
}
