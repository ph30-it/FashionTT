<?php

namespace App\Http\Controllers\admin;
use App\Models\Image;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    //
    public function create(){

    	$productId = Product::pluck('name','id');
    	
    	return view('backend.image.create', compact('productId'));
    }
    public function store(request $request){
    	$data = $request->all();
    	Image::create($data);
    }
}
