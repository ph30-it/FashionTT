<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function index()
    {
    	$product = Product::with('cate')->get();
    	return view('backend.product.list', compact('product'));
    }
    public function create()
    {
    	$categoryID = Category::pluck('name', 'id');
    	return view('backend.product.create' , compact('categoryID'));
    }
    public function store(ProductRequest $request){

    	$data = $request->all();
    	Product::create($data);
    	return redirect()->route('product-list');
    }
    public function edit($id){
        $product = Product::with('cate')->find($id);
        $categoryID = Category::pluck('name', 'id');
        return view('backend.product.edit', compact('product', 'categoryID'));
    }
    public function update(ProductRequest $request, $id)

    {
        //
        $product = Product::find($id);
        $data = $request->all();
        $product->update($data);
        return redirect()->route('product-list');
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product-list');
    }
}
