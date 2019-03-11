<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }
    public function shop()
    {
    	return view('frontend.shop');
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
