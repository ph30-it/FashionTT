<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
	public function comment(CommentRequest $request)
	{
		$comment = new Comment;
		$comment->content = $request->content;
		$comment->user_id=\Auth::user()->id;
		$comment->product_id= $request->id;
		$comment->save();
		$data=$comment=Comment::with('user')->where('product_id',$request->id)->get()->toArray();
		echo json_encode($data);
	}
	public function index(){
		$cmt=$this->ordertable('App\Models\Comment','user');
		return view('backend.comment.list', compact('cmt'));
	}
	public function destroy($id){
		Comment::destroy($id);
		return redirect()->route('comment-list')->with(['class'=>'success','message'=>'Xóa thành công']);
	}
}
