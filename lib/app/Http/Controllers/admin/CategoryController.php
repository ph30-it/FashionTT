<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //
        $category = Category::orderBy('parent_id','asc')->paginate(10);
        return view('backend.category.list', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $list_cate = Category::where('parent_id',0)->get()->toArray();
     // $parent = Category::select('id', 'name', 'parent_id')->get()->toArray();
       return view('backend.category.create', compact('list_cate'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $category= new Category;
        $category->name=$request->name;
        $category->alias=str_slug($request->name);
        $category->parent_id=$request->category_id;
        $category->save();
        return redirect()->route('category-list')->with(['class'=>'success','message'=>'Tạo danh mục thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    // public function show(Category $id)
    // {
    //     //
    //     $datas = Product::with('cate')->where('category_id', $id)->get()->toArray();
    //     return view('backend.category.show', compact('datas'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $list_cate = Category::where('parent_id',0)->where('id','<>',$id)->get()->toArray();
     //dd($list_cate);
       $category = Category::find($id);
       return view('backend.category.edit', compact('category','list_cate'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate(
            ['name' => 'required',],
            ['name.required' => 'Vui lòng nhập tên danh mục',]);
        $check=Category::where('id','<>',$id)->get()->toArray();
        foreach ($check as $val) {
            if ( $val['name'] == $request->name) {  
                return redirect()->back()->with(['class'=>'danger','message'=>'Tên danh mục bị trùng']);
            }
        }
        $category = Category::find($id);
        $category->name=$request->name;
        $category->alias=str_slug($request->name);
        $category->parent_id=$request->category_id;
        $category->save();
        return redirect()->route('category-list')->with(['class'=>'success','message'=>'Cập nhật danh mục thành công']);

    }
    public function destroy($id)
    {
        Category::destroy($id);
        Category::where('parent_id',$id)->delete();
        return redirect()->route('category-list')->with(['class'=>'success','message'=>'Xóa danh mục thành công']);
    }
}