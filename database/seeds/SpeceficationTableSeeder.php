<?php

use Illuminate\Database\Seeder;

class SpeceficationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Specefication::create([
        	'name' => 'Пицца',
	        'img' => 'images/category/pizza.png'
        ]);

	    App\Specefication::create([
		    'name' => 'Суши',
		    'img' => 'images/category/sushi.png'
	    ]);

	    App\Specefication::create([
		    'name' => 'Шашалыки',
		    'img' => 'images/category/barbecue.png'
	    ]);

	    App\Specefication::create([
		    'name' => 'Фастфуд',
		    'img' => 'images/category/fastfood.png'
	    ]);

	    App\Specefication::create([
		    'name' => 'Десерт',
		    'img' => 'images/category/desert.png'
	    ]);
    }
}
