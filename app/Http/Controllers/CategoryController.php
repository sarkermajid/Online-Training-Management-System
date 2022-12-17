<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;

    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
        Category::addCategory($request);
        return redirect()->back()->with('message','Category create successfully');
    }

    public function manage()
    {
        return view('admin.category.manage',['categories'=>Category::orderBy('id','desc')->get()]);
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }

    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect()->back()->with('message','Category update successfully');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect()->back()->with('message_delete','Category Delete Successfully');
    }
}
