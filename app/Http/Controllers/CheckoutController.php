<?php

namespace App\Http\Controllers;

use App\Order;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
	public function info(  ) {
		$products = Cart::content();

		return view('checkout.checkout')->with(['products' => $products]);
    }

	public function store( Request $request ) {
		$this->validate($request,[
			'name_customer' => 'required',
			'phone_customer' => 'required',
			'address' => 'required'
		]);

		$content = implode(',', $request->content);

		$order = Order::create([
			'name' => $request->name_customer,
			'phone' => $request->phone_customer,
			'address' => $request->address,
			'content' => $content,
			'total_price' => Cart::total()
		]);

		$order->products()->attach($request->cart);
		return redirect()->route('checkout.complete');
    }

	public function complete(  ) {
		Cart::destroy();
		return view('checkout.complete');
	}
}
