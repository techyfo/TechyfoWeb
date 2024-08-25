@extends('layouts.website_master')
@section('content')
    @include('website.includes.breadcrumb',['title' => 'About US',])
    <!-- About Start -->
    <section id="about" class="section">
        <div class="container">
            @if(getSetting('about_sec_one_title')!== null && getSetting('about_sec_one_text')!== null && getSetting('about_sec_one_image')!== null)
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                            <h4>{!! getSetting('about_sec_one_title') !!}</h4>
                            {!! getSetting('about_sec_one_text') !!}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                            <img src="{{asset('uploads/'.getSetting('about_sec_one_image'))}}" alt="about">
                        </div>
                    </div>
                </div>
            @endif
            @if(getSetting('about_sec_two_title')!== null && getSetting('about_sec_two_text')!== null && getSetting('about_sec_two_image')!== null)
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                            <img src="{{asset('uploads/'.getSetting('about_sec_two_image'))}}" alt="about">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                            <h4>{!! getSetting('about_sec_two_title') !!}</h4>
                            {!! getSetting('about_sec_two_text') !!}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- About Ends -->

    @include('website.includes.team_member')
@endsection
