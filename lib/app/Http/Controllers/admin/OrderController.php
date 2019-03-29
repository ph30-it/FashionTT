<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	public function index(){
		if (request()->orderby) {		
			$order = Order::where('status',0)->with('user')->orderBy(request()->orderby,request()->sta)->paginate(10);
			$orderxl = Order::where('status','<>',0)->with('user')->orderBy(request()->orderby,request()->sta)->paginate(10);
		}else{
			$order = Order::where('status',0)->with('user')->orderBy('id','asc')->paginate(10);
			$orderxl = Order::where('status','<>',0)->with('user')->orderBy('id','asc')->paginate(10);
		}	
		return view('backend.order.list', compact('order','orderxl'));
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
