<?php

namespace App\Http\Controllers;

use App\Order;
use Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
	public function index(  ) {
		$products = Cart::content();

		return view('cart.cart')->with('products',$products);
	}

	public function add(  ) {
		$id = request()->pdt_id;
		$product = Product::find($id);

		$cartItem = Cart::add([
			'id' => $product->id,
			'name' => $product->name,
			'qty' => request()->qty,
			'price' => $product->price,
			'options' => array('img' => $product->img)
		]);
		

		$cart_item = '';
		foreach (Cart::content() as $item){
			$price_product = $item->price * $item->qty;
			$cart_item .= "<div id='cart_item_{$item->id}' class='cart-item'>
                                                <div class='cart-item-left'>
                                                    <img src='{$item->options->img} ' alt=''>
                                                </div>
                                                <div class='cart-item-right'>
                                                    <h6 id='name_product'>{$item->name}</h6>
                                                    <span id='product_price_{$item->id}'>{$price_product}
                                                        TMT</span>
                                                </div>
                                                <span class='delete-icon' onclick='deleteItem({$item->id});'></span>
                                                <input data-id='{$item->id}' min='1' max='100' class='input_{$item->id}'
                                                       id='cart-wrap-input' type='number' value='{$item->qty}' onkeyup='changeValue({$item->id});'><label
                                                        for='cart-wrap-input' class='input_label'>шт </label>
                                                <input type='hidden' id='hidden_{$item->id}' value='{$item->rowId}'>
                                            </div>";	
		}
		
		
		$msg = array(
			'price' => Cart::total(),
			'item' => $cart_item,
		);

		return response()->json($msg);
    }

	public function update(  ) {
		$id = request()->pdt_id;
		$product = Product::find($id);
		$hidden = request()->hidden;
		$cartItem = Cart::update($hidden,['qty' => request()->qty]);
		$item = array(
			'item_price' => $cartItem->price * $cartItem->qty,
			'total_price' => Cart::total(),
		);


		return response()->json($item);

    }

	public function delete(  ) {
		Cart::remove(request()->hidden);

		$cart_item = '';
		foreach (Cart::content() as $item){
			$price_product = $item->price * $item->qty;
			$cart_item .= "<div id='cart_item_{$item->id}' class='cart-item'>
                                                <div class='cart-item-left'>
                                                    <img src='{$item->options->img} ' alt=''>
                                                </div>
                                                <div class='cart-item-right'>
                                                    <h6 id='name_product'>{$item->name}</h6>
                                                    <span id='product_price_{$item->id}'>{$price_product}
                                                        TMT</span>
                                                </div>
                                                <span class='delete-icon' onclick='deleteItem({$item->id});'></span>
                                                <input data-id='{$item->id}' min='1' max='100' class='input_{$item->id}'
                                                       id='cart-wrap-input' type='number' value='{$item->qty}' onkeyup='changeValue({$item->id});'><label
                                                        for='cart-wrap-input' class='input_label'>шт </label>
                                                <input type='hidden' id='hidden_{$item->id}' value='{$item->rowId}'>
                                            </div>";
		}

		$msg = array(
			'price' => Cart::total(),
			'cart' => $cart_item
		);

		return response()->json($msg);
    }

	public function list(  ) {
		$orders = Order::all();
		return view('admin.order.orders')->with('orders',$orders);
	}

	public function destroy( $id ) {
		$order = Order::find($id);
		$order->delete();

		return redirect()->route('order.list');
	}


}
