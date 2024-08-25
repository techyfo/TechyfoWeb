<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    {!! SEO::generate() !!}
    @yield('meta_seo')
    <meta name="keywords" content="{{getSetting('meta_keywords')}}">
    <meta name="author" content="{{getSetting('meta_author')}}">
    <!-- Favicon Icon -->
    <link rel=" shortcut icon" href="{{asset('uploads/'.getSetting('site_favicon'))}}" type="image/png">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/animate.css">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/slick.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/style.css">
    {!! getSetting('site_header_code') !!}
</head>

<body>
{!! getSetting('site_body_code') !!}
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
<script src="{{asset('website')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('website')}}/js/jquery.magnific-popup.min.js"></script>

@yield('js')

{!! getSetting('site_footer_code') !!}
</body>

</html>
