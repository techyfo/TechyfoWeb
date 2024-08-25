@extends('layouts.website_master')
@section('content')
    @include('website.includes.breadcrumb',['title' => '404',])


    <!-- Feature Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <div>
                            <img src="images/404.svg" class="img-fluid" alt="">
                        </div>
                        <h3 class="mb-3">sorry we can't found anything</h3>
                        <div class="d-flex justify-content-center">
                            <a href="index1.html" class="main-btn">back to home</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Feature Ends -->
@endsection
