<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProductRequest;
use File;
use DB;
class ProductController extends Controller
{

  public function index()
  {
    if (request()->search) {
      $query=request()->search;
      $product=Product::where('name', 'like', '%'.$query.'%')
      ->orWhere('price', 'like', '%'.$query.'%')
      ->orWhere('description', 'like', '%'.$query.'%')
      ->orWhere('view', 'like', '%'.$query.'%')
      ->orderBy('id', 'desc')->get();
      $search=1;
    }else{
      $product=$this->ordertable('App\Models\Product', 'cate');
      $search=2;
    }
    return view('backend.product.list', compact('product','search'));
  }
  public function create()
  {
   $categoryID = Category::pluck('name', 'id');
   return view('backend.product.create' ,compact('categoryID'));
 }
 public function store(ProductRequest $request){

  DB::beginTransaction();
  try {
    $product= new Product;
    $image = $request->file('image');
    $name = md5(time().$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
    $path = public_path('images_product/');
    $image->move($path, $name);
    $data=$request->all();
    $data['image']=$name;
    $product= $product->create($data);
    $product_id=$product['id'];
    if ($request->hasFile('ImageProductDetail')) {
     foreach ($request->file('ImageProductDetail') as $file) {
      $img_detail= new Image;
      if (isset($file)) {
        $nameIMG = md5(time().$file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
        $img_detail->name=$nameIMG;
        $file->move($path,$nameIMG);
        $img_detail->product_id=$product_id;
        $img_detail->save();
      }
    }
  }
  DB::commit();
  return redirect()->route('product-list')->with(['class'=>'success','message'=>'Thêm sản phẩm thành công']);
}catch (Exception $e) {
  DB::rollBack();

  throw new Exception($e->getMessage());
}
}
public function edit($id){
  $product = Product::with('cate','images')->find($id);
  $categoryID = Category::pluck('name', 'id');
  return view('backend.product.edit', compact('product', 'categoryID'));
}
public function update(EditProductRequest $request,$id)
{
  DB::beginTransaction();
  try {
   $path = public_path('images_product/');
   $product = Product::find($id);
   $data=$request->all();
   $nameimgcurt=$product->image;
   if ($request->hasFile('image')) {
    $image = $request->file('image');
    $name = md5(time().$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
    $data['image']=$name;
    $imgcur=$path.$nameimgcurt;
    $image->move($path,$name);
    if(File::exists($imgcur)) {
      File::delete($imgcur);
    }
  }
  $product= $product->update($data);
  $product_id=$product['id'];
  if ($request->hasFile('ImageProductDetail')) {
    $imgcurrent=Image::where('product_id',$product_id)->get()->toArray();
    foreach ($imgcurrent as  $value) {
      $imagec=$value['name'];
      $imagedel=$path.$imagec;
      if(File::exists($imagedel)) {
        File::delete($imagedel); 
      }
    }
    DB::table('images')->where('product_id', '=',$product_id)->delete();
    foreach ($request->file('ImageProductDetail') as $file) {
      $img_detail= new Image;
      if (isset($file)) {
        $nameIMG = md5(time().$file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
        $img_detail->name=$nameIMG;
        $file->move($path,$nameIMG);
        $img_detail->product_id=$product_id;
        $img_detail->save();
      }
    }
  }
  DB::commit();
  return redirect()->route('product-list')->with(['class'=>'success','message'=>'Cập nhật sản phẩm thành công']);
}catch (Exception $e) {
 DB::rollBack();

 throw new Exception($e->getMessage());
}    
}

public function destroy($id)
{
  Product::destroy($id);
  Image::where('product_id',$id)->delete();
  return redirect()->route('product-list')->with(['class'=>'success','message'=>'Xóa sản phẩm thành công']);
  ;
}
public function showCate($id){
  $datas = Product::with('cate')->where('category_id',$id)->get();
  return view('backend.category.show', compact('datas'));
}
public function rating(Request $request)
{
  $check=Rating::where('user_id',\Auth::user()->id)->where('product_id',$request->id_product)->exists();
  if ($check) {
    return 'rated';
  }else{
    $rate = new Rating;
    $rate->ratingNum=$request->rate;
    $rate->product_id=$request->id_product;
    $rate->user_id=\Auth::user()->id;
    $rate->save();
    return 'success';
  }
}
}
