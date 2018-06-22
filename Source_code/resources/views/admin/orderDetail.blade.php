@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi tiết đơn hàng: #{{$order->id}}</h1>
                @if(Session::has('orderMessage'))
                    <div class="alert alert-success">{{Session::get('orderMessage')}}</div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thông tin đặt hàng
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <td>Họ tên : </td>
                                <td>{{$order->full_name}}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ : </td>
                                <td>{{$order->address}}</td>
                            </tr>
                            <tr>
                                <td>SĐT : </td>
                                <td>0{{$order->tel}}</td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <td>Ghi chú : </td>
                                <td>{{$order->note}}</td>
                            </tr>
                            <tr>
                                <td>Ngày tạo : </td>
                                <td>{{$order->order_day}}</td>
                            </tr>

                        </table>
                        <hr>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Mã SP</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên SP</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderDetails as $orderDetail)
                                    <tr class="">
                                        <td>#{{$orderDetail->product_id}}</td>
                                        <td style="width: 150px"><img src="{{URL::to('storage/products/' . $orderDetail->image)}}" alt="Hinh-anh-san-pham" style="max-width: 100%;height: auto"></td>
                                        <td>{{$orderDetail->name}}</td>
                                        <td>{{$orderDetail->quantity}}</td>
                                        <td>{{number_format($orderDetail->price,0,',','.')}} đ</td>
                                        <td>{{number_format($orderDetail->quantity * $orderDetail->price,0,',','.')}} đ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                        <hr>
                        <span style="font-weight: bold">Trạng thái : </span>
                        <span id="state">
                            @if($order->state==1)
                                <span class="label label-primary">Đang chờ</span>
                            @elseif($order->state==2)
                                <span class="label label-success">Hoàn tất</span>
                            @elseif($order->state==3)
                                <span class="label label-danger">Đã hủy</span>
                            @endif
                        </span>
                        <span><a href="" id="edit_order_state"><i class="fa fa-edit">Chỉnh sửa</i></a></span>
                        <div hidden style="margin-top: 10px;" class="well" id="toggle_edit_order_state">
                            <div hidden id="success_change_order_sate" style="height: 40px;padding:0.5em; margin-bottom: 5px;" class="alert alert-success">
                                <strong>Thành công!</strong> Đổi trạng thái thành công.
                            </div>

                            <form role="form" method="post" action="{{route('admin.orderUpdate',['id'=>$order->id])}}">
                                <div class="form-group">
                                    <label for="optionsRadiosInline1" class="label label-primary">Đang chờ</label>
                                    <input type="radio" name="order_state" id="optionsRadiosInline1" value="1">
                                </div>

                                <div class="form-group">
                                    <label for="optionsRadiosInline2" class="label label-success">Hoàn tất</label>&nbsp;
                                    <input type="radio" name="order_state" id="optionsRadiosInline2" value="2" checked>
                                </div>

                                <div class="form-group">
                                    <label for="optionsRadiosInline3" class="label label-danger">Đã hủy</label>
                                    <input type="radio" name="order_state" id="optionsRadiosInline3" value="3">
                                </div>
                                {{csrf_field()}}
                                <button class="btn btn-info" type="submit"><i class="fa fa-check-circle"> Áp dụng</i></button>
                            </form>
                        </div>
                        <hr>
                        <a href="{{URL::to(Session::get('backURL_order'))}}" class="btn btn-primary" role="button">Trở về</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection


