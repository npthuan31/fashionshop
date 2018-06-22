<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreNews;
use App\Http\Requests\UpdateNews;
use App\NewsCategory;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    public function newsIndex()
    {
        $news=News::with('newsCategory')->orderBy('id','desc')->get();
        return view('admin.newsIndex',['news'=>$news]);
    }

    public function create()
    {
        return view('admin.newsCreate');
    }

    public function store(StoreNews $request)
    {
        $news = new News();
        $news->title=$request->input('title');
        $news->content=$request->input('content');
        $news->category_id=$request->input('category');
        $fullPath=$request->image->store('public/news');
        $news->featured_image=basename($fullPath);
        $news->create_day=date('Y-m-d H:i:s');
        $news->save();
        return redirect()->route('admin.newsIndex')->with('message','Thêm tin tức thành công!');

    }

    public function edit($id)
    {
        $news=News::find($id);
        return view('admin.newsEdit',['news'=>$news]);
    }

    public function update(UpdateNews $request,$id)
    {
        $news=News::find($id);
        $news->title=$request->input('title');
        $news->content=$request->input('content');
        $news->category_id=$request->input('category');
        if($request->hasFile('image'))
        {
            Storage::delete('public/news/' . $news->featured_image);
            $fullPath=$request->image->store('public/news');
            $news->featured_image=basename($fullPath);
        }
        $news->slug=null;
        $news->save();
        return redirect()->back()->with('message','Sửa tin tức thành công!');
    }

    public function delete($id)
    {
        $news=News::find($id);
        Storage::delete('public/news/' . $news->featured_image);
        $news->delete();
        return redirect()->back()->with('message','Xóa tin tức thành công!');
    }

    public function getNewsByCategoryAdmin($category_id)
    {
        $news=News::with('newsCategory')->where('category_id',$category_id)->get();
        return view('admin.newsIndex',['news'=>$news]);
    }

    public function getNewsByCategory(NewsCategory $newsCategory)
    {
        $newsCategoryName=$newsCategory->name;
        $news=News::with('newsCategory')->where('category_id',$newsCategory->id)->orderBy('id','desc')->paginate(5);
        return view('store.newsCategory',['newsCategoryName'=>$newsCategoryName,'news'=>$news]);
    }
    public function show(News $news)
    {
        $news->load('newsCategory');
        return view('store.news',['news'=>$news]);
    }
}
