@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider</h1>
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sửa Slide
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.sliderUpdate',['id'=>$slider->id])}}">
                                    <div class="form-group">
                                        <label>Hình hiện tại</label><br>
                                        <div style="display:inline-block;width: 150px; border: 1px solid black; margin: auto;">
                                            <img src="{{URL::to('storage/slider/' . $slider->image)}}" style="max-width: 100%; height: auto" alt="Hinh-slide">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn hình mới</label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label>URL</label>
                                        <input class="form-control" name="url" value="{{$slider->url}}">
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">Sửa</button>
                                    <a href="{{route('admin.sliderIndex')}}" class="btn btn-primary" role="button">Trở về</a>
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
