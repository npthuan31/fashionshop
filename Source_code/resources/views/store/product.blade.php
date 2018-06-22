@extends('store.master')
@section('title')
    {{$product->name}}
@endsection
@section('content')
    <main class="content-wrapper oh">

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
                <li>
                    <a href="{{route('store.category',['category'=>$product->category->slug])}}">{{$product->category->name}}</a>
                </li>
                <li class="active">
                    {{$product->name}}
                </li>
            </ol> <!-- end breadcrumbs -->
        </div>

        <!-- Single Product -->
        <section class="section-wrap single-product">
            <div class="container relative">
                <div class="row">

                    <div class="col-sm-6 col-xs-12 mb-60">

                        <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
                            @foreach($product->images as $image)
                                <div class="gallery-cell">
                                    <a href="{{URL::to('storage/products/' . $image->name)}}" class="lightbox-img">
                                        <img src="{{URL::to('storage/products/' . $image->name)}}" alt="" />
                                        <i class="icon arrow_expand"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div> <!-- end gallery main -->

                        <div class="gallery-thumbs">
                            @foreach($product->images as $image)
                                <div class="gallery-cell">
                                    <img src="{{URL::to('storage/products/' . $image->name)}}" alt="" />
                                </div>
                            @endforeach
                        </div> <!-- end gallery thumbs -->

                    </div> <!-- end col img slider -->

                    <div class="col-sm-6 col-xs-12 product-description-wrap">
                        <h1 class="product-title">{{$product->name}}</h1>

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

                        <p class="product-description">{!!$product->short_description!!}</p>

                        <form method="post" action="{{route('store.cartAdd',['product'=>$product->slug])}}" id="addToCartForm">
                            <ul class="product-actions clearfix">
                                <li>
                                    <a href="" class="btn btn-color btn-lg add-to-cart left" id="addToCart"><span>Thêm vào giỏ hàng</span></a>
                                </li>
                                <li>
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus" id="minusButton" /><input type="number" step="1" min="1" value="1" max="10" title="Qty" class="input-text qty text" id="quantity" name="quantity" readonly/><input type="button" value="+" class="plus" id="plusButton" />
                                    </div>
                                </li>
                            </ul>
                            <input type="hidden" name="name" value="{{$product->name}}"/>
                            @if(empty($product->sale_price))
                                <input type="hidden" name="price" value="{{$product->regular_price}}"/>
                            @else
                                <input type="hidden" name="price" value="{{$product->sale_price}}"/>
                            @endif
                            <input type="hidden" name="image" value="{{$product->images[0]->name}}"/>

                            {{csrf_field()}}
                        </form>

                        <div class="socials-share clearfix">
                            <div class="social-icons rounded">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div> <!-- end col product description -->
                </div> <!-- end row -->

                <!-- tabs -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs tabs-bb">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab-description" data-toggle="tab">Chi tiết</a>
                                </li>
                            </ul> <!-- end tabs -->

                            <!-- tab content -->
                            <div class="tab-content">

                                <div class="tab-pane fade in active" id="tab-description">
                                    {!! $product->full_description !!}
                                </div>
                            </div> <!-- end tab content -->

                        </div>
                    </div> <!-- end tabs -->
                </div> <!-- end row -->


            </div> <!-- end container -->
        </section> <!-- end single product -->

        <!-- Related Items -->
        <section class="section-wrap related-products pt-0">
            <div class="container">
                <div class="row heading-row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading uppercase"><small>Sản phẩm cùng loại</small></h2>
                    </div>
                </div>

                <div class="row row-10">

                    <div id="owl-related-products" class="owl-carousel owl-theme nopadding">

                        @foreach($relatedProducts as $relatedProduct)
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{route('store.product',['product'=>$relatedProduct->slug])}}">
                                        <img src="{{URL::to('storage/products/' . $relatedProduct->images[0]->name)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-details">
                                    <h3>
                                        <a class="product-title" href="{{route('store.product',['product'=>$relatedProduct->slug])}}">{{$relatedProduct->name}}</a>
                                    </h3>
                                    @if(isset($relatedProduct->sale_price))
                                        <span class="price">
                                            <del>
                                                <span>{{number_format($relatedProduct->regular_price,0,',','.')}} đ</span>
                                            </del>
                                            <ins>
                                                <span class="ammount">{{number_format($relatedProduct->sale_price,0,',','.')}} đ</span>
                                            </ins>
                                        </span>
                                    @else
                                        <span class="price">
                                            <ins>
                                                <span class="ammount">{{number_format($relatedProduct->regular_price,0,',','.')}} đ</span>
                                            </ins>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                    </div> <!-- end owl -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end related products -->

        <!-- Footer Type-1 -->
        @include('store.partials.footer') <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main> <!-- end main container -->
@endsection