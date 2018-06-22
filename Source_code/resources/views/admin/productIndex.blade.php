@extends('admin.master')

@section('content')
    {{Session::put('backURL_product',Request::fullUrl())}}
    <div id="page-wrapper">
        <div class="row" style="padding-bottom: 15px">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <a href="{{route('admin.productCreate')}}" class="btn btn-info" role="button">+ Thêm sản phẩm</a>
                <hr>
                <div style="padding-bottom: 10px">
                    <span style="font-weight: bold;">Lọc theo : </span>
                    <a href="{{route('admin.productIndex')}}"><span class="label label-primary">Tất cả</span></a>
                    @foreach($categorys as $category)
                        <a href="{{route('admin.productByCategory',['category_id'=>$category->id])}}"><span class="label label-primary">{{$category->name}}</span></a>
                    @endforeach
                </div>
                <form role="form" method="get" action="{{route('admin.productPostSearch')}}">
                    <div class="input-group custom-search-form">
                        <input name="key" type="text" class="form-control" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm...">
                        {{csrf_field()}}
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách sản phẩm
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Mã SP</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Loại</th>
                                    <th>Giá thường</th>
                                    <th>Giá giảm</th>
                                    <th>Nổi bật</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>#{{$product->id}}</td>
                                        @if($product->images->isNotEmpty())
                                            <td style="width: 150px"><img src="{{URL::to('storage/products/' . $product->images[0]->name)}}" alt="Hinh-anh-san-pham" style="max-width: 100%;height: auto"></td>
                                        @else
                                            <td style="width: 150px"><img src="{{URL::to('storage/products/no_image.jpg')}}" alt="Hinh-anh-san-pham-bi-thieu" style="max-width: 100%;height: auto"></td>
                                        @endif
                                        <td>{{$product->name}}</td>
                                        <td>{{isset($product->category->name)?$product->category->name:'N/A'}}</td>
                                        <td>{{number_format($product->regular_price,0,',','.')}} đ</td>
                                        <td>{{isset($product->sale_price)?number_format($product->sale_price,0,',','.').' đ':''}}</td>
                                        <td>{{$product->featured==1?'Có':'Không'}}</td>
                                        <td><a href="{{route('admin.productEdit',['id'=>$product->id])}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a class="deleteProduct" href="{{route('admin.productDelete',['id'=>$product->id])}}"><i class="fa fa-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <span style="float: right;">{{$products->appends(Request::except('page'))->links() }}</span>
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


