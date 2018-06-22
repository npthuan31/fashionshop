@extends('store.master')
@section('title')
    {{$newsCategoryName}}
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
                    Tin tức
                </li>
                <li class="active">
                    {{$newsCategoryName}}
                </li>
            </ol> <!-- end breadcrumbs -->
        </div>

        <!-- Blog Standard -->
        <section class="section-wrap blog-standard pb-50">
            <div class="container relative">
                <div class="row">

                    <!-- content -->
                    <div class="col-md-9 post-content mb-50">

                        @foreach($news as $oneNews)
                            <article class="entry-item">
                                <div class="entry-img">
                                    <a href="{{route('store.news',['news'=>$oneNews->slug])}}">
                                        <img src="{{URL::to('storage/news/' . $oneNews->featured_image)}}" alt="Hinh-tin-tuc">
                                    </a>
                                </div>
                                <div class="entry-wrap">
                                    <div class="entry">
                                        <h2 class="entry-title">
                                            <a href="{{route('store.news',['news'=>$oneNews->slug])}}">{{$oneNews->title}}</a>
                                        </h2>
                                        <ul class="entry-meta">
                                            <li class="entry-date">
                                                {{$oneNews->create_day}}
                                            </li>
                                            <li class="entry-category">
                                                <a href="#">{{$oneNews->newsCategory->name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        <!-- Pagination -->
                        <div class="text-center">
                            <nav class="pagination right clear">
                                {{$news->links()}}
                            </nav>
                        </div>

                    </div> <!-- end col -->

                    <!-- Sidebar -->
                    <aside class="col-md-3 sidebar">

                        <!-- Categories -->
                        <div class="widget categories">
                            <h3 class="widget-title heading uppercase">Danh mục</h3>
                            <ul class="list-no-dividers">
                                <li class="{{ Request::is('tin-tuc/loai-tin/tin-khuyen-mai') ? 'active':''}}">
                                    <a href="{{route('store.newsCategory',['newsCategory'=>'tin-khuyen-mai'])}}">Tin khuyến mãi</a>
                                </li>
                                <li class="{{ Request::is('tin-tuc/loai-tin/tin-thoi-trang') ? 'active':''}}">
                                    <a href="{{route('store.newsCategory',['newsCategory'=>'tin-thoi-trang'])}}">Tin thời trang</a>
                                </li>
                            </ul>
                        </div>

                    </aside> <!-- end sidebar -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end blog standard -->

        <!-- Footer Type-1 -->
        @include('store.partials.footer') <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main>
@endsection