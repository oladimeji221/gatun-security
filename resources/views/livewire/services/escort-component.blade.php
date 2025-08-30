<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Escort</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Escort</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="service-single-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar-layout2">
              <div class="widget widget-services">
                <h5 class="widget__title">Our Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('retail-security') }}">Retail Security</a></li>
                    <li><a href="{{ route('concierge') }}">Concierge</a></li>
                    <li><a href="{{ route('key-holding') }}">Key Holding</a></li>
                    <li><a href="{{ route('sia-license-staff') }}">SIA License Staff</a></li>
                    <li><a href="{{ route('rapid-alarm-response') }}">Rapid Alarm Response</a></li>
                    <li><a href="{{ route('sia-door-supervisors') }}">SIA Door Supervisors</a></li>
                    <li><a href="{{ route('24-hour-mobile-guarding') }}">24-Hour Mobile Guarding</a></li>
                    <li><a href="{{ route('24-hour-call-out') }}">24-Hour Call Out</a></li>
                    <li><a href="{{ route('cctv-installation-monitoring') }}">CCTV Installation and Monitoring</a></li>
                    <li><a href="{{ route('site-events-property-security') }}">Site, Events & Property Security</a></li>
                    <li><a href="{{ route('security-dogs') }}">Security Dogs</a></li>
                    <li><a href="{{ route('escort') }}">Escort</a></li>
                    <li><a href="{{ route('bouncers') }}">Bouncers</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="service-single-item">
              <div class="service__img text-center">
                <img src="assets/img/bouncers.png" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__content">
                <h4 class="service__title">Professional Escort Services</h4>
                <p class="service__desc">Gatun Security provides professional escort services to ensure your safety and security during transit. Our highly trained and experienced security personnel will accompany you to your destination, providing a visible deterrent to potential threats and ensuring your peace of mind. We understand the importance of personal security, and our team is dedicated to providing a discreet and professional service.
                </p>
                <p class="service__desc">Our escort services are tailored to meet your specific needs. Whether you need a single escort for a one-time event or a team of escorts for ongoing protection, we will provide a solution that meets your requirements. We also offer armed and unarmed escort services, depending on your security needs.
                </p>
                <h5 class="service__subtitle">Our Escort Services Include:</h5>
                <ul class="list-items list-unstyled mb-40">
                  <li>Personal and Executive Protection</li>
                  <li>Asset and High-Value Transport</li>
                  <li>Event and Venue Security</li>
                  <li>Secure Transportation</li>
                  <li>Armed and Unarmed Escorts</li>
                  <li>24/7 Availability</li>
                </ul>
              </div><!-- /.service__content -->
            </div><!-- /.service-single-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

</div>