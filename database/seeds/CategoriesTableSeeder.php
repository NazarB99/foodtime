<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
        	'name' => 'Холодные закуски'
        ]);

	    \App\Category::create([
		    'name' => 'Гарниры'
	    ]);

	    \App\Category::create([
		    'name' => 'Супы'
	    ]);

	    \App\Category::create([
		    'name' => 'Холодные блюда'
	    ]);

	    \App\Category::create([
		    'name' => 'Горячие блюда'
	    ]);

	    \App\Category::create([
		    'name' => 'Салаты'
	    ]);

	    \App\Category::create([
		    'name' => 'Пицца'
	    ]);

	    \App\Category::create([
		    'name' => 'Шашлыки'
	    ]);

	    \App\Category::create([
		    'name' => 'Напитки'
	    ]);
    }
}
