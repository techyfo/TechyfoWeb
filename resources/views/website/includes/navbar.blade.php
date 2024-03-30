<!-- Navbar Start -->
<div class="navbar-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('website')}}/images/logo.png" alt="Techyfo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active"><a href="{{route('home')}}">home</a></li>
                            <li class="nav-item"><a href="#">Services</a></li>
                            <li class="nav-item"><a href="#">About Us</a></li>
                            <li class="nav-item"><a href="#">portfolio</a></li>
                            <li class="nav-item"><a href="#">Contact Us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="404.html">404</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-btn d-none d-sm-inline-block">
                        <ul>
                            <li><a class="solid" href="#"><i class="lni lni-arrow-right-circle"></i> Call US</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- navbar -->
            </div>
        </div>
    </div> <!-- container -->
</div>
<!-- Navbar Ends -->
