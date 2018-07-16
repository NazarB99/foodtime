<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$this->call( UsersTableSeeder::class );
		$this->call( ProductTableSeeder::class );
		$this->call( RestaurantTableSeeder::class );
		$this->call(RestaurantsCategorySeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(SpeceficationTableSeeder::class);
		$this->call(AdvertisementTableSeeder::class);
	}
}
