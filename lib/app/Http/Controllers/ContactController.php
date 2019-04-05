<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function index()
    {
    	return view('frontend.contact');
    }
    public function contact(ContactRequest $req)
    {
    	$data=$req->all();
    	Contact::create($data);
    	return redirect()->back()->with(['class'=>'success','message'=>'Gửi contact thành công']);
    }
}
