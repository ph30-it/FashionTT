<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Respone;
class ShoppingCartController extends Controller
{
	public function addProduct(Request $request)
	{
		$id=$request->id;
		$cart = session()->get('cart');
		$product = Product::find($id);	
		if(!$product) {
			abort(404);
		}
		if(!isset($cart)) {			
			$cart = [
				$id => [
					"id" =>$product->id,
					"name" => $product->name,
					"qty" => 1,
					"price" => $product->price,
					"image" => $product->image
				]
			];
			session()->put('cart', $cart);
			return json_encode($cart);
		}
		elseif(isset($cart[$id]))
		{
			$cart[$id]['qty']++;
			session()->put('cart', $cart);
			return json_encode($cart);
		}
		else
		{
			$cart[$id] = [
				"id" =>$product->id,
				"name" => $product->name,
				"qty" => 1,
				"price" => $product->price,
				"image" => $product->image
			];
			session()->put('cart', $cart);
			return json_encode($cart);			
		} 
	} 	
	public function deleteProduct(Request $request)
	{
		if($request->id) {

			$cart = session()->get('cart');
			if(isset($cart[$request->id])) {

				unset($cart[$request->id]);

				session()->put('cart', $cart);
			}
		}
		return json_encode($cart);	
	}
	public function updateProduct(Request $request)
	{
		$id=$request->id;
		$qty=$request->qty;
		$cart = session()->get('cart');
		if ($qty==0 ) {
			unset($cart[$id]);
			session()->put('cart', $cart);
		}elseif($qty < 0 || $qty > 10)
		{
			$request->session()->flash('status', 'Lỗi, vui lòng kiểm tra lại!');
		}
		else{
			$cart[$id]['qty']=$qty;
			session()->put('cart', $cart);
		}
		return json_encode($cart);
	}
}
