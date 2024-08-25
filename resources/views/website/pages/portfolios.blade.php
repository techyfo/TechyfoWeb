@extends('layouts.website_master')
@section('content')
    @include('website.includes.breadcrumb',['title' => 'Portfolios',])


    <!-- Portfolio Start -->
    <section class="section portfolio-section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <!--   Portfolio Filters   -->
                <ul id="portfolio-filter" class="portfolio-filter filters">
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter="*" class="pill-button active">All</a>
                    </li>
                    @foreach(getPortfolioCategories(10) as $portfolio_category)
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter=".{{$portfolio_category->slug}}" class="pill-button">{{$portfolio_category->name}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="portfolio-items row">
                <!-- Item 01 -->
                @foreach(getPortfolios(18) as $portfolio)
                <div class="col-lg-4 col-sm-6 portfolio-item {{$portfolio->portfolio_category->slug??''}}">
                    <div class="image-border">
                        <div class="portfolio-box">
                            @php

                                if ($portfolio->priority == 'url'){
                                    $url = $portfolio->url;
                                }else if ($portfolio->priority == 'video_url'){
                                    $url = $portfolio->video_url;
                                }else{
                                     $url = asset('uploads/'.$portfolio->image);
                                }
                            @endphp
                            <a target="_blank" href="{{$url}}">
                                <img src="{{asset('uploads/'.$portfolio->image)}}" class="img-fluid" alt="{{$portfolio->name}}">
                                <div class="img-overlay text-center">
                                    {!! $portfolio->name !!}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Ends -->

@endsection

