@extends('store.master')
@section('title')
    Giỏ hàng
@endsection
@section('content')
    <main class="content-wrapper oh">

        <!-- Navigation -->
        @include('store.partials.navigation')<!-- end navigation -->

        <!-- Page Title -->
        <section class="page-title text-center">
            <div class="container relative clearfix">
                <div class="title-holder">
                    <div class="title-text">
                        <h1 class="uppercase">Giỏ hàng</h1>
                    </div>
                </div>
            </div>
        </section> <!-- end page title -->

        <!-- Cart -->
        @if(!Session::has('cart'))
            <section class="section-wrap shopping-cart pt-0">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <p>Bạn chưa có sản phẩm nào trong giỏ hàng!</p>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="section-wrap shopping-cart pt-0">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap mb-30">
                                <table class="shop_table cart table">
                                    <thead>
                                    <tr>
                                        <th class="product-name" colspan="2">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Session::has('cart'))
                                        @foreach(Session::get('cart') as $product)
                                            <tr class="cart_item">
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="{{URL::to('storage/products/' . $product['image'])}}" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">{{$product['name']}}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{{$product['price']}}</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <form method="post" action="{{route('store.cartEdit',['id'=>$product['product_id']])}}" id="{{'cartEditForm_' . $product['product_id']}}">
                                                            <input type="button" value="-" class="minus minusCartItem" id="{{$product['product_id']}}" /><input type="number" step="1" min="1" value="{{$product['quantity']}}" max="10" title="Qty" class="input-text qty text" id="{{'quantity_' . $product['product_id']}}" name="quantity" readonly/><input type="button" value="+" class="plus plusCartItem" id="{{$product['product_id']}}" />
                                                            {{csrf_field()}}
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">{{number_format($product['quantity']*$product['price'],0,',','.')}}</span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="{{route('store.cartRemove',['id'=>$product['product_id']])}}" class="remove" title="Remove this item">
                                                        <i class="icon icon_close"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="cart_totals">
                                        <h2 class="heading relative heading-small uppercase mb-30">Thanh toán</h2>

                                        <table class="table shop_table">
                                            <tbody>
                                            <tr class="order-total">
                                                <th><strong>Tổng cộng : </strong></th>
                                                <td>
                                                    <strong><span class="amount">{{number_format($cartTotal,0,',','.')}} đ</span></strong>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="actions right">
                                        <a href="{{route('store.index')}}"><input type="button" name="update_cart" value="Tiếp tục mua hàng" class="btn btn-md btn-dark"></a>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{route('store.checkOut')}}" class="btn btn-md btn-color"><span>Tiến hành đặt hàng</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">

                        <!-- end col cart totals -->

                    </div> <!-- end row -->


                </div> <!-- end container -->
            </section>
        @endif
        <!-- end cart -->

        <!-- Footer Type-1 -->
        @include('store.partials.footerInCart') <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main>
@endsection