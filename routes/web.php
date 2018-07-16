<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get( '/', 'HomeController@index' )->name( 'home' );

Auth::routes();

Route::get('/auth/login-register',[
	'uses' => 'UsersController@index',
	'as' => 'users.login.register'
]);

Route::group(['middleware' => 'auth'],function (){
	/*SEARCHING RESTAURANTS*/

	/* RESTAURANTS */
	Route::get( '/restaurants', [
		'uses' => 'RestaurantController@list',
		'as'   => 'restaurant.list'
	] );

	Route::get( '/restaurant/{id}', [
		'uses' => 'RestaurantController@restaurant',
		'as'   => 'restaurant'
	] );

	Route::get('/restaurants/list',[
		'uses' => 'RestaurantController@rest_list',
		'as' => 'restaurants.admin.list'
	])->middleware('admin');

	Route::get('/restaurants/create',[
		'uses' => 'RestaurantController@create',
		'as' => 'restaurant.create'
	]);

	Route::post('/restaurants/store',[
		'uses' => 'RestaurantController@store',
		'as' => 'restaurant.store'
	]);

	Route::get('/restaurants/edit/{id}',[
		'uses' => 'RestaurantController@edit',
		'as' => 'restaurants.admin.edit'
	]);

	Route::post('/restaurants/update/{id}',[
		'uses' => 'RestaurantController@update',
		'as' => 'restaurants.admin.update'
	]);

	Route::get('/restaurants/delete/{id}',[
		'uses' => 'RestaurantController@delete',
		'as' => 'restaurants.admin.delete'
	]);

	/*PRODUCTS*/
	Route::get('/restaurant/products/{id}',[
		'uses' => 'ProductController@products',
		'as' => 'restaurant.products'
	]);

	Route::get('/product/edit/{id}',[
		'uses' => 'ProductController@prod_edit',
		'as' => 'restaurants.edit.product'
	]);

	Route::post('/product/update/{id}',[
		'uses' => 'ProductController@prod_upd',
		'as' => 'restaurants.update.product'
	]);

	Route::get('/product/delete/{id}',[
		'uses' => 'ProductController@prod_del',
		'as' => 'restaurants.delete.product'
	]);


	Route::get('/specefication/{id}', [
		'uses' => 'RestaurantController@specefication',
		'as'   => 'restaurant.specefication'
	] );


	/* CART */
	Route::get('/cart',[
		'uses' => 'OrderController@index',
		'as' => 'cart.index'
	]);

	Route::post('/cart/add',[
		'uses' => 'OrderController@add',
		'as' => 'cart.add'
	]);

	Route::post('/cart/update',[
		'uses' => 'OrderController@update',
		'as' => 'cart.update'
	]);

	Route::post('/cart/delete',[
		'uses' => 'OrderController@delete',
		'as' => 'cart.update'
	]);

	Route::get('/cart/plus',[
		'uses' => 'OrderController@plus',
		'as' => 'cart.plus'
	]);

	Route::get('/cart/minus',[
		'uses' => 'OrderController@minus',
		'as' => 'cart.minus'
	]);

	Route::get('/order/list',[
		'uses' => 'OrderController@list',
		'as' => 'order.list'
	])->middleware('restaurant');

	Route::get('/order/destroy/{id}',[
		'uses' => 'OrderController@destroy',
		'as' => 'order.destroy'
	]);

	/* CART */
	Route::get('/checkout/info',[
		'uses' => 'CheckoutController@info',
		'as' => 'checkout.info'
	]);

	Route::post('/checkout/store',[
		'uses' => 'CheckoutController@store',
		'as' => 'checkout.store'
	]);

	Route::get('/checkout/complete',[
		'uses' => 'CheckoutController@complete',
		'as' => 'checkout.complete'
	]);

	Route::get( '/search', function () {
		$restaurants = \App\Restaurant::where( 'name', 'like', '%' . request( 'find_restaurant' ) . '%' )->get();

		return view( 'restaurant.search' )->with( 'restaurants', $restaurants )->with('categories', \App\RestaurantCategory::all());
	} );

	/* advertisement */
	Route::group(['middleware' => 'admin'],function (){
		Route::get('/advertisement',[
			'uses' => 'AdController@list',
			'as' => 'ad.list'
		]);

		Route::get('/advertisement/create',[
			'uses' => 'AdController@create',
			'as' => 'ad.create'
		]);

		Route::post('/advertisement/store',[
			'uses' => 'AdController@store',
			'as' => 'ad.store'
		]);

		Route::get('/advertisement/edit/{id}',[
			'uses' => 'AdController@edit',
			'as' => 'ad.edit'
		]);

		Route::post('/advertisement/update/{id}',[
			'uses' => 'AdController@update',
			'as' => 'ad.update'
		]);

		Route::get('/advertisement/delete/{id}',[
			'uses' => 'AdController@delete',
			'as' => 'ad.delete'
		]);
	});
});