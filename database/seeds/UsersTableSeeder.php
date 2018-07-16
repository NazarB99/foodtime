<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'name' => 'Admin',
	        'admin' => 1,
	        'restaurant' => 1,
	        'email' => 'admin@mail.ru',
	        'phone' => '+993 64 05 18 02',
	        'password' => bcrypt('password')
        ]);

	    \App\User::create([
		    'name' => 'Altyn Ada Restaurant',
		    'restaurant' => 1,
		    'email' => 'ashgabat@mail.ru',
		    'restaurant_id' => 3,
		    'phone' => '+993 68 25 14 02',
		    'password' => bcrypt('password')
	    ]);

	    \App\User::create([
		    'name' => 'Alpet Restaurant',
		    'restaurant' => 1,
		    'email' => 'alpet@mail.ru',
		    'restaurant_id' => 2,
		    'phone' => '+993 66 75 28 02',
		    'password' => bcrypt('password')
	    ]);

	    \App\User::create([
		    'name' => 'Kopetdag Restaurant',
		    'restaurant' => 1,
		    'restaurant_id' => 1,
		    'email' => 'kopetdag@mail.ru',
		    'phone' => '+993 65 25 38 02',
		    'password' => bcrypt('password')
	    ]);
    }
}
