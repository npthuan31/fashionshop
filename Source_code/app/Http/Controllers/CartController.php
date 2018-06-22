<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrder;
use App\Product;
use Illuminate\Http\Request;
use App\Orders;
use App\OrderDetail;

class CartController extends Controller
{
    public function addToCart(Request $request,Product $product)
    {
        if($request->session()->has('cart'))
        {
            $cart=$request->session()->get('cart');
            $request->session()->forget('cart');
            $status='add';
            foreach ($cart as $key=>$p)
            {
                if($p['product_id']==$product->id)
                {
                    $newQuantity=$p['quantity']+$request->input('quantity');
                    $cart[$key]['quantity']=$newQuantity;
                    $status='update';
                    break;
                }
            }
            if($status=='add')
            {
                $cart[]=['product_id'=>$product->id,'quantity'=>$request->input('quantity'),'name'=>$request->input('name'),'price'=>$request->input('price'),'image'=>$request->input('image')];
            }
            foreach ($cart as $p)
            {
                $request->session()->push('cart',$p);
            }
        }
        else
        {
            $request->session()->push('cart',['product_id'=>$product->id,'quantity'=>$request->input('quantity'),'name'=>$request->input('name'),'price'=>$request->input('price'),'image'=>$request->input('image')]);
        }

        return redirect()->back()->with('cartMessage','Thêm vào giỏ hàng thành công');
    }

    public function editItem(Request $request,$id)
    {
        if($request->session()->has('cart'))
        {
            $cart=$request->session()->get('cart');
            $request->session()->forget('cart');
            foreach ($cart as $key=>$p)
            {
                if($p['product_id']==$id)
                {
                    $newQuantity=$request->input('quantity');
                    $cart[$key]['quantity']=$newQuantity;
                    break;
                }
            }
            foreach ($cart as $p)
            {
                $request->session()->push('cart',$p);
            }
        }

        $request->session()->flash('cartMessage','Cập nhập số lượng sản phẩm thành công');
        return redirect()->back();
    }

    public function removeItem(Request $request,$id)
    {
        if($request->session()->has('cart'))
        {
            $cart=$request->session()->get('cart');
            $request->session()->forget('cart');
            foreach ($cart as $key=>$product)
            {
                if($product['product_id']==$id)
                {
                    unset($cart[$key]);
                    break;
                }
            }
            foreach ($cart as $product)
            {
                $request->session()->push('cart',$product);
            }
        }

        $request->session()->flash('cartMessage','Xóa sản phẩm khỏi giỏ hàng thành công');
        return redirect()->back();
    }

    public function cartIndex()
    {
        return view('store.cart');
    }

    public function checkOut(Request $request)
    {
        if($request->session()->has('cart'))
        {
            return view('store.checkout');
        }
        else
        {
            return redirect()->route('store.index');
        }

    }

    public function placeOrder(StoreOrder $request)
    {
        if($request->session()->has('cart'))
        {
            $cart=$request->session()->get('cart');
            $request->session()->forget('cart');

            $order=new Orders();
            $order->full_name=$request->input('full_name');
            $order->address=$request->input('address');
            $order->tel=$request->input('tel');
            $order->email=$request->input('email');
            $order->note=$request->input('note');
            $order->order_day=date('Y-m-d H:i:s');
            $order->save();

            foreach ($cart as $key=>$product)
            {
                $orderDetail=new OrderDetail();
                $orderDetail->order_id=$order->id;
                $orderDetail->product_id=$product['product_id'];
                $orderDetail->quantity=$product['quantity'];
                $orderDetail->name=$product['name'];
                $orderDetail->price=$product['price'];
                $orderDetail->image=$product['image'];
                $orderDetail->save();
            }
            return view('store.orderSuccess',['orderID'=>$order->id]);
        }
        else
        {
            return redirect()->route('store.index');
        }
    }

}
