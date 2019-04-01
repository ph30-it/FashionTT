<?php
namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Role;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->search) 
        {
          $query=request()->search;
          $user = User::where('username', 'like', '%'.$query.'%')
          ->orWhere('email', 'like', '%'.$query.'%')
          ->orderBy('id', 'desc')->get();
          $search=1;
        }else{
        $user=$this->ordertable('App\Models\User','role');
        $search=2;
        }
        return view('backend.user.list', compact('user','search'));
    }


    public function create()
    {
        //
        $roleId = Role::pluck('id','name');
        return view('backend.user.create', compact('roleId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if ($request->hasFile('avatar')) {
          $path = public_path('images_product/');
          $image = $request->file('avatar');
          $name = md5(time().$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
          $image->move($path,$name);    
      }else{
        $name='';
    }
    $user = User::create(
        [
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'avatar' => $name,
            'role_id' => 2,
            'email' => $request->email,
        ]
    );

    return  redirect()->route('user-list')->with(['class'=>'success','message'=>'Tạo USER thành công']);
}
    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(User $category)
    {
        //
    }


    public function edit($id)
    {
        //
        $user = User::with('role')->find($id);
        $roleId = Role::pluck('id','name');
        return view('backend.user.edit', compact('user', 'roleId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $user = User::find($id);
        $path = public_path('images_product/');
        $nameimgcurt=$user->avatar;
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $name = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
            $user->avatar=$name;
            $imgcur=$path.$nameimgcurt;
            $image->move($path,$name);
            if(File::exists($imgcur)) {
                File::delete($imgcur);
            }
        }
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role_id=$request->role_id; 
        $user->save();
        return  redirect()->route('user-list')->with(['class'=>'success','message'=>'Cập nhật thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return  redirect()->route('user-list')->with(['class'=>'success','message'=>'Xóa thành công']);
    }
}