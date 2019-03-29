<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\User;
use App\Http\Requests\ChangePasswordRequest;
use Hash;
class ProfileController extends Controller
{
    public function index()
    {
    	$data=
    	[
    		'product'=>count(Product::all()),
    		'category'=>count(Category::all()),
    		'comment'=>count(Comment::all()),
    		'order'=>count(Order::all()),
    		'user'=>count(User::all())
    	];
    	return view('backend.profile.profile',compact('data'));
    }
    public function change(ChangePasswordRequest $req)
    {
        $oldpass= \Auth::user()->password;  
        echo $oldpass;         
        if(Hash::check($req->oldpass, $oldpass))
        {          
            $user_id = \Auth::User()->id;                       
            $user = User::find($user_id);
            $user->password = Hash::make($req->newpass);;
            $user->save(); 
            return redirect()->back()->with(['class'=>'success','message'=>'Thay đổi mật khẩu thành công']);
        }
    }
    public function getnewcapt()
    {
        // return response()->json(['captcha'=> captcha_img()]);
        return captcha_img('flat');
    }

}
