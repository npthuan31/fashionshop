<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use App\Orders;
class OrderDetailController extends Controller
{
    public function show($order_id)
    {
        $order=Orders::find($order_id);
        $orderDetails=OrderDetail::with(['order','product'])->where('order_id',$order_id)->get();
        return view('admin.orderDetail',['order'=>$order,'orderDetails'=>$orderDetails]);
    }
}
