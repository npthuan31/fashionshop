@extends('store.master')
@section('title')
    {{$categoryName}}
@endsection
@section('content')
    <main class="main-container oh">

        <!-- Navigation -->
        @include('store.partials.navigation') <!-- end navigation -->

        <!-- Breadcrumbs -->
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('store.index')}}">Trang chủ</a>
                </li>
                <li>
                    <a href="{{route('store.categoryIndex')}}">Sản phẩm</a>
                </li>
                <li class="active">
                    {{$categoryName}}
                </li>
            </ol> <!-- end breadcrumbs -->
        </div>

        <!-- Catalogue -->
        <section class="section-wrap pt-70 pb-40 catalogue">
            <div class="container relative">
                <div class="row">

                    <div class="col-md-9 catalogue-col right mb-50">

                        <div class="shop-catalogue grid-view left">
                            <div class="row row-10 items-grid">
                                @foreach($products as $product)
                                    <div class="col-md-4 col-xs-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{route('store.product',['product'=>$product->slug])}}">
                                                    <img src="{{URL::to('storage/products/' . $product->images[0]->name)}}" alt="">
                                                </a>
                                            </div>

                                            <div class="product-details">
                                                <h3>
                                                    <a class="product-title" href="{{route('store.product',['product'=>$product->slug])}}">{{$product->name}}</a>
                                                </h3>

                                                @if(isset($product->sale_price))
                                                    <span class="price">
                                                        <del>
                                                            <span>{{number_format($product->regular_price,0,',','.')}} đ</span>
                                                        </del>
                                                        <ins>
                                                            <span class="ammount">{{number_format($product->sale_price,0,',','.')}} đ</span>
                                                        </ins>
                                                    </span>
                                                @else
                                                    <span class="price">
                                                        <ins>
                                                            <span class="ammount">{{number_format($product->regular_price,0,',','.')}} đ</span>
                                                        </ins>
                                                    </span>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div> <!-- end row -->
                        </div> <!-- end grid mode -->

                        <div class="clear"></div>

                        <!-- Pagination -->
                        <div class="pagination-wrap">
                            <nav class="pagination right clear">
                                {{$products->links()}}
                            </nav>
                        </div>

                    </div> <!-- end col -->

                    <!-- Sidebar -->
                    <aside class="col-md-3 sidebar left-sidebar">

                        <!-- Categories -->
                        <div class="widget categories">
                            <h3 class="widget-title uppercase">Danh mục</h3>
                            <ul class="list-no-dividers">
                                @foreach($categorys as $category)
                                    <li class="{{Request::is('danh-muc/'.$category->slug)?'active':''}}">
                                        <a href="{{route('store.category',['category'=>$category->slug])}}">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </aside> <!-- end sidebar -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end catalogue -->


        <!-- Footer Type-1 -->
        @include('store.partials.footer') <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main>
@endsection