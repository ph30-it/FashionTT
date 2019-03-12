<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
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
		$data=$request->only('username', 'password');
		if (Auth::attempt($data,$remember)) {
			return redirect()->route('index');
		}else{
			return redirect()->back()->with('status','Đăng nhập thất bại');
		}
	}

	
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('index');
	}
}
