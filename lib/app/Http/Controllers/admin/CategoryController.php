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
        $category = Category::all();//lay tat ca data bang breed;
        return view('backend.category.list', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parent = Category::select('id', 'name', 'parent_id')->get()->toArray();
        return view('backend.category.create', compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
        $data = $request->all();
        Category::create($data);
        return redirect()->route('category-list');
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
    public function edit( $id)
    {
        //
        $category = Category::find($id)->first();
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        //
        $category = Category::find($id);
        $data = $request->all();
        $category->update($data);
        return redirect()->route('category-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category-list');
    }
}