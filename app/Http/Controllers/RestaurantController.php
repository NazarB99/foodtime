<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Restaurant;
use App\RestaurantCategory;
use App\Specefication;
use Cart;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller {
	public function list() {
		$restaurants           = Restaurant::all();
		$restaurant_categories = RestaurantCategory::all();

		return view( 'restaurant.list', [ 'restaurants' => $restaurants, 'restaurant_categories' => $restaurant_categories ] );
	}

	public function restaurant( $id ) {
		$restaurant = Restaurant::find( $id );
		$categories = Category::all();
		$products   = Product::where( 'restaurant_id', $id )->get();

		return view( 'restaurant.restaurant' )->with( [ 'restaurant' => $restaurant ] )
		                                      ->with( [ 'products' => $products ] )
		                                      ->with( [ 'categories' => $categories ] );
	}

	public function rest_list(  ) {
		$restaurants = Restaurant::all();

		return view('admin.restaurant.restaurants')->with('restaurants',$restaurants);
	}

	public function edit( $id ) {
		$restaurant = Restaurant::find($id);
		$categories = RestaurantCategory::all();
		$specefications = Specefication::all();

		return view('admin.restaurant.edit',['restaurant' => $restaurant,'categories' => $categories,'specefications' => $specefications]);
	}

	public function update( $id ) {
		$restaurant = Restaurant::find($id);

		$this->validate(request(),[
			'title' => 'required',
			'categories' => 'required'
		]);

		if (request()->hasFile('featured')){

			$featured = request()->featured;

			$featured_new_name = time() . $featured->getClientOriginalName();

			$featured->move('images/restaurants/',$featured_new_name);
			$restaurant->img = 'images/restaurants/' . $featured_new_name;
		}

		$restaurant->name = request()->title;
		$restaurant->save();
		$restaurant->specefications()->sync(request()->specefications);
		$restaurant->restaurant_categories()->sync(request()->categories);

		return redirect()->route('restaurants.admin.list');
	}

	public function create(  ) {
		$categories = RestaurantCategory::all();
		$specefications = Specefication::all();
		return view('admin.restaurant.create')->with('categories',$categories)->with('specefications',$specefications);
	}

	public function store(  ) {
		$this->validate(request(),[
			'name' => 'required|unique:restaurants',
			'logo' => 'required|image',
			'header' => 'required|image',
			'categories' => 'required',
			'specefications' => 'required',
		]);

		$logo = request()->logo;
		$logo_new_name = time() . $logo->getClientOriginalName();
		$logo->move('images/',$logo_new_name);

		$header = request()->header;
		$header_new_name = time() . $header->getClientOriginalName();
		$header->move('images/headers/',$header_new_name);

		$restaurant = Restaurant::create([
			'name' => request()->name,
			'img' => 'images/' . $logo_new_name,
			'header' => 'images/headers/' . $header_new_name
		]);

		User::create([
			'name' => request()->username,
			'password' => bcrypt(request()->password),
			'restaurant' => 1,
			'email' => request()->email,
			'phone' => request()->phone,
			'restaurant_id' => $restaurant->id
		]);

		$restaurant->restaurant_categories()->attach(request()->categories);
		$restaurant->specefications()->attach(request()->specefications);

		return redirect()->route('restaurant.list');
	}

	public function specefication( $id ) {
		$spec = Specefication::find($id);
		$restaurant_categories = RestaurantCategory::all();

		return view('specefication.restaurants')->with('spec',$spec)->with('restaurant_categories',$restaurant_categories);
	}

	public function delete( $id ) {
		$restaurant = Restaurant::find($id);
		$restaurant->delete();

		return redirect()->route('restaurants.admin.list');
	}

}
