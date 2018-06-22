<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categoryCreate');
    }

    public function store(StoreCategory $request)
    {
        $category = new Category();
        $category->name=$request->input('name');
        $filename=$request->image->store('public/categorys');
        $category->image=basename($filename);
        $category->save();

        return redirect()->route('admin.categoryIndex')->with('message','Thêm loại sản phẩm thành công!');

    }

    public function getCategorytIndex()
    {
        $categorys=Category::orderBy('name','asc')->get();
        return view('admin.categoryIndex',['categorys'=>$categorys]);
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.categoryEdit',['category'=>$category]);
    }

    public function update(UpdateCategory $request,$id)
    {
        $category=Category::find($id);
        $category->name=$request->input('name');
        if($request->hasFile('image'))
        {
            Storage::delete('public/categorys/' . $category->image);
            $filename=$request->image->store('public/categorys');
            $category->image=basename($filename);
        }
        $category->slug=null;
        $category->save();
        return redirect()->route('admin.categoryIndex')->with('message','Sửa loại sản phẩm thành công!');
    }

    public function delete($id)
    {
        $category=Category::find($id);
        Storage::delete('public/categorys/' . $category->image);
        $category->delete();
        return redirect()->route('admin.categoryIndex')->with('message','Xóa loại sản phẩm thành công!');
    }

    public function getCategorys()
    {
        $categorys=Category::orderBy('name','asc')->get();
        return view('store.collection',['categorys'=>$categorys]);
    }
}
