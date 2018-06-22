@extends('store.master')
@section('title')
    Lỗi trang không tìm thấy
@endsection
@section('content')
    <main class="main-container oh">

        <!-- Navigation -->
    @include('store.partials.navigation') <!-- end navigation -->

        <!-- 404 -->
        <section class="section-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-page text-center">

                            <h2 class="headline text-info"> 404</h2>

                            <div class="error-content">

                                <h3><i class="fa fa-warning text-yellow"></i> Lỗi! Trang không tìm thấy.</h3>

                                <p>

                                    Chúng tôi không thể tìm thấy trang bạn yêu cầu.

                                    Trở về <a href="{{route('store.index')}}">trang chủ</a>.

                                </p>

                            </div>

                        </div>
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