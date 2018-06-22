@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức</h1>
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
                        Thêm tin tức
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.newsStore')}}">
                                    <div class="form-group">
                                        <label>Tiêu đề tin</label>
                                        <input class="form-control" name="title" value="{{old('title')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại tin</label>
                                        <select class="form-control" name="category">
                                            <option selected disabled>Chọn loại tin</option>
                                            @foreach($newsCategorys as $newsCategory)
                                                <option value="{{$newsCategory->id}}" {{old('category')==$newsCategory->id?'selected':''}}>{{$newsCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung tin</label>
                                        <textarea class="form-control" rows="3" id="content" name="content">{{old('content')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình đại diện</label>
                                        <input type="file" name="image">
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">Thêm</button>
                                    <button type="reset" class="btn btn-danger">Nhập lại</button>
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
