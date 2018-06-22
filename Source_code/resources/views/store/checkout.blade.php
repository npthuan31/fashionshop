@extends('store.master')
@section('title')
    Đặt hàng
@endsection
@section('content')
    <main class="content-wrapper oh">

        <!-- Navigation -->
        @include('store.partials.navigation') <!-- end navigation -->

        <!-- Page Title -->
        <section class="page-title text-center">
            <div class="container relative clearfix">
                <div class="title-holder">
                    <div class="title-text">
                        <h1 class="uppercase">Đặt hàng</h1>
                    </div>
                </div>
            </div>
        </section> <!-- end page title -->

        <!-- Checkout -->
        <section class="section-wrap checkout pt-0 pb-50">
            <div class="container relative">
                <div class="row">

                    <div class="ecommerce col-xs-12">

                        <form name="checkout" class="checkout ecommerce-checkout row" method="post" action="{{route('store.cartPlaceOrder')}}">

                            <div class="col-md-8" id="customer_details">
                                <div>
                                    <h2 class="heading uppercase mb-30">Thông tin đặt hàng</h2>

                                    <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}" id="billing_first_name_field">
                                        <label for="billing_first_name" class="control-label">Họ tên</label>
                                        <input style="margin-bottom: 2px;" type="text" class="form-control" name="full_name" id="billing_first_name" value="{{old('full_name')}}">
                                        @if ($errors->has('full_name'))
                                            <span class="help-block">
                                                {{ $errors->first('full_name') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}" id="billing_address_1_field">
                                        <label for="billing_address_1" class="control-label">Địa chỉ</label>
                                        <input style="margin-bottom: 2px;" type="text" class="form-control" name="address" id="billing_address_1" value="{{old('address')}}">
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                {{ $errors->first('address') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}" id="billing_phone_field">
                                        <label for="billing_phone" class="control-label">Số điện thoại</label>
                                        <input style="margin-bottom: 2px;" type="text" class="form-control" name="tel" id="billing_phone" value="{{old('tel')}}">
                                        @if ($errors->has('tel'))
                                            <span class="help-block">
                                                {{ $errors->first('tel') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="billing_email_field">
                                        <label for="billing_email" class="control-label">Email</label>
                                        <input style="margin-bottom: 2px;" type="text" class="form-control" name="email" id="billing_email" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group" id="order_comments_field">
                                        <label for="order_comments" class="control-label">Ghi chú</label>
                                        <textarea name="note" class="form-control" id="order_comments" placeholder="Ghi chú của bạn" rows="2" cols="5">{{old('note')}}</textarea>
                                    </div>

                                    <div class="clear"></div>

                                </div>

                                <div class="clear"></div>

                            </div> <!-- end col -->


                            <div class="col-md-4">
                                <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                                    <h2 class="heading uppercase mb-30">Đơn hàng</h2>
                                    <table class="table shop_table ecommerce-checkout-review-order-table">
                                        <tbody>
                                        @if(Session::has('cart'))
                                            @foreach(Session::get('cart') as $product)
                                                <tr>
                                                    <th>{{$product['name']}}<span class="count"> x {{$product['quantity']}}</span></th>
                                                    <td>
                                                        <span class="amount">{{number_format($product['quantity'] * $product['price'],0,',','.')}} đ</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        <tr class="order-total">
                                            <th><strong>Tổng cộng</strong></th>
                                            <td>
                                                <strong><span class="amount">{{number_format($cartTotal,0,',','.')}} đ</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div id="payment" class="ecommerce-checkout-payment">
                                        <div class="form-row place-order" style="display: table; margin: auto">
                                            {{csrf_field()}}
                                            <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg" id="place_order" value="Đặt hàng">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end order review -->
                        </form>

                    </div> <!-- end ecommerce -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end checkout -->


        <!-- Footer Type-1 -->
        @include('store.partials.footer')<!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main> <!-- end main container -->
@endsection