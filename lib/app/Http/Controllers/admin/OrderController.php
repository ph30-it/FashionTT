<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	public function index(){
		$order = Order::with('user')->get();
		return view('backend.order.list', compact('order'));
	}
	public function edit(){
		$order = Order::with('user')->get();
		$userId = User::pluck('name', 'id');
		return view('backend.order.edit', compact('order', 'userId'));
	}
	public function update(request $request,$id){
		$order = Order::find($id);
		$data = $request->all();
		$order->update($data);
		return redirect()->route('order-list');
	}

}
