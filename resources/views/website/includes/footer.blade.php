<!-- Footer Start -->
<footer id="footer" class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="footer-logo text-left">
                    <a href="{{route('home')}}"><img src="{{asset('uploads/'.getSetting('site_footer_logo'))}}" alt="{{getSetting('site_title')}}"></a>
                </div>

                <div class="footer-support text-left mt-4">
                    {!! getSetting('site_address') !!}
                </div>

                <div class="footer-support text-left mt-4">
                    <span>{{getSetting('site_support_phone')}}</span>
                    <span>{{getSetting('site_support_email')}}</span>
                </div>


            </div>

            <div class="col-lg-4 col-md-12">
                <div class="footer_widget">

                    <h3 class="footer_title">
                        Links
                    </h3>

                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{route('home')}}"> Home</a></li>
                            <li><a href="{{route('team')}}"> Team</a></li>
                            <li><a href="{{route('about')}}"> About us</a></li>
                            <li><a href="{{route('portfolios')}}"> Portfolio</a></li>
                            <li><a href="{{route('contact')}}"> Contact</a></li>
                            <li><a href="{{route('blog')}}"> Blog</a></li>
                            <li><a href="{{route('page_or_post',['slug'=>'privacy-policy'])}}"> Privacy Policy</a></li>
                            <li><a href="{{route('page_or_post',['slug'=>'terms'])}}"> Terms & Conditions</a></li>


                        </ul>
                    </div>
                </div>

            </div>


            <div class="col-lg-4 col-md-12">
                <div class="footer_widget">

                    <h3 class="footer_title">
                        Newsletter
                    </h3>
                    <p>Send us a newsletter to get update</p>
                    <livewire:newsletter-subscription />
                    <ul class="social text-left mt-4">
                        <li><a href="{{getSetting('site_facebook')}}"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="{{getSetting('site_twitter')}}"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="{{getSetting('site_instagram')}}"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="{{getSetting('site_linkedin')}}"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center mt-5">
        <p class="text">2023 - {{date('Y')}} © All Right Reserved by <a href="{{route('home')}}">{{getSetting('site_title')}}</a> {!! getSetting('site_copyright') !!}</p>
    </div>
    <div id="particles-2"></div>
</footer>
<!-- Footer Ends -->
