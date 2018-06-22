@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
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
                                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.productUpdate',['id'=>$product->id])}}">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required class="form-control" name="name" value="{{$product->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại sản phẩm</label>
                                        <select class="form-control" name="category">
                                            <option disabled>Chọn loại sản phẩm</option>
                                            @foreach($categorys as $category)
                                                <option {{$product->category->id==$category->id?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <textarea class="form-control" rows="3" id="short_description" name="short_description">{{$product->short_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả đầy đủ</label>
                                        <textarea class="form-control" rows="3" id="full_description" name="full_description">{{$product->full_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá thường</label>
                                        <input class="form-control" name="regular_price" value="{{$product->regular_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá giảm</label>
                                        <input class="form-control" name="sale_price" value="{{$product->sale_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Sản phẩm nổi bật</label>
                                        <label class="checkbox-inline">
                                            <input type="hidden" value="0" name="featured">
                                            <input type="checkbox" value="1" name="featured" {{$product->featured==1?'checked':''}}>Có
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình hiện tại</label><br>
                                        @foreach($product->images as $image)
                                            <div style="display:inline-block;width: 150px; border: 1px solid black; margin: auto;">
                                                <img src="{{URL::to('storage/products/' . $image->name)}}" style="max-width: 100%; height: auto">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn hình mới</label>
                                        <input type="file" name="images[]" multiple>
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">Sửa</button>
                                    <a href="{{URL::to(Session::get('backURL_product'))}}" class="btn btn-primary" role="button">Trở về</a>
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
