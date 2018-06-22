@extends('admin.master')

@section('content')
    {{Session::put('backURL_category',URL::current())}}
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm</h1>
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <a href="{{route('admin.categoryCreate')}}" class="btn btn-info" role="button">+ Thêm loại sản phẩm</a>
                <hr>
                <div class="alert alert-warning"><strong>Cảnh báo: Xóa loại sản phẩm sẽ xóa luôn tất cả các sản phẩm thuộc loại sản phẩm đó!</strong></div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách loại sản phẩm
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Mã loại</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên loại sản phẩm</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorys as $category)
                                    <tr>
                                        <td>#{{$category->id}}</td>
                                        <td><img src="{{URL::to('storage/categorys/' . $category->image)}}" alt="Hinh-loai-san-pham" width="100" height="120"></td>
                                        <td>{{$category->name}}</td>
                                        <td><a href="{{route('admin.categoryEdit',['id'=>$category->id])}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a class="deleteProduct" href="{{route('admin.categoryDelete',['id'=>$category->id])}}"><i class="fa fa-remove"></i></a></td>
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


