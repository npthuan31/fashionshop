@extends('store.master')
@section('title')
    Sản phẩm
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
                <li class="active">
                    Sản phẩm
                </li>
            </ol> <!-- end breadcrumbs -->
        </div>

        <!-- Collections -->
        <section class="section-wrap">
            <div class="container">
                <div class="row row-10">
                    @foreach($categorys as $category)
                        <div class="col-sm-6">
                            <a href="{{route('store.category',['category'=>$category->slug])}}" class="collection-item">
                                <img src="{{URL::to('storage/categorys/' . $category->image)}}" alt="">
                                <div class="overlay">
                                    <h2 class="uppercase">{{$category->name}}</h2>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> <!-- end collections -->

        <!-- Footer Type-1 -->
        @include('store.partials.footer')<!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main> <!-- end main container -->
@endsection