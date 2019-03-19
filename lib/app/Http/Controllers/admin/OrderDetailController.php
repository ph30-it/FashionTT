<?php

namespace App\Http\Controllers\admin;

use App\Models\Orderdetail;
use App\Models\Order;
use App\Models\Product;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderDetailController extends Controller
{
    //
    public function index(){
    	$orderDetail = Orderdetail::with('order')->get();
    	return view('backend.orderdetail.list', compact('orderDetail'));
    }
    public function showOrder($id){
    	$datas = Orderdetail::with('order')->where('order_id', $id)->get();
    	return view('backend.orderdetail.listorder',  compact('datas'));
    }
}
