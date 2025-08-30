<header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="assets/img/logo.png" class="logo-light" alt="logo" width="80" height="80">
            <img src="assets/img/logo.png" class="logo-dark" alt="logo" width="80" height="80">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav mx-auto">
              <li class="nav__item">
                <a href="{{ route('home') }}" class="nav__item-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{ route('about') }}" class="nav__item-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{ route('our-location') }}" class="nav__item-link {{ request()->routeIs('our-location') ? 'active' : '' }}">Our Locations</a>
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="{{ route('services') }}" class="dropdown-toggle nav__item-link {{ request()->routeIs('services', 'retail-security', 'concierge', 'key-holding', 'sia-license-staff', 'rapid-alarm-response', 'sia-door-supervisors', '24-hour-mobile-guarding', '24-hour-call-out', 'cctv-installation-monitoring', 'site-events-property-security', 'security-dogs', 'escort', 'bouncers') ? 'active' : '' }}">Services</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="{{ route('services') }}" class="nav__item-link dropdown-menu-title">Services</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('retail-security') }}">Retail Security</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('concierge') }}">Concierge</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('key-holding') }}">Key Holding</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('sia-license-staff') }}">SIA License Staff</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('rapid-alarm-response') }}">Rapid Alarm Response</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('sia-door-supervisors') }}">SIA Door Supervisors</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('24-hour-mobile-guarding') }}">24-Hour Mobile Guarding</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('24-hour-call-out') }}">24-Hour Call Out</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('cctv-installation-monitoring') }}">CCTV Installation and Monitoring</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('site-events-property-security') }}">Site, Events & Property Security</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('security-dogs') }}">Security Dogs</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('escort') }}">Escort</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('bouncers') }}">Bouncers</a></li>
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{ route('contact') }}" class="nav__item-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
            <li>
              <a href="{{ route('get-quote') }}" class="btn btn__white action__btn action__btn-contact">Get A Quote</a>
            </li>
            <li>
              <div class="phone__number">
                <div class="phone__icon">
                  <i class="icon-phone"></i>
                </div>
                <div>
                  <a class="phone__link d-block" href="tel:2348137916721">+234 813 791 6721</a>
                  <a class="email__link d-block" href="mailto:info@gatunsecurity.com">info@gatunsecurity.com</a>
                </div>
              </div>
            </li>
          </ul>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header>

    <!-- ============================
    Slider
============================== -->
<section class="slider">
  <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
    data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
    <div class="slide-item bg-overlay align-v-h">
      <div class="bg-img"><img src="assets/images/sliders/1.jpg" alt="slide img"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="slide__content">
              <span class="slide__subtitle">Unwavering Protection for Your Enterprise</span>
              <h2 class="slide__title">Elite Corporate Security Solutions</h2>
              <p class="slide__desc">We provide comprehensive security for commercial clients, from access control to threat assessment, safeguarding your assets and personnel with industry-leading expertise.
              </p>
              <div class="d-flex flex-wrap align-items-center">
                <a href="{{ route('services') }}" class="btn btn__primary btn__xl mr-30">
                  <span>Our Corporate Services</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="btn btn__white btn__xl">
                  Request a Consultation
                </a>
              </div>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-7 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
            <div class="cta-banner">
              <h4 class="cta__title">Specialized Retail Security</h4>
              <img src="assets/img/retail_security.png" alt="cta__img" class="cta__img">
              <p class="cta__desc">Protect your inventory and create a safe shopping environment with our tailored retail security solutions.
              </p>
              <a href="{{ route('retail-security') }}" class="btn btn__primary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Secure Your Store</span>
              </a>
            </div>
          </div><!-- /.col-xl-2 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->

    <div class="slide-item bg-overlay align-v-h">
      <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="slide__content">
              <span class="slide__subtitle">Discreet & Professional Personal Security</span>
              <h2 class="slide__title">Close Protection for Peace of Mind</h2>
              <p class="slide__desc">Our highly-trained close protection officers offer discreet, professional security for individuals and families, ensuring your safety in any situation, anywhere in the world.
              </p>
              <div class="d-flex flex-wrap align-items-center">
                <a href="{{ route('escort') }}" class="btn btn__primary btn__xl mr-30">
                  <span>Meet Our Specialists</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="{{ route('about') }}" class="btn btn__white btn__xl">
                  Learn About Us
                </a>
              </div>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-7 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
            <div class="cta-banner">
              <h4 class="cta__title">Secure Escort Services</h4>
              <img src="assets/img/two_guard.jpg" alt="cta__img" class="cta__img">
              <p class="cta__desc">Travel with confidence knowing our expert escort teams are ensuring your safety and privacy.
              </p>
              <a href="{{ route('escort') }}" class="btn btn__primary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Arrange an Escort</span>
              </a>
            </div>
          </div><!-- /.col-xl-2 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->

    <div class="slide-item bg-overlay align-v-h">
      <div class="bg-img"><img src="assets/images/sliders/3.jpg" alt="slide img"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="slide__content">
              <span class="slide__subtitle">Seamless Security for Any Occasion</span>
              <h2 class="slide__title">Expert Event & Venue Management</h2>
              <p class="slide__desc">From large-scale concerts to private functions, our SIA-licensed door supervisors and event staff manage crowds and secure perimeters, ensuring a safe and successful event.
              </p>
              <div class="d-flex flex-wrap align-items-center">
                <a href="{{ route('site-events-property-security') }}" class="btn btn__primary btn__xl mr-30">
                  <span>Secure Your Event</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="{{ route('get-quote') }}" class="btn btn__white btn__xl">
                  Get a Quote
                </a>
              </div>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-7 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
            <div class="cta-banner">
              <h4 class="cta__title">Professional Bouncers</h4>
              <img src="assets/img/bouncers.jpg" alt="cta__img" class="cta__img">
              <p class="cta__desc">Our professional bouncers ensure a safe and orderly environment for your venue or event.
              </p>
              <a href="{{ route('bouncers') }}" class="btn btn__primary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Book Our Team</span>
              </a>
            </div>
          </div><!-- /.col-xl-2 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->

    <div class="slide-item bg-overlay align-v-h">
      <div class="bg-img"><img src="assets/images/sliders/4.jpg" alt="slide img"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="slide__content">
              <span class="slide__subtitle">Cutting-Edge Technology & Elite Training</span>
              <h2 class="slide__title">Advanced Security, Intelligently Deployed</h2>
              <p class="slide__desc">We combine state-of-the-art technology like CCTV monitoring with elite K9 units to provide an unmatched level of detection and response for high-security needs.
              </p>
              <div class="d-flex flex-wrap align-items-center">
                <a href="{{ route('cctv-installation-monitoring') }}" class="btn btn__primary btn__xl mr-30">
                  <span>Explore Our Tech</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="{{ route('security-dogs') }}" class="btn btn__white btn__xl">
                  Learn About K9 Units
                </a>
              </div>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-7 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
            <div class="cta-banner">
              <h4 class="cta__title">K9 Detection Services</h4>
              <img src="assets/img/security_guards.png" alt="cta__img" class="cta__img">
              <p class="cta__desc">Our highly trained K9 units provide superior detection capabilities for narcotics, explosives, and more.
              </p>
              <a href="{{ route('security-dogs') }}" class="btn btn__primary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Deploy a K9 Team</span>
              </a>
            </div>
          </div><!-- /.col-xl-2 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->

  </div><!-- /.carousel -->
</section><!-- /.slider -->