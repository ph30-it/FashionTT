<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Auth;
use App\Models\User;
class LoginController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('guest')->except('logout');
	// }
	public function getLogin()
	{
		return view('backend.login');
	}
	public function postLogin(LoginRequest $request)
	{
		$remember=$request->has('remember') ? true : false;
		$credentials = $request->only('username', 'password');
		if (Auth::attempt($credentials,$remember)) {
			return redirect()->route('index');
		}else{
			return redirect()->back()->with(['class'=>'danger','message'=>'Đăng nhập thất bại']);
		}
	}


	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('index');
	}
	public function getRegister()
	{
		return view('backend.register');
	}
	public function postRegister(RegisterRequest $request)
	{
		$user = User::create(
			[
				'username' => $request->username,
				'password' => bcrypt($request->password),
				'avatar' => '',
				'role_id' => 2,
				'email' => $request->email,
			]
		);
		return  redirect()->back()->with(['class'=>'success','message'=>'Đăng kí thành công']);
	}
}
