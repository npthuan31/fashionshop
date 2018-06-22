<footer class="footer footer-type-1 bg-white">

    <div class="container">
        <div class="footer-widgets top-bottom-dividers pb-mdm-20">
            <div class="row">

                <div class="col-md-4 col-sm-8 col-xs-8 col-xxs-12">
                    <div class="widget footer-links">
                        <h5 class="widget-title uppercase">Thông tin</h5>
                        <ul class="list-no-dividers">
                            <li><a href="{{route('store.about')}}">Giới thiệu về A-HA</a></li>
                            <li><a href="{{route('store.instruction')}}">Hướng dẫn mua hàng</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-8 col-xs-8 col-xxs-12">
                    <div class="widget footer-links">
                        <h5 class="widget-title uppercase">Tin tức</h5>
                        <ul class="list-no-dividers">
                            <li><a href="{{route('store.newsCategory',['newsCategory'=>'tin-khuyen-mai'])}}">Tin khuyến mãi</a></li>
                            <li><a href="{{route('store.newsCategory',['newsCategory'=>'tin-thoi-trang'])}}">Tin thời trang</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-8 col-xs-8 col-xxs-12">
                    <div class="widget footer-get-in-touch">
                        <h5 class="widget-title uppercase">Liên hệ</h5>
                        <address class="footer-address"><span><i class="fa fa-home fa-fw"></i></span> 597/7 Tùng Thiện Vương P12 Q8 HCM</address>
                        <address class="footer-address"><span><i class="fa fa-phone-square fa-fw"></i></span> 0979911454</address>
                        <div class="social-icons rounded mt-20">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div> <!-- end stay in touch -->

            </div>
        </div>
    </div> <!-- end container -->

    <div class="bottom-footer bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 copyright sm-text-center">
              <span>
                &copy; 2017 Aha Shop, Made by Thuan Nguyen
              </span>
                </div>

                <div class="col-sm-4 text-center">
                    <div id="back-to-top">
                        <a href="#top">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-amex"></i>
                </div>
            </div>
        </div>
    </div> <!-- end bottom footer -->
</footer>