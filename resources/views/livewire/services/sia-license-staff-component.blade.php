<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/12.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">SIA License Staff</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIA License Staff</li>
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
                <img src="assets/img/sia_licensed.png" width="500" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__content">
                <h4 class="service__title">SIA Licensed Staff</h4>
                <p class="service__desc">Gatun Security provides fully licensed and trained SIA staff for a wide range of security roles. Our staff are professional, reliable, and dedicated to providing the highest standards of security. We understand the importance of having a trustworthy and competent security team, and we are committed to providing the best possible service.
                </p>
                <p class="service__desc">Our SIA licensed staff are available for a variety of roles, including static guarding, mobile patrols, and event security. We can provide a single guard for a small site, or a team of guards for a large event or high-security facility. We also offer a range of other services, including key holding, alarm response, and CCTV monitoring.
                </p>
                <h5 class="service__subtitle">Our SIA Licensed Staff Services Include:</h5>
                <ul class="list-items list-unstyled mb-40">
                  <li>Static Guarding</li>
                  <li>Mobile Patrols</li>
                  <li>Event Security</li>
                  <li>Key Holding and Alarm Response</li>
                  <li>CCTV Monitoring</li>
                  <li>24/7 Availability</li>
                </ul>
              </div><!-- /.service__content -->
            </div><!-- /.service-single-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

</div>