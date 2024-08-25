<!-- Services Start -->
<section id="services" class="section">
    <div class="container">
        @if($header_bar)
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">Provide Service With Our Tools</p>
                <h2>{{strip_tags($header_title)}}</h2>
            </div>
        </div>
        @endif
        <div class="row justify-content-center">
            @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="services wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                        <div class="services-title-icon d-flex">
                            <div class="services-icon color01">
                                {!! $service->icon !!}
                            </div>
                            <h4 class="services-title">{!! $service->name !!}</h4>
                        </div>
                        <div class="services-content">
                            <p class="text">{!! $service->description !!}</p>
                            <a class="services-btn" href="{{route('service',['slug'=>$service->slug])}}">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach

{{--            <div class="col-lg-4 col-sm-6 col-12">--}}
{{--                <div class="services wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">--}}
{{--                    <div class="services-title-icon d-flex">--}}
{{--                        <div class="services-icon color02">--}}
{{--                            <i class="lni lni-layout"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="services-title">Web<br /> Development</h4>--}}
{{--                    </div>--}}
{{--                    <div class="services-content">--}}
{{--                        <p class="text">Designing, creating, and maintaining websites to optimize online presence and user experience for businesses.</p>--}}
{{--                        <a class="services-btn" href="#">Learn More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 col-12">--}}
{{--                <div class="services wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.5s">--}}
{{--                    <div class="services-title-icon d-flex">--}}
{{--                        <div class="services-icon color03">--}}
{{--                            <i class="lni lni-bolt"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="services-title">Digital<br />Marketing</h4>--}}
{{--                    </div>--}}
{{--                    <div class="services-content">--}}
{{--                        <p class="text">Steady growth with innovative digital marketing strategies. Dedicated to crafting impactful brands through effective methods.</p>--}}
{{--                        <a class="services-btn" href="#">Learn More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 col-12">--}}
{{--                <div class="services wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1.5s">--}}
{{--                    <div class="services-title-icon d-flex">--}}
{{--                        <div class="services-icon color04">--}}
{{--                            <i class="lni lni-rocket"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="services-title">Website<br />Design</h4>--}}
{{--                    </div>--}}
{{--                    <div class="services-content">--}}
{{--                        <p class="text">Creative, responsive, user-friendly, innovative, customizable, sleek, intuitive, modern, efficient, dynamic, visually appealing, professional, accessible, engaging, adaptive.</p>--}}
{{--                        <a class="services-btn" href="#">Learn More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 col-12">--}}
{{--                <div class="services wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">--}}
{{--                    <div class="services-title-icon d-flex">--}}
{{--                        <div class="services-icon color05">--}}
{{--                            <i class="lni lni-layers"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="services-title">e-Commerce<br />Solution</h4>--}}
{{--                    </div>--}}
{{--                    <div class="services-content">--}}
{{--                        <p class="text">Transforming online retail with comprehensive e-commerce solutions tailored for seamless customer experiences and optimal growth.</p>--}}
{{--                        <a class="services-btn" href="#">Learn More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 col-12">--}}
{{--                <div class="services wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1.5s">--}}
{{--                    <div class="services-title-icon d-flex">--}}
{{--                        <div class="services-icon color06">--}}
{{--                            <i class="lni lni-envelope"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="services-title">Quick<br />Support</h4>--}}
{{--                    </div>--}}
{{--                    <div class="services-content">--}}
{{--                        <p class="text">Efficient and responsive support for swift resolutions and uninterrupted operations, ensuring client satisfaction and business continuity.</p>--}}
{{--                        <a class="services-btn" href="#">Learn More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div> <!-- container -->
</section>
<!-- Services Ends -->
