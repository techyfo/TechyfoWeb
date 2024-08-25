@extends('layouts.website_master')
@section('content')
    @include('website.includes.home_header')
    @include('website.includes.service_list_section',[
    'services' =>getServices(10, null),
    'header_bar' =>true ,
    'header_title' =>"Business Services" ,
    ])

<!-- About Start -->
<section id="about" class="section">
    <div class="container">
        @if(getSetting('home_sec_one_title')!== null && getSetting('home_sec_one_text')!== null && getSetting('home_sec_one_image')!== null)
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                    <h4>{!! getSetting('home_sec_one_title') !!}</h4>
                    {!! getSetting('home_sec_one_text') !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                    <img src="{{asset('uploads/'.getSetting('home_sec_one_image'))}}" alt="about">
                </div>
            </div>
        </div>
        @endif
        @if(getSetting('home_sec_two_title')!== null && getSetting('home_sec_two_text')!== null && getSetting('home_sec_two_image')!== null)
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                    <img src="{{asset('uploads/'.getSetting('home_sec_two_image'))}}" alt="about">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                    <h4>{!! getSetting('home_sec_two_title') !!}</h4>
                    {!! getSetting('home_sec_two_text') !!}
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- About Ends -->

<!-- Team Start -->
    @include('website.includes.team_member')
<!-- Team Ends -->
<!-- Testimonial Start -->
<section id="testimonial" class="section testimonial-area">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto text-white">Testimonials</p>
                <h2 class="text-white">What Clients Says</h2>
            </div>
        </div>

        <div class="row testimonial-active">
            @if(getTestimonialList(15)->count() > 2)
                @foreach(getTestimonialList(15) as $testimonail)
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
            @endif

        </div>
    </div>
</section>
<!-- Testimonial Ends -->
<!-- Faq's Part Start -->
    @if(getFaqs(5)->count() > 0)
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
                                    @php $show = "show"; @endphp
                                    @foreach(getfaqs(5) as $faq)
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <a href="#" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">{!! $faq->question !!}</a>
                                            </div>
                                            <div id="collapse{{$faq->id}}" class="collapse {{$show}}" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p class="text">{!! $faq->answer !!}</p>
                                                </div>
                                            </div>
                                        </div> <!-- card -->
                                         @php $show = ""; @endphp
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
<!-- Brands Start -->
<div class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between g-2">
                    @foreach(getCompanyList(5) as $company)
                    <div class="single-logo wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                        <a class="shadow py-3 mx-1 rounded" target="_blank" href="{{$company->url}}"><img style="max-width: 180px" src="{{asset('uploads/'.$company->logo)}}" alt="{{$company->title}}"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brands Ends -->
@endsection
