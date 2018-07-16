<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
	public function products( $id ) {
		$products = Product::where('restaurant_id',$id)->get();
		return view('admin.restaurant.products.list',['products' => $products]);
	}

	public function prod_edit( $id ) {
		$product = Product::find($id);
		$categories = Category::all();
		return view('admin.restaurant.products.edit',['product' => $product,'categories' => $categories]);
	}

	public function prod_upd( $id ) {
		$product = Product::find($id);
		$product->name = request()->name;
		$product->ingredients = request()->ingredients;
		$product->category_id = request()->category;
		if (request()->hasFile('featured')){

			$featured = request()->featured;

			$featured_new_name = time() . $featured->getClientOriginalName();

			$featured->move('img/menu',$featured_new_name);
			$product->img = 'img/menu/' . $featured_new_name;
		}
		return redirect()->route('restaurant.products',['id' => Auth::user()->restaurant_id]);
	}

	public function prod_del( $id ) {
		$product = Product::find($id);
		$product->delete();
		return redirect()->route('restaurant.products',['id' => Auth::user()->restaurant_id]);
	}
}
