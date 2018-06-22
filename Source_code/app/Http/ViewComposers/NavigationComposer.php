<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Category;
use App\NewsCategory;
class NavigationComposer {
    public function category(View $view)
    {
        $categorys=Category::orderBy('name','asc')->get();
        $view->with('categorys',$categorys);
    }

    public function newsCategory(View $view)
    {
        $newsCategorys=NewsCategory::all();
        $view->with('newsCategorys',$newsCategorys);
    }

    public function cart(View $view)
    {
        $cartCount=0;
        $cartTotal=0;
        if(session('cart'))
        {
            foreach(session('cart') as $product)
            {
                $cartCount+=$product['quantity'];
                $cartTotal+=($product['quantity'] * $product['price']);
            }
        }
        $view->with(['cartCount'=>$cartCount,'cartTotal'=>$cartTotal]);
    }

}