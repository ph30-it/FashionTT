<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\SendmailRequest;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Support\Str;
use Mail;
use App\Mail\SendBillMail;
class CheckoutController extends Controller
{
	public function index()
	{
		return view('frontend.checkout');
	}
	public function postCheckout(CheckoutRequest $request)
	{
		$order = new Order;
		$data=session()->get('cart');
		$order->adress = $request->address;
		$order->cty = $request->cty;
		$order->zip_code = $request->zip_code; 
		$order->country = $request->country; 
		$order->phone = $request->phone; 
		$order->total = $request->total;
		$order->status=0;
		$codegd=$order->code=bcrypt(Str::random(64));
		$order->user_id=\Auth::user()->id;
		$order->save();
		session()->put('codegd',$codegd);
		foreach ($data as $key => $val) {
			$datas[]=[
				'qty'=>$val['qty'],
				'price'=>$val['price'],
				'order_id'=>$order->id,
				'product_id'=>$val['id']
			];		
		}
		Orderdetail::insert($datas);
		return redirect()->route('payment');
	}
	public function payment()
	{
		if (session()->get('codegd')) {
			return view('frontend.payment');
		}else{
			return redirect()->route('shop');
		}
	}
	public function sendMail(SendmailRequest $request)
	{
		$code=session()->get('codegd');
		// $data=Order::with('orderdetails')->where('code',$code)->get()->toArray();
		// 	 dd($data);
		//dd(session()->get('cart'));
		$data=[
			'name'=>\Auth::user()->username,
			'code'=>$code
		];
		Mail::to($request->email)
        ->send( new SendBillMail($data));
        session()->forget(['cart', 'codegd']);
        return redirect()->route('about');
	}
}