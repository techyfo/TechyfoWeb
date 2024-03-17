<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    {!! SEO::generate() !!}
    <meta name="keywords" content="Techyfo, Software, ecommerce, business, digital marketing, seo, digital agency, creative agency, mobile app, marketing, it solution">
    <meta name="author" content="Techyfo">
    <!-- Favicon Icon -->
    <link rel=" shortcut icon" href="{{asset('website')}}/images/favicon.png" type="image/png">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/animate.css">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/slick.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/style.css">

</head>

<body>
<!-- Preloader Start -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Preloader Ends -->
<!-- Navbar Start -->
@include('website.includes.navbar')
<!-- Navbar Ends -->
@yield('content')
<!-- Footer Start -->
@include('website.includes.footer')
<!-- Footer Ends -->
<!-- Back Top Top Start -->
<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
<!-- Back Top Top Ends -->
<!-- Jquery js -->
<script src="{{asset('website')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('website')}}/js/vendor/modernizr-3.7.1.min.js"></script>

<!-- Bootstrap js -->
<script src="{{asset('website')}}/js/popper.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap.min.js"></script>

<!-- Slick js -->
<script src="{{asset('website')}}/js/slick.min.js"></script>

<!-- wow js -->
<script src="{{asset('website')}}/js/wow.min.js"></script>

<!-- Particles js -->
<script src="{{asset('website')}}/js/particles.min.js"></script>

<!-- Main js -->
@include('website.includes.main_script')

</body>

</html>
