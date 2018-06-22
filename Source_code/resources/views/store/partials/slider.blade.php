<section class="section-wrap nopadding">
    <div class="container">
        <div class="entry-slider">
            <div class="flexslider" id="flexslider-hero">
                <ul class="slides clearfix">
                    @foreach($sliders as $slider)
                        <li>
                            <a href="{{$slider->url}}">
                            <img src="{{URL::to('storage/slider/' . $slider->image)}}" alt="">
                            <div class="img-holder img-1"></div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div> <!-- end slider -->
    </div>
</section>