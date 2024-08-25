<!-- home Start -->
<section id="home" class="home_area">
    <div class="home-content">
        <div class="container">
            <div class="row no-gutters align-items-center">
                @if($header_image && file_exists(public_path('uploads/'.$header_image)))
                    <div class="col-lg-5">
                        <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                            <h2 class="text-white">{!! $header_title !!}</h2>
                            <p class="service-header-text">{!! $header_text !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <img src="{{ asset('uploads/'.$header_image) }}" alt="banner-image">
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                            <h2 class="text-white">{!! $header_title !!}</h2>
                            <p class="service-header-text">{!! $header_text !!}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="scroll-next">
        <a href="#services" class="page-scroll">
            <img src="{{asset('website')}}/images/down-arrow.png" class="img-fluid" alt="">
        </a>
    </div>
    <div id="particles-1" class="particles"></div>
</section>
<!-- home Ends -->











<!-- Previous Codes -- >


{{--<section id="home" class="home_area">--}}
{{--    <div class="home-content">--}}
{{--        <div class="container">--}}
{{--            <div class="row no-gutters align-items-center">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">--}}
{{--                        <h2 class="text-white">{!! $header_title !!}</h2>--}}
{{--                        <p class="service-header-text">{!! $header_text !!}</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s"><img src="{{asset('uploads/'.$header_image)}}" alt="banner-image"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="scroll-next">--}}
{{--        <a href="#services" class="page-scroll">--}}
{{--            <img src="{{asset('website')}}/images/down-arrow.png" class="img-fluid" alt="">--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div id="particles-1" class="particles"></div>--}}
{{--</section>--}}



