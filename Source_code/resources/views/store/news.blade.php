@extends('store.master')
@section('title')
    {{$news->title}}
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
                <li>
                    <a href="{{route('store.newsCategory',['newsCategory'=>$news->newsCategory->slug])}}">{{$news->newsCategory->name}}</a>
                </li>
                <li class="active">
                    {{mb_substr($news->title,0,30,'UTF-8') . "..."}}
                </li>
            </ol> <!-- end breadcrumbs -->
        </div>

        <!-- Blog Single -->
        <section class="section-wrap post-single pb-50">
            <div class="container relative">
                <div class="row">
                    <!-- standard post -->
                    <article class="entry-item">
                        <div class="entry">
                            <h1 class="uppercase">{{$news->title}}</h1>
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    {{$news->create_day}}
                                </li>
                                <li class="entry-category">
                                    <a href="{{route('store.newsCategory',['newsCategory'=>$news->newsCategory->slug])}}">{{$news->newsCategory->name}}</a>
                                </li>
                            </ul>
                            <div class="entry-img">
                                <img src="{{URL::to('storage/news/' . $news->featured_image)}}" alt="">
                            </div>
                            <div class="entry-content">
                            {!! $news->content !!}
                            </div>
                        </div>
                    </article> <!-- end standard post -->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <!-- end container -->
        </section> <!-- end blog single -->

        <!-- Footer Type-1 -->
        @include('store.partials.footer') <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main>
@endsection