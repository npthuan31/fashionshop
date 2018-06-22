@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider</h1>
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <a href="{{route('admin.sliderCreate')}}" class="btn btn-info" role="button">+ Thêm Slide</a>
                <hr>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách Slide
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Mã Slide</th>
                                    <th>Hình ảnh</th>
                                    <th>URL</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>#{{$slider->id}}</td>
                                        <td style="width: 150px"><img src="{{URL::to('storage/slider/' . $slider->image)}}" alt="Hinh-slide" style="max-width: 100%;height: auto"></td>
                                        <td>{{$slider->url}}</td>
                                        <td><a href="{{route('admin.sliderEdit',['id'=>$slider->id])}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a class="deleteProduct" href="{{route('admin.sliderDelete',['id'=>$slider->id])}}"><i class="fa fa-remove"></i></a></td>
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


