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