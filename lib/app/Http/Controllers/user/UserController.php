<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Http\Requests\UploadRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use File;
use Hash;
class UserController extends Controller
{
	public function index()
	{
		$data=Order::where('user_id',\Auth::user()->id)->get()->toArray();
		return view('frontend.user.index',compact('data'));
	}
	public function refreshCaptcha()
	{
		// return response()->json(['captcha'=> captcha_img()]);
		return captcha_img('flat');
	}
	public function change(ChangePasswordRequest $req)
	{
		$oldpass= \Auth::user()->password;           
      if(Hash::check($req->oldpass, $oldpass))
      {          
        $user_id = \Auth::User()->id;                       
        $user = User::find($user_id);
        $user->password = Hash::make($req->newpass);;
        $user->save(); 
		return back()->with(['class'=>'success','message'=>'Thay đổi mật khẩu thành công']);
	}
}
	public function upload(UploadRequest $req)
	{

		if ($req->hasFile('image')) {
			$image = $req->file('image');
			$name = time().'.'.$image->getClientOriginalExtension();
			$path = public_path('images/');
			$image->move($path, $name);
			$image_path =public_path('images/').\Auth::user()->avatar;
			if(File::exists($image_path)) {
				File::delete($image_path);
			}
			$user=User::findorFail(\Auth::user()->id);
			$user->avatar=$name;
			$user->save();
			return back()->with(['class'=>'success','message'=>'Thay đổi ảnh đại diện thành công']);
		}
	}
	public function listtran()
	{
		$list=Order::with('orderdetails')->where('user_id',\Auth::user()->id)->get()->toArray();
		return view('frontend.user.list-tran',compact('list'));
	}
	public function detail($id)
	{
		$data=Orderdetail::with('product')->where('order_id',$id)->get()->toArray();
		return view('frontend.user.detail-tran',compact('data'));

	}
}