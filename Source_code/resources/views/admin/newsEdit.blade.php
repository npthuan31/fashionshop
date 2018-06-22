@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức</h1>
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
                        Sửa sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.newsUpdate',['id'=>$news->id])}}">
                                    <div class="form-group">
                                        <label>Tên tin tức</label>
                                        <input required class="form-control" name="title" value="{{$news->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại tin tức</label>
                                        <select class="form-control" name="category">
                                            <option disabled>Chọn loại tin tức</option>
                                            @foreach($newsCategorys as $newsCategory)
                                                <option {{$news->category_id==$newsCategory->id?'selected':''}} value="{{$newsCategory->id}}">{{$newsCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung tin</label>
                                        <textarea class="form-control" rows="3" id="content" name="content">{{$news->content}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình hiện tại</label><br>
                                        <div style="display:inline-block;width: 150px; border: 1px solid black; margin: auto;">
                                            <img src="{{URL::to('storage/news/' . $news->featured_image)}}" style="max-width: 100%; height: auto" alt="Hinh-tin-tuc">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn hình mới</label>
                                        <input type="file" name="image">
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">Sửa</button>
                                    <a href="{{URL::to(Session::get('backURL_news'))}}" class="btn btn-primary" role="button">Trở về</a>
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
