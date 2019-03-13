<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ShoppingCartController extends Controller
{
	public function addProduct($id)
	{
		$cart = session()->get('cart');		
		$product = Product::find($id);		
		if(!$product) {
			abort(404);
		}
		if(!$cart) {			
			$cart = [
				$id => [
					"name" => $product->name,
					"quantity" => 1,
					"price" => $product->price,
					"image" => $product->image
				]
			];
			session()->put('cart', $cart);
			return Response::json($cart);
		}
	}
} 	
