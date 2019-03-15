<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
class HomeController extends Controller
{
    public function __construct()
    {
     $this->middleware('guest')->except('logout');
    }
    public function index()
    {
    	return view('frontend.index');
    }
    public function shop()
    {
        $product=Product::with('images')->get()->take(20)->toArray();
        //dd($product);
        $view=Product::orderBy('view', 'desc')
        ->take(5)
        ->get();
        // dd($view);
        //$product=Product::all()->with('Image')->take(20)->toArray();
        return view('frontend.shop',compact('product','view'));
    }

    public function single($id)
    {
        $view=Product::orderBy('view', 'desc')
        ->take(4)
        ->get();
        $single=Product::with('Images')->where('id',$id)->first()->toArray();
        //dd($single);
        //dd($single);
        return view('frontend.single',compact('view','single'));
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
