<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
	    'price' => $faker->numberBetween(2,100),
        'description' => $faker->paragraph(1),
	    'category_id' => $faker->numberBetween(1,3),
	    'restaurant_id' => $faker->numberBetween(1,5)
    ];
});
