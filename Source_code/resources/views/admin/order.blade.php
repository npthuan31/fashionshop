@extends('admin.master')

@section('content')
    {{Session::put('backURL_order',Request::fullUrl())}}
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đơn hàng</h1>
                <div style="padding-bottom: 10px">
                    <span style="font-weight: bold;">Lọc theo : </span>
                    <a href="{{route('admin.orderByState',['state'=>1])}}"><span class="label label-primary">Đang chờ</span></a>
                    <a href="{{route('admin.orderByState',['state'=>2])}}"><span class="label label-success">Hoàn tất</span></a>
                    <a href="{{route('admin.orderByState',['state'=>3])}}"><span class="label label-danger">Đã hủy</span></a>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách đơn hàng
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Họ tên</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Ghi chú</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>#{{$order->id}}</td>
                                        <td>{{$order->full_name}}</td>
                                        <td>{{$order->address}}</td>
                                        <td>0{{$order->tel}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->note}}</td>
                                        <td>{{$order->order_day}}</td>
                                        <td>
                                            @if($order->state==1)
                                                <span class="label label-primary">Đang chờ</span>
                                            @elseif($order->state==2)
                                                <span class="label label-success">Hoàn tất</span>
                                            @elseif($order->state==3)
                                                <span class="label label-danger">Đã hủy</span>
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.orderDetail',['order_id'=>$order->id])}}"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <span style="float: right;"></span>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
@endsection


