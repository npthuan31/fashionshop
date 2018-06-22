<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use Illuminate\Support\Facades\Storage;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Image;
class ProductController extends Controller
{
    public function create()
    {
        return view('admin.productCreate');
    }

    public function store(StoreProduct $request)
    {
        $product = new Product();
        $product->name=$request->input('name');
        $product->category_id=$request->input('category');
        $product->short_description=$request->input('short_description');
        $product->full_description=$request->input('full_description');
        $product->regular_price=$request->input('regular_price');
        $product->sale_price=$request->input('sale_price');
        $product->featured=$request->input('featured');
        $product->save();

        foreach ($request->images as $image)
        {
            $filename=$image->store('public/products');
            $image=new Image();
            $image->name=basename($filename);
            $image->product_id=$product->id;
            $image->save();
        }

        return redirect()->route('admin.productIndex')->with('message','Thêm sản phẩm thành công!');

    }

    public function getProductIndex()
    {
        $products=Product::with(['category','images'])->orderBy('id','desc')->paginate(10);
        return view('admin.productIndex',['products'=>$products]);
    }

    public function edit($id)
    {
        $categorys=Category::orderBy('name','asc')->get();
        $product=Product::find($id);
        return view('admin.productEdit',['product'=>$product]);
    }

    public function update(UpdateProduct $request,$id)
    {
        $product=Product::with('images')->find($id);
        $product->name=$request->input('name');
        $product->category_id=$request->input('category');
        $product->short_description=$request->input('short_description');
        $product->full_description=$request->input('full_description');
        $product->regular_price=$request->input('regular_price');
        $product->sale_price=$request->input('sale_price');
        $product->featured=$request->input('featured');
        $product->slug=null;
        $product->save();

        if($request->hasFile('images'))
        {
            $images=$product->images;
            foreach($images as $image)
            {
                Storage::delete('public/products/' . $image->name);
                $image->delete();
            }

            foreach ($request->images as $image)
            {
                $filename=$image->store('public/products');
                $image=new Image();
                $image->name=basename($filename);
                $image->product_id=$product->id;
                $image->save();
            }
        }
        return redirect()->back()->with('message','Sửa sản phẩm thành công!');
    }

    public function delete($id)
    {
        $product=Product::with('images')->find($id);
        $images=$product->images;
        foreach($images as $image)
        {
            Storage::delete('public/products/' . $image->name);
            $image->delete();
        }
        $product->delete();
        return redirect()->back()->with('message','Xóa sản phẩm thành công!');
    }

    public function getProductsByCategory(Category $category)
    {
        $categoryName=$category->name;
        $products=Product::with('images')->where('category_id',$category->id)->orderBy('id','desc')->paginate(9);
        return view('store.category',['categoryName'=>$categoryName,'products'=>$products]);
    }

    public function show(Product $product)
    {
        $product->load('images','category');
        $relatedProducts=Product::with('images')->where([
            ['category_id',$product->category->id],
            ['id','<>',$product->id]
        ])->inRandomOrder()->take(8)->get();
        return view('store.product',['product'=>$product,'relatedProducts'=>$relatedProducts]);
    }

    public function search(Request $request)
    {
        if($request->input('key')!=null)
        {
            $key=$request->input('key');
            $products=Product::where('id',$key)->orWhere('name','like','%'.$key.'%')->paginate(10);
            return view('admin.productIndex',['products'=>$products]);
        }
        else
        {
            return redirect()->route('admin.productIndex');
        }
    }

    public function getProductByCategoryAdmin($category_id)
    {
        $products=Product::with(['category','images'])->where('category_id',$category_id)->paginate(10);
        return view('admin.productIndex',['products'=>$products]);
    }
}
