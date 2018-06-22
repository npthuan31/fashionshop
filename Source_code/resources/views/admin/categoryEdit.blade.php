@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sửa sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.categoryUpdate',['id'=>$category->id])}}">
                                    <div class="form-group">
                                        <label>Tên loại sản phẩm</label>
                                        <input class="form-control" name="name" value="{{$category->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Hình hiện tại</label>
                                        <div>
                                            <img src="{{URL::to('storage/categorys/' . $category->image)}}" width="150" height="200" alt="hinh" style="border:1px solid black">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn hình mới</label>
                                        <input type="file" name="image">
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">Sửa</button>
                                    <a href="{{URL::to(Session::get('backURL_category'))}}" class="btn btn-primary" role="button">Trở về</a>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection
