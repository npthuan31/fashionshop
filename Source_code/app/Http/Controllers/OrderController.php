<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrderController extends Controller
{
    public function orderIndex()
    {
        $orders=Orders::orderBy('id','desc')->get();
        return view('admin.order',['orders'=>$orders]);
    }

    public function update(Request $request,$id)
    {
        $order=Orders::find($id);
        $order->state=$request->input('order_state');
        $order->save();

        return redirect()->back()->with('orderMessage','Thay đổi trạng thái đơn hàng thành công!');
    }

    public function getOrdersByState($state)
    {
        $orders=Orders::where('state',$state)->orderBy('id','desc')->get();
        return view('admin.order',['orders'=>$orders]);
    }
}
