@extends('store.master')
@section('title')
    Liên hệ
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
                <li class="active">
                    Liên hệ
                </li>
            </ol> <!-- end breadcrumbs -->
        </div>

        <!-- About us -->
        <section class="section-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! $contact->content !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Type-1 -->
        @include('store.partials.footer') <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main>
@endsection