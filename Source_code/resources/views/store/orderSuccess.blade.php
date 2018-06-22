@extends('store.master')
@section('title')
    Đặt hàng thành công
@endsection
@section('content')
    <main class="main-container oh">

        <!-- Navigation -->
        @include('store.partials.navigation') <!-- end navigation -->

        <!-- Order Success -->
        <section class="section-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" style="text-align: right">
                        <img src="{{URL::to('img/success.png')}}" alt="" style="width: 100px;height: 100px;">
                    </div>
                    <div class="col-md-7">
                        <h4 class="about-intro uppercase">Đặt hàng thành công!</h4>
                        <h5>Cám ơn bạn đã đặt hàng tại A-HA Fashion Shop!</h5>
                        <h5>Mã đơn hàng của bạn là: <strong>#{{$orderID}}</strong></h5>
                        <br>
                        <a href="{{route('store.index')}}" class="continue">Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center">

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