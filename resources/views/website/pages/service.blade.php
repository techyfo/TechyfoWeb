@extends('layouts.website_master')
@section('content')
    @include('website.includes.service_header',[
    'header_title' => $service->header_title,
    'header_text' => $service->header_text,
    'header_image' => $service->header_image,
    ])
    <!-- Prinicng Start -->
    @if(getPricePlans(6,$service->id)->count() > 0)
    <section id="pricing" class="pricing section">
        <div class="container">
            <div class="row justify-content-center">
                @foreach(getPricePlans(6,$service->id) as $pp)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-pricing wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                        <div class="pricing-header text-center">
                            {!! $pp->icon !!}
                            <h5 class="sub-title">{{$pp->name}}</h5>
                            <span class="price">{{$pp->price}}</span>
                            <p class="year">{{$pp->billing}}</p>
                        </div>
                        <div class="pricing-list mt-4">
                            <ul>
                                @foreach($pp->features as $feature)
                                    <li><i class="lni lni-arrow-right-circle"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-4 text-center">
                            <a class="white-btn" href="#"><i class="lni lni-arrow-right-circle"></i> Get Started</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- Prinicng Ends -->
    @if($service->children->count()>0)
        @include('website.includes.service_list_section',[
             'services' =>getServices(10, $service->id),
             'header_bar' =>true,
             'header_title' =>$service->name ,
             ])
    @endif

    <!-- About Start -->
    <section id="about" class="section">
        <div class="container">
            @if(isset($service->sec_one_title) && isset($service->sec_one_text) && isset($service->sec_one_image))
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                        <h4>{!! $service->sec_one_title !!}</h4>
                        {!! $service->sec_one_text !!}
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                        <img src="{{asset('uploads/'.$service->sec_one_image)}}" alt="{{ strip_tags($service->sec_one_title) }}">
                    </div>
                </div>
            </div>
            @endif
            @if(isset($service->sec_two_title) && isset($service->sec_two_text) && isset($service->sec_two_image))
                <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                        <img src="{{asset('uploads/'.$service->sec_two_image)}}" alt="{{ strip_tags($service->sec_two_title) }}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">

                        <h4>{!! $service->sec_two_title !!}</h4>
                        {!! $service->sec_one_text !!}
                    </div>
                </div>

            </div>
            @endif
            @if($service->content)
                <div class="my-2">
                    {!! $service->content !!}
                </div>
            @endif
        </div>
    </section>
    <!-- About Ends -->
    <!-- Testimonial Start -->
    @if(getTestimonialList(15,$service->id)->count() > 2)
    <section id="testimonial" class="section testimonial-area">
        <div class="container">
            <div class="title-block mx-auto">
                <div class="section_title mb-4 text-center">
                    <p class="section_subtitle mx-auto text-white">Testimonials</p>
                    <h2 class="text-white">What Clients Says</h2>
                </div>
            </div>

            <div class="row testimonial-active">

                    @foreach(getTestimonialList(15,$service->id) as $testimonail)
                        <div class="col-lg-4">
                            <div class="single-testimonial wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="testimonial-review d-flex align-items-center justify-content-between">
                                    <div class="quota">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            @php
                                                $rating = $testimonail->rating;
                                                $non_rating = 5-$testimonail->rating;
                                            @endphp
                                            @while($rating--)
                                                <li><i class="lni lni-star-filled"></i></li>
                                            @endwhile
                                            @while($non_rating--)
                                                <li><i class="lni lni-star"></i></li>
                                            @endwhile

                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="text">{!! $testimonail->message !!}</p>
                                </div>
                                <div class="mt-4 mb-4 d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="{{asset('uploads/'.$testimonail->image)}}" alt="{{$testimonail->name}}">
                                    </div>
                                    <div class="author-content ml-20">
                                        <h6 class="holder-name">{!! $testimonail->name !!}</h6>
                                        <p class="text">{!! $testimonail->title !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- Testimonial Ends -->
    <!-- Brands Start -->

{{--    <div class="brand-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">--}}
{{--                        @foreach(getCompanyList(5) as $company)--}}
{{--                            <div class="single-logo wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">--}}
{{--                                <a target="_blank" href="{{$company->url}}">--}}
{{--                                    <img style="max-width: 180px" src="{{asset('uploads/'.$company->logo)}}" alt="{{$company->title}}" title="{{$company->title}}">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        @foreach(getCompanyList(5) as $company)
                            <div class="single-logo wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <a target="_blank" href="{{$company->url}}">
                                    <img src="{{asset('uploads/'.$company->logo)}}" alt="{{$company->title}}" title="{{$company->title}}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Brands Ends -->
    <!-- Faq's Part Start -->
    @if(getFaqs(5,$service->id)->count() > 0)
    <section id="faq" class="section faq-area bg-light">
        <div class="container">
            <div class="title-block mx-auto">
                <div class="section_title mb-4 text-center">
                    <p class="section_subtitle mx-auto">Frequently Asked</p>
                    <h2>Frequently Asked</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-content wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1000ms">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionExample">
                                @foreach(getFaqs(5,$service->id) as $faq)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{!! $faq->question !!}</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">{!! $faq->answer !!}</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                @endforeach
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-6">
                    <div class="faq-image mt-4 wow fadeInRight" data-wow-delay="0.2" data-wow-duration="1000ms">
                        <img src="{{asset('website')}}/images/faq.svg" class="" alt="faq">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @endif
    <!-- Faq's Ends -->
    <!-- Contact Start -->
    @include('website.includes.contact_section')
    <!-- Contact Ends -->

@endsection
