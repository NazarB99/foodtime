<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
        	'name' => 'Куринный суп',
	        'price' => 10,
	        'img' => asset('/img/menu/chicken_soup.png'),
	        'description' => 'курица, морковь, лук репчатый, картофель, макаронные изделия.',
	        'restaurant_id' => 1,
	        'category_id' => 5,
        ]);

	    \App\Product::create([
		    'name' => 'Грибной суп',
		    'price' => 135,
		    'img' => asset('/img/menu/mushroom_soup.png'),
		    'description' => 'сухари ржаные, лук репчатый, морковь, картофель,  грибы белые',
		    'restaurant_id' => 1,
		    'category_id' => 5,
	    ]);

	    \App\Product::create([
		    'name' => 'Томатный суп',
		    'price' => 25,
		    'img' => asset('/img/menu/tomato_soup.png'),
		    'description' => '100 г. мягкого сыра, 500 г. консерв.томатов в собств. соку, 1 небольшая луковица, 2 зубчика чеснока, 4 веточки базилика, 3 средних помидора, 1 кубик Куриного бульона',
		    'restaurant_id' => 1,
		    'category_id' => 5,
	    ]);

	    \App\Product::create([
		    'name' => 'Окрошка',
		    'price' => 15,
		    'img' => asset('/img/menu/okroshka.png'),
		    'description' => 'картофель, яйца, огурцы, редис, зеленый лук, укроп, горчица, квас, сметана, сок лимона',
		    'restaurant_id' => 1,
		    'category_id' => 7,
	    ]);

	    \App\Product::create([
		    'name' => 'Окрошка',
		    'price' => 20,
		    'img' => asset('/img/menu/okroshka.png'),
		    'description' => 'картофель, яйца, огурцы, редис, зеленый лук, укроп, горчица, квас, сметана, сок лимона',
		    'restaurant_id' => 3,
		    'category_id' => 7,
	    ]);
    }
}
