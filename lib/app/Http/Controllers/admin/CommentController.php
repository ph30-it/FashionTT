<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
	public function index(){
		$cmt = Comment::with('product', 'user')->get();
		return view('backend.comment.list', compact('cmt'));
	}
	public function destroy($id){
		Comment::destroy($id);
		return redirect()->route('comment-list');
	}
}
