@extends('layouts.website_master')
@section('content')
    @include('website.includes.home_header')
<!-- Services Start -->
<section id="services" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">Provide Service With Our Tools</p>
                <h2>Business Services</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="services wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                    <div class="services-title-icon d-flex">
                        <div class="services-icon color01">
                            <i class="lni lni-brush"></i>
                        </div>
                        <h4 class="services-title">Software<br />Development</h4>
                    </div>
                    <div class="services-content">
                        <p class="text">Customized software solutions tailored to meet specific needs, developed with expertise and innovation.</p>
                        <a class="services-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="services wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">
                    <div class="services-title-icon d-flex">
                        <div class="services-icon color02">
                            <i class="lni lni-layout"></i>
                        </div>
                        <h4 class="services-title">Web<br /> Development</h4>
                    </div>
                    <div class="services-content">
                        <p class="text">Designing, creating, and maintaining websites to optimize online presence and user experience for businesses.</p>
                        <a class="services-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="services wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.5s">
                    <div class="services-title-icon d-flex">
                        <div class="services-icon color03">
                            <i class="lni lni-bolt"></i>
                        </div>
                        <h4 class="services-title">Digital<br />Marketing</h4>
                    </div>
                    <div class="services-content">
                        <p class="text">Steady growth with innovative digital marketing strategies. Dedicated to crafting impactful brands through effective methods.</p>
                        <a class="services-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="services wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1.5s">
                    <div class="services-title-icon d-flex">
                        <div class="services-icon color04">
                            <i class="lni lni-rocket"></i>
                        </div>
                        <h4 class="services-title">Website<br />Design</h4>
                    </div>
                    <div class="services-content">
                        <p class="text">Creative, responsive, user-friendly, innovative, customizable, sleek, intuitive, modern, efficient, dynamic, visually appealing, professional, accessible, engaging, adaptive.</p>
                        <a class="services-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="services wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                    <div class="services-title-icon d-flex">
                        <div class="services-icon color05">
                            <i class="lni lni-layers"></i>
                        </div>
                        <h4 class="services-title">e-Commerce<br />Solution</h4>
                    </div>
                    <div class="services-content">
                        <p class="text">Transforming online retail with comprehensive e-commerce solutions tailored for seamless customer experiences and optimal growth.</p>
                        <a class="services-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="services wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1.5s">
                    <div class="services-title-icon d-flex">
                        <div class="services-icon color06">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <h4 class="services-title">Quick<br />Support</h4>
                    </div>
                    <div class="services-content">
                        <p class="text">Efficient and responsive support for swift resolutions and uninterrupted operations, ensuring client satisfaction and business continuity.</p>
                        <a class="services-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>
<!-- Services Ends -->
<!-- About Start -->
<section id="about" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">About Digital Agency</p>
                <h2>About Us</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                    <h4>Welcome to Techyfo: Making Technology Accessible for All</h4>
                    <p class="text">At Techyfo, we believe that technology should be inclusive and accessible to everyone, regardless of their background or expertise. Our mission is to break down barriers and empower individuals to harness the power of technology for their personal and professional endeavors.</p>
                    <div class="about-list">
                        <ul>
                            <li><i class="lni lni-arrow-right-circle"></i> Simplified Solutions</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Diverse Expertise</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Interactive Learning</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Awesome Support</li>
                        </ul>
                    </div>
                    <div class="mt-4 text-left">
                        <a class="white-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                    <img src="{{asset('website')}}/images/about1.svg" alt="about">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="mt-4 about-image text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                    <img src="{{asset('website')}}/images/about2.svg" alt="about">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">

                    <h4>Digital Marketing Solutions Tailored to Your Needs</h4>
                    <p class="text">In today's competitive landscape, establishing a strong online presence is crucial for businesses of all sizes. At Techyfo, we offer comprehensive digital marketing solutions designed to help you reach your target audience, drive engagement, and achieve your business objectives. Here's how our digital marketing services can benefit you:</p>
                    <div class="about-list">
                        <ul>
                            <li><i class="lni lni-arrow-right-circle"></i> Strategic Planning</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Search Engine Optimization (SEO)</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Content Marketing</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Social Media Management</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Paid Advertising</li>
                            <li><i class="lni lni-arrow-right-circle"></i> Analytics and Reporting</li>
                        </ul>
                    </div>
                    <div class="mt-4 text-left">
                        <a class="white-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Ends -->
<!-- Prinicng Start -->
{{--<section id="pricing" class="pricing section bg-light">--}}
{{--    <div class="container">--}}
{{--        <div class="title-block mx-auto">--}}
{{--            <div class="section_title mb-4 text-center">--}}
{{--                <p class="section_subtitle mx-auto">Pricing Plan</p>--}}
{{--                <h2>Our Pricing</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="single-pricing mt-4 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">--}}
{{--                    <div class="pricing-header text-center">--}}
{{--                        <i class="lni lni-car"></i>--}}
{{--                        <h5 class="sub-title">Starter</h5>--}}
{{--                        <span class="price">$199</span>--}}
{{--                        <p class="year">per year</p>--}}
{{--                    </div>--}}
{{--                    <div class="pricing-list mt-4">--}}
{{--                        <ul>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Carefully crafted components</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Amazing page examples</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Super friendly support team</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Awesome Support</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="mt-4 text-center">--}}
{{--                        <a class="white-btn" href="#"><i class="lni lni-arrow-right-circle"></i> Get Started</a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="single-pricing pro mt-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">--}}
{{--                    <div class="pricing-header text-center">--}}
{{--                        <i class="lni lni-ship"></i>--}}
{{--                        <h5 class="sub-title">Proffesional</h5>--}}
{{--                        <span class="price">$399</span>--}}
{{--                        <p class="year">per year</p>--}}
{{--                    </div>--}}
{{--                    <div class="pricing-list mt-4">--}}
{{--                        <ul>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Carefully crafted components</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Amazing page examples</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Super friendly support team</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Awesome Support</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="mt-4 text-center">--}}
{{--                        <a class="white-btn" href="#"><i class="lni lni-arrow-right-circle"></i> Get Started</a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="single-pricing mt-4 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.5s">--}}
{{--                    <div class="pricing-header text-center">--}}
{{--                        <i class="lni lni-plane"></i>--}}
{{--                        <h5 class="sub-title">Business</h5>--}}
{{--                        <span class="price">$799</span>--}}
{{--                        <p class="year">per year</p>--}}
{{--                    </div>--}}
{{--                    <div class="pricing-list mt-4">--}}
{{--                        <ul>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Carefully crafted components</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Amazing page examples</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Super friendly support team</li>--}}
{{--                            <li><i class="lni lni-arrow-right-circle"></i> Awesome Support</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="mt-4 text-center">--}}
{{--                        <a class="white-btn" href="#"><i class="lni lni-arrow-right-circle"></i> Get Started</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Prinicng Ends -->
<!-- Team Start -->
<section id="team" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">Our expert team</p>
                <h2>Meet The Team</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-image">
                        <img src="{{asset('website')}}/images/nurnobi.jpg" alt="Team">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="holder-name"><a href="#">Md Nurnobi Hosen</a></h5>
                        <p class="text">Sr. Software Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-image">
                        <img src="{{asset('website')}}/images/team.png" alt="Team">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="holder-name"><a href="#">Md Sajedul Islam</a></h5>
                        <p class="text">Sr. Digital Marketer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-image">
                        <img src="{{asset('website')}}/images/team.png" alt="Team">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="holder-name"><a href="#">Shihab</a></h5>
                        <p class="text">Graphics Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-image">
                        <img src="{{asset('website')}}/images/team.png" alt="Team">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="holder-name"><a href="#">Samsul Islam</a></h5>
                        <p class="text">Executive</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
            <div class="col-lg-4">
                <div class="single-testimonial wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial-review d-flex align-items-center justify-content-between">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="star">
                            <ul>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                    </div>
                    <div class="mt-4 mb-4 d-flex align-items-center">
                        <div class="author-image">
                            <img src="{{asset('website')}}/images/author-1.jpg" alt="author">
                        </div>
                        <div class="author-content ml-20">
                            <h6 class="holder-name">Jenny Deo</h6>
                            <p class="text">CEO, SpaceX</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-testimonial wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial-review d-flex align-items-center justify-content-between">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="star">
                            <ul>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                    </div>
                    <div class="mt-4 mb-4 d-flex align-items-center">
                        <div class="author-image">
                            <img src="{{asset('website')}}/images/author-2.jpg" alt="author">
                        </div>
                        <div class="author-content ml-20">
                            <h6 class="holder-name">Fajar Siddiq</h6>
                            <p class="text">COO, MakerFlix</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-testimonial wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial-review d-flex align-items-center justify-content-between">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="star">
                            <ul>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                    </div>
                    <div class="mt-4 mb-4 d-flex align-items-center">
                        <div class="author-image">
                            <img src="{{asset('website')}}/images/author-3.jpg" alt="author">
                        </div>
                        <div class="author-content ml-20">
                            <h6 class="holder-name">Marjin Otte</h6>
                            <p class="text">UX Specialist, Yoast</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-testimonial wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial-review d-flex align-items-center justify-content-between">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="star">
                            <ul>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                    </div>
                    <div class="mt-4 mb-4 d-flex align-items-center">
                        <div class="author-image">
                            <img src="{{asset('website')}}/images/author-1.jpg" alt="author">
                        </div>
                        <div class="author-content ml-20">
                            <h6 class="holder-name">David Smith</h6>
                            <p class="text">CTO, Alphabet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Ends -->
<!-- Faq's Part Start -->
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
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Frequently Asked Question One</a>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Frequently Asked Question Two</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Frequently Asked Question Three</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFore">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Frequently Asked Question Four</a>
                                </div>
                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Frequently Asked Question Five</a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
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
<!-- Faq's Ends -->
<!-- Contact Start -->
<section id="contact" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">Contact Us</p>
                <h2>Need Help? Say Hello</h2>
            </div>
        </div>

        <div class="contact-info pt-4 pb-4">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-contact-info contact-color-1">
                        <div class="contact-info-icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text"> House-119-120, Road-2, Block-CHA, <br>Mirpur-2, Dhaka</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-contact-info contact-color-2">
                        <div class="contact-info-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">info@techyfo.com</p>
                            <p class="text">support@techyfo.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-contact-info contact-color-3">
                        <div class="contact-info-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">+880 1770-634816</p>
                            <p class="text">+880 1770-634816-609</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1000ms">
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-form form-group">
                                    <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form form-group">
                                    <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input type="text" name="subject" placeholder="Subject" data-error="Subject is required." required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input type="text" name="phone" placeholder="Phone" data-error="Phone is required." required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form form-group">
                                    <textarea placeholder="Your Mesaage" name="message" data-error="Please, leave us a message." required="required"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="single-form form-group text-center">
                                    <button type="submit" class="main-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1000ms">

                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d228.14850365250697!2d90.3539961240994!3d23.80522298907458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHouse-119-120%2C%20Road-2%2C%20Block-CHA%2C%20Mirpur-2%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1710674123326!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- Contact Ends -->
<!-- Brands Start -->
<div class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                    <div class="single-logo wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                        <img src="{{asset('website')}}/images/brand-1.png" alt="brand">
                    </div>
                    <div class="single-logo wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeIn;">
                        <img src="{{asset('website')}}/images/brand-2.png" alt="brand">
                    </div>
                    <div class="single-logo wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeIn;">
                        <img src="{{asset('website')}}/images/brand-3.png" alt="brand">
                    </div>
                    <div class="single-logo wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <img src="{{asset('website')}}/images/brand-4.png" alt="brand">
                    </div>
                    <div class="single-logo wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                        <img src="{{asset('website')}}/images/brand-5.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brands Ends -->
@endsection
