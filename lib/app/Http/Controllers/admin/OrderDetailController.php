<?php

namespace App\Http\Controllers\admin;

use App\Models\Orderdetail;
use App\Models\Order;
use App\Models\Product;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderDetailController extends Controller
{
    public function show($id){
    	$data=Orderdetail::with('order','product')->where('order_id',$id)->get();
    	return view('backend.order.orderdetail',compact('data'));
    }
}
