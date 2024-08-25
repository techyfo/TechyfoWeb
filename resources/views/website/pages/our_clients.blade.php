@extends('layouts.website_master')
@section('content')
    @include('website.includes.breadcrumb',['title' => 'Our Clients',])

    <!-- Contact Start -->
    <section id="contact" class="section">
        <div class="container">

            <div class="contact-info pt-4 pb-4">
                <div class="row gy-2">
                    @foreach(getCompanyList(24) as $company)
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a target="_blank" href="{{$company->url}}"><img src="{{asset('uploads/'.$company->logo)}}" alt="{{$company->title}}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Ends -->
@endsection
