<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('admin.index')}}">Fashion Shop | Admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}</a>
                </li>
                <li>
                    <a href="{{route('admin.changePassword')}}"><i class="fa fa-gear fa-fw"></i> Đổi password</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{route('admin.index')}}"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                </li>
                <li>
                    <a href="{{route('admin.productIndex')}}"><i class="fa fa-product-hunt fa-fw"></i> Sản phẩm</a>
                </li>
                <li>
                    <a href="{{route('admin.categoryIndex')}}"><i class="fa fa-tags fa-fw"></i> Loại sản phẩm</a>
                </li>
                <li>
                    <a href="{{route('admin.orderIndex')}}"><i class="fa fa-first-order fa-fw"></i> Đơn hàng</a>
                </li>
                <li>
                    <a href="{{route('admin.newsIndex')}}"><i class="fa fa-newspaper-o fa-fw"></i> Tin tức</a>
                </li>
                <li>
                    <a href="{{route('admin.sliderIndex')}}"><i class="fa fa-sliders fa-fw"></i> Slider</a>
                </li>
                <li>
                    <a href="{{route('admin.aboutEdit')}}"><i class="fa fa-info fa-fw"></i> Trang giới thiệu</a>
                </li>
                <li>
                    <a href="{{route('admin.instructionEdit')}}"><i class="fa fa-question fa-fw"></i> Trang hướng dẫn</a>
                </li>
                <li>
                    <a href="{{route('admin.contactEdit')}}"><i class="fa fa-phone fa-fw"></i> Trang liên hệ</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>