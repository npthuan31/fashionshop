<header class="nav-type-1">
    <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
            <div class="container relative">

                <div class="row">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Mobile cart -->
                        <div class="nav-cart mobile-cart hidden-lg hidden-md">
                            <div class="nav-cart-outer">
                                <div class="nav-cart-inner">
                                    <a href="{{route('store.cart')}}" class="nav-cart-icon">{{$cartCount}}</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end navbar-header -->

                    <div class="header-wrap">
                        <div class="header-wrap-holder">

                            <!-- Search -->
                            <div class="nav-search hidden-sm hidden-xs">
                            </div>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap text-center">
                                    <a href="{{route('store.index')}}">
                                        <img class="logo" src="{{URL::to('img/logo_dark.png')}}" alt="logo">
                                    </a>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="nav-cart-wrap hidden-sm hidden-xs">
                                <div class="nav-cart right">
                                    <div class="nav-cart-outer">
                                        <div class="nav-cart-inner">
                                            <a href="#" class="nav-cart-icon" id="cartIcon">{{$cartCount}}</a>
                                        </div>
                                    </div>
                                    <div class="nav-cart-container">
                                        <div class="nav-cart-items">

                                            @if(Session::has('cart'))
                                                @foreach(Session::get('cart') as $product)
                                                    <div class="nav-cart-item clearfix">
                                                        <div class="nav-cart-img">
                                                            <a href="#">
                                                                <img width="60" height="70" src="{{URL::to('storage/products/' . $product['image'])}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nav-cart-title">
                                                            <a href="#">
                                                                {{$product['name']}}
                                                            </a>
                                                            <div class="nav-cart-price">
                                                                <span>{{$product['quantity']}} x</span>
                                                                <span>{{number_format($product['price'],0,',','.')}} đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="nav-cart-remove">
                                                            <a href="{{route('store.cartRemove',['id'=>$product['product_id']])}}"><i class="icon icon_close"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div> <!-- end cart items -->

                                        <div class="nav-cart-summary">
                                            <span>Tổng tiền :</span>
                                            <span class="total-price">{{number_format($cartTotal,0,',','.')}} đ</span>
                                        </div>

                                        <div class="nav-cart-actions mt-20">
                                            <a href="{{route('store.cart')}}" class="btn btn-md btn-color mt-10"><span>Đặt hàng</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-cart-amount right">
                      <span>
                        Giỏ hàng /
                        <a href="#">{{number_format($cartTotal,0,',','.')}} đ</a>
                      </span>
                                </div>
                            </div> <!-- end cart -->

                        </div>
                    </div> <!-- end header wrap -->

                    <div class="nav-wrap">
                        <div class="collapse navbar-collapse" id="navbar-collapse">

                            <ul class="nav navbar-nav">

                                <li id="mobile-search" class="hidden-lg hidden-md">
                                    <form method="get" class="mobile-search relative">
                                        <input type="search" class="form-control" placeholder="Search...">
                                        <button type="submit" class="search-button">
                                            <i class="icon icon_search"></i>
                                        </button>
                                    </form>
                                </li>

                                <li class="dropdown {{ Request::is('/') ? 'active' : '' }}">
                                    <a href="{{route('store.index')}}">Trang chủ</a>
                                </li>

                                <li class="dropdown {{ Request::is('danh-muc')||Request::is('danh-muc/*')||Request::is('san-pham')||Request::is('san-pham/*') ? 'active' : '' }}">
                                    <a href="{{route('store.categoryIndex')}}">Sản phẩm</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        @foreach($categorys as $category)
                                            <li><a href="{{route('store.category',['category'=>$category->slug])}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="dropdown {{ Request::is('huong-dan-mua-hang') ? 'active' : '' }}">
                                    <a href="{{route('store.instruction')}}">Hướng dẫn mua hàng</a>
                                </li>

                                <li class="dropdown {{ Request::is('gioi-thieu') ? 'active' : '' }}">
                                    <a href="{{route('store.about')}}">Giới Thiệu</a>
                                </li>

                                <li class="dropdown {{ Request::is('tin-tuc/*') ? 'active' : '' }}">
                                    <a href="{{route('store.newsCategory',['newsCategory'=>'tin-khuyen-mai'])}}">Tin tức</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('store.newsCategory',['newsCategory'=>'tin-khuyen-mai'])}}">Tin khuyến mãi</a></li>
                                        <li><a href="{{route('store.newsCategory',['newsCategory'=>'tin-thoi-trang'])}}">Tin thời trang</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown {{ Request::is('lien-he') ? 'active' : '' }}">
                                    <a href="{{route('store.contact')}}">Liên hệ</a>
                                </li>

                            </ul> <!-- end menu -->
                        </div> <!-- end collapse -->
                    </div> <!-- end col -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
</header>