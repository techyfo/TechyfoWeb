<!-- Navbar Start -->
<div class="navbar-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('uploads/'.getSetting('site_logo'))}}" alt="{{getSetting('site_title')}}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item @if(request()->routeIs('home')) active @endif"><a href="{{route('home')}}">home</a></li>
                            <li class="nav-item dropdown @if(request()->routeIs('service')) active @endif"">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Services
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @foreach(getServices(10, null) as $service)
                                    <a class="dropdown-item" href="{{route('service',['slug'=>$service->slug])}}">{{ strip_tags($service->name) }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item @if(request()->routeIs('about')) active @endif"><a href="{{route('about')}}">About</a></li>
                            <li class="nav-item @if(request()->routeIs('contact')) active @endif"><a href="{{route('contact')}}">Contact Us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Company
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('team')}}">Team</a>
                                    <a class="dropdown-item" href="{{route('portfolios')}}">Portfolio</a>
                                    <a class="dropdown-item" href="#">Case Studies</a>
                                    <a class="dropdown-item" href="{{route('clients')}}">Our Clients</a>
                                    <a class="dropdown-item" href="{{route('blog')}}">Blog</a>

                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="navbar-btn d-none d-sm-inline-block">
                        <ul>
                            <li><a class="solid" href="{{route('contact')}}"><i class="lni lni-arrow-right-circle"></i> Get A Quote</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- navbar -->
            </div>
        </div>
    </div> <!-- container -->
</div>
<!-- Navbar Ends -->
