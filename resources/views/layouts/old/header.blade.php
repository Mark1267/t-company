    <!--header section start-->
    <header id="header" class="header-main">
      <!--main header menu start-->
      <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
          <div class="container">
              <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                  <!--logo start-->
                  <a class="navbar-brand pt-0 bg-white rounded" href="{{ route('home') }}">
                    <img src="{{ asset(config('settings.site.logo.full')) }}" alt="logo" width="160" class="img-fluid" />
                  </a>
                  <!--logo end-->

                  <!--responsive toggle button start-->
                  <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                      <span id="hamburgerTrigger">
                        <span class="ti-menu"></span>
                      </span>
                  </button>
                  <!--responsive toggle button end-->

                  <!--main menu start-->
                  <div id="navBar" class="collapse navbar-collapse">
                      <ul class="navbar-nav ml-auto main-navbar-nav">
                          <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('home') }}">HOME</a>
                          </li>
                          <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('about') }}">ABOUT US</a>
                          </li>
                          <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('services') }}">SERVICES</a>
                          </li>
                            <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('teams') }}">TEAMS</a>
                          </li>
                          
                          <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('register') }}">SIGN UP</a>
                          </li>
                          <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('login') }}">LOGIN</a>
                          </li>
                                                      
                          <li class="nav-item custom-nav-item">
                              <a class="nav-link custom-nav-link" href="{{ route('contact') }}">CONTACT</a>
                          </li>
                          
                          <!--about end-->

                          <!--button start-->
                          <li class="nav-item header-nav-last-item d-flex align-items-center">
                              <a class="btn btn-brand-03 animated-btn" href="{{ route('plans') }}" target="_blank">
                                  OUR PLANS
                              </a>
                          </li>
                          <!--button end-->
                      </ul>
                  </div>
                  <!--main menu end-->
              </nav>
          </div>
      </div>
      <!--main header menu end-->
  </header>
  <!--header section end-->