<?php

namespace App\Http\Controllers;
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

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'product_id' => 'required'
		]);
		$image= new Image();
		$image->product_id = $request->get('product_id');
		if($request->hasfile('name'))
		{
			foreach($request->file('name') as $image)
			{
				$name=$image->getClientOriginalName();
				$image->move(public_path(), $name);  
				$data[] = $name;  
				$image= new Image();
				$image->name=json_encode($data);
				$image->save();
			}
		}
		

		$image->name=json_encode($data);
		$image->save();

		
		return back()->with('success', 'Your images has been successfully');
	}
	public function store(request $request){
    	$data = $request->all();
    	Image::create($data);
    }
}
