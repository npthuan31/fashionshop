@extends('admin.master')

@section('content')
    {{Session::put('backURL_news',URL::current())}}
    <div id="page-wrapper">
        <div class="row" style="padding-bottom: 15px">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức</h1>
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <a href="{{route('admin.newsCreate')}}" class="btn btn-info" role="button">+ Thêm tin tức</a>
                <hr>
                <div style="padding-bottom: 10px">
                    <span style="font-weight: bold;">Lọc theo : </span>
                    @foreach($newsCategorys as $newsCategory)
                        <a href="{{route('admin.newsByCategory',['category_id'=>$newsCategory->id])}}"><span class="label label-primary">{{$newsCategory->name}}</span></a>
                    @endforeach
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách tin tức
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Mã tin</th>
                                    <th>Hình đại diện</th>
                                    <th>Tiêu đề</th>
                                    <th>Loại tin</th>
                                    <th>Ngày tạo</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $oneNews)
                                    <tr>
                                        <td>#{{$oneNews->id}}</td>
                                        <td style="width: 150px"><img src="{{URL::to('storage/news/' . $oneNews->featured_image)}}" alt="Hinh-tin-tuc" style="max-width: 100%;height: auto"></td>
                                        <td>{{$oneNews->title}}</td>
                                        <td>{{$oneNews->newsCategory->name}}</td>
                                        <td>{{$oneNews->create_day}}</td>
                                        <td><a href="{{route('admin.newsEdit',['id'=>$oneNews->id])}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a class="deleteProduct" href="{{route('admin.newsDelete',['id'=>$oneNews->id])}}"><i class="fa fa-remove"></i></a></td>
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


