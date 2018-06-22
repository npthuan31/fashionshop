@extends('store.master')
@section('title')
    Trang chủ
@endsection
@section('content')
    <main class="content-wrapper oh">

        <!-- Navigation -->
        @include('store.partials.navigation') <!-- end navigation -->

        <!-- Hero Slider -->
        @include('store.partials.slider') <!-- end hero slider -->

        <!-- New Arrivals -->
        <section class="section-wrap new-arrivals pb-0">
            <div class="container">

                <div class="row heading-row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading uppercase"><small>Sản phẩm mới</small></h2>
                    </div>
                </div>

                <div class="row row-10">
                    @foreach($newProducts as $newProduct)
                        <div class="col-md-3 col-xs-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{route('store.product',['product'=>$newProduct->slug])}}">
                                        <img src="{{URL::to('storage/products/' . $newProduct->images[0]->name)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-details">
                                    <h3>
                                        <a class="product-title" href="{{route('store.product',['product'=>$newProduct->slug])}}">{{$newProduct->name}}</a>
                                    </h3>
                                    @if(isset($newProduct->sale_price))
                                        <span class="price">
                                            <del>
                                                <span>{{number_format($newProduct->regular_price,0,',','.')}} đ</span>
                                            </del>
                                            <ins>
                                                <span class="ammount">{{number_format($newProduct->sale_price,0,',','.')}} đ</span>
                                            </ins>
                                        </span>
                                    @else
                                        <span class="price">
                                            <ins>
                                                <span class="ammount">{{number_format($newProduct->regular_price,0,',','.')}} đ</span>
                                            </ins>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- end row -->

            </div>
        </section> <!-- end new arrivals -->

        <!-- Featured -->
        <section class="section-wrap pb-0">
            <div class="container">

                <div class="row heading-row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading uppercase"><small>Sản phẩm nổi bật</small></h2>
                    </div>
                </div>

                <div class="row row-10">
                    @foreach($featuredProducts as $featuredProduct)
                        <div class="col-md-3 col-xs-6 animated-from-left">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{route('store.product',['product'=>$featuredProduct->slug])}}">
                                        <img src="{{URL::to('storage/products/' . $featuredProduct->images[0]->name)}}" alt="">
                                    </a>
                                </div>

                                <div class="product-details">
                                    <h3>
                                        <a class="product-title" href="{{route('store.product',['product'=>$featuredProduct->slug])}}">{{$featuredProduct->name}}</a>
                                    </h3>
                                    @if(isset($featuredProduct->sale_price))
                                        <span class="price">
                                            <del>
                                                <span>{{number_format($featuredProduct->regular_price,0,',','.')}} đ</span>
                                            </del>
                                            <ins>
                                                <span class="ammount">{{number_format($featuredProduct->sale_price,0,',','.')}} đ</span>
                                            </ins>
                                        </span>
                                    @else
                                        <span class="price">
                                            <ins>
                                                <span class="ammount">{{number_format($featuredProduct->regular_price,0,',','.')}} đ</span>
                                            </ins>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- end row -->
            </div>
        </section> <!-- end best sellers -->

        <!-- Footer Type-1 -->
        @include('store.partials.footer') <!-- end footer -->

    </main>
@endsection