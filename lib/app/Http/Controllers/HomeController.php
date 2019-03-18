<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
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
 public function shop(Request $request)
 {
    if (request()->cate) {
        $product=Product::where('category_id',request()->cate)->Paginate(12);
            //dd($product);
    }else{
       $product=Product::with('images')->Paginate(12);               
   }
   $view=Product::orderBy('view', 'desc')
   ->take(5)
   ->get();
   if ($request->ajax()) {

       return view('frontend.products', ['product' => $product])->render();  
   }
   $category=Category::all()->toArray();
   return view('frontend.shop',compact('product','view','category'));
}

public function single($id)
{
    $comment=Comment::with('user')->where('product_id',$id)->get()->toArray();
    $view=Product::orderBy('view', 'desc')
    ->take(4)
    ->get();
    $single=Product::with('Images')->where('id',$id)->first()->toArray();
                    //dd($single);
                    //dd($single);
    return view('frontend.single',compact('view','single','comment'));
}
public function comment(CommentRequest $request,$id,$uid)
{
    $comment = new Comment;
    $comment->content = $request->Message;
    $comment->user_id=$uid;
    $comment->product_id= $id;
    $comment->save();
    return redirect()->back();
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
