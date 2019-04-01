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
use App\Http\Requests\UploadRequest;
use Hash,DB,File;
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
        if(Hash::check($req->oldpass, $oldpass))
        {          
            $user_id = \Auth::User()->id;                       
            $user = User::find($user_id);
            $user->password = Hash::make($req->newpass);
            $user->save(); 
            return redirect()->back()->with(['class'=>'success','message'=>'Thay đổi mật khẩu thành công']);
        }
    }
    public function getnewcapt()
    {
        // return response()->json(['captcha'=> captcha_img()]);
        return captcha_img('flat');
    }
    public function upload(UploadRequest $req)
    {

        DB::beginTransaction();
        try {
            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $name = Hash::make(time().'.'.$image->getClientOriginalExtension());
                $path = public_path('images/');
                $image->move($path, $name);
                $image_path =public_path('images/').\Auth::user()->avatar;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
                $user=User::findorFail(\Auth::user()->id);
                $user->avatar=$name;
                $user->save();
                DB::commit();
                return back()->with(['class'=>'success','message'=>'Thay đổi ảnh đại diện thành công']);
            }
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

}
