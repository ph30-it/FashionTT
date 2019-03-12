<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
class HomeController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }
    public function shop()
    {
        $product=Product::with('Images')->get()->take(20)->toArray();
        //dd($product);
        //$product=Product::all()->with('Image')->take(20)->toArray();
    	return view('frontend.shop',compact('product'));
    }
    public function checkout()
    {
    	return view('frontend.checkout');
    }
    public function payment()
    {
        return view('frontend.payment');
    }
    public function single()
    {
        return view('frontend.single');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.about');
    }
}
