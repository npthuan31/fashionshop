<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function getSliderIndex()
    {
        $sliders=Slider::orderBy('id','desc')->get();
        return view('admin.sliderIndex',['sliders'=>$sliders]);
    }
    public function create()
    {
        return view('admin.sliderCreate');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' =>'required|image|max:5000',
            'url' =>'required'
        ]);
        $slider=new Slider();
        $fullPath=$request->image->store('public/slider');
        $slider->image=basename($fullPath);
        $slider->url=$request->input('url');
        $slider->save();
        return redirect()->route('admin.sliderIndex')->with('message','Thêm slide thành công!');
    }
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view('admin.sliderEdit',['slider'=>$slider]);
    }
    public function update(Request $request,$id)
    {
        $slider=Slider::find($id);
        $slider->url=$request->input('url');
        if($request->hasFile('image'))
        {
            Storage::delete('public/slider/' . $slider->image);
            $fullPath=$request->image->store('public/slider');
            $slider->image=basename($fullPath);
        }
        $slider->save();
        return redirect()->back()->with('message','Sửa Slide thành công!');
    }
    public function delete($id)
    {
        $slider=Slider::find($id);
        Storage::delete('public/slider/' . $slider->image);
        $slider->delete();
        return redirect()->route('admin.sliderIndex')->with('message','Xóa Slide thành công!');
    }
}
