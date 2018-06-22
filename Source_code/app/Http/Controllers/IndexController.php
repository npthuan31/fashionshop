<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        $sliders=Slider::orderBy('id','desc')->get();
        $newProducts=Product::with('images')->orderBy('id','desc')->take(4)->get();
        $featuredProducts=Product::with('images')->where('featured',1)->orderBy('id','desc')->take(4)->get();
        return view('store.index',['sliders'=>$sliders,'newProducts'=>$newProducts,'featuredProducts'=>$featuredProducts]);
    }
}
