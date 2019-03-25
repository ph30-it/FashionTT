<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	public function index(){
		$order = Order::with('user')->orderBy('status','asc')->paginate(10);
		return view('backend.order.list', compact('order'));
	}
	public function confirm($id)
	{	$order=Order::find($id);
		if (request()->act==1) {
			$order->status=1;
		}else{
			$order->status=2;
		}
		$order->save();
		return redirect()->route('order-list')->with(['class'=>'success','message'=>'Duyệt thành công']);
	}
	public function edit($id){
		$order=Order::findorFail($id);
		return view('backend.order.edit', compact('order'));
	}
	public function update(Request $request,$id){
		$order = Order::find($id);
		$data = $request->all();
		$order->update($data);
			return redirect()->route('order-list')->with(['class'=>'success','message'=>'Cập nhật thành công']);
	}
}
