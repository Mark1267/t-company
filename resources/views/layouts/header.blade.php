<!-- ==================== Start Navbar ==================== -->
<nav class="navbar navbar-expand-lg static">
    <div class="container-xl o-hidden box-dark">

        <!-- Logo -->
        <a class="logo icon-img-100" href="#">
            <img src="{{ asset(config('main.site.logo.inverted.full')) }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <span class="rolling-text">Home</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">About Us</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('services') }}">Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('plans') }}">Pricing</a></li>
                        <li><a class="dropdown-item" href="{{ route('teams') }}">Our Team</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('plans') }}">
                        <span class="rolling-text">Pricing</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#market">
                        <span class="rolling-text">Our Market Place</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.all') }}">
                        <span class="rolling-text">Blog</span>
                    </a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Pages</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="page-about.html">About Us</a></li>
                        <li><a class="dropdown-item" href="page-services.html">Services</a></li>
                        <li><a class="dropdown-item" href="page-team.html">Our Team</a></li>
                        <li><a class="dropdown-item" href="page-pricing.html">Pricing</a></li>
                        <li><a class="dropdown-item" href="page-case-study.html">Case Study</a></li>
                        <li><a class="dropdown-item" href="page-case-details.html">Case Details</a></li>
                        <li><a class="dropdown-item" href="page-contact.html">Contact Us</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Projects</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="portfolio-carousel.html">Portfolio Carousel</a>
                        <a class="dropdown-item" href="portfolio-creative.html">Portfolio Creative</a>
                        <a class="dropdown-item" href="portfolio-grid.html">Portfolio Grid</a>
                        <a class="dropdown-item" href="portfolio-tabs.html">Portfolio Tabs</a>
                        <a class="dropdown-item" href="portfolio-details1.html">Project Details 1</a>
                        <a class="dropdown-item" href="portfolio-details2.html">Project Details 2</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Blogs</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="page-blogs.html">Blog Standerd</a>
                        <a class="dropdown-item" href="page-blogs-sidebar.html">Blog Sidebar</a>
                        <a class="dropdown-item" href="page-blog-details.html">Blog Details</a>
                    </div>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Clients</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-contact.html">
                        <span class="rolling-text">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="contact-button">
            <a href="page-contact.html" class="d-flex align-items-center">
                <span class="pe-7s-call mr-15"></span>
                <span class="text">{{ config('settings.site.phone')[0] }}</span>
            </a>
        </div>
    </div>
</nav>
<!-- ==================== End Navbar ==================== -->
<!-- ==================== Start Topbar ==================== -->
<div class="nav-search md-hide pt-15 pb-15">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-7">
                <div class="text d-flex align-items-center">
                    <div>
                        <div class="icon-img-20 mr-15">
                            <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
                        </div>
                    </div>
                    <div>
                        <p class="fz-18">We Are Eco-Friendly Investment Company.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 offset-lg-1">
                <div class="search-box">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Search Here">
                        <button>
                            <span class="icon pe-7s-search"></span>
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- ==================== End Topbar ==================== -->