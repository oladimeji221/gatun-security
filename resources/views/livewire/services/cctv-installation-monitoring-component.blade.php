<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">CCTV Installation & Monitoring</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">CCTV Installation & Monitoring</li>
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
                <img src="assets/img/cctv_monitoring.png" width="500" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__content">
                <h4 class="service__title">Advanced CCTV Installation & Monitoring</h4>
                <p class="service__desc">Gatun Security offers state-of-the-art CCTV installation and monitoring services to protect your property. Our expert technicians will design and install a custom CCTV system tailored to your specific needs, ensuring comprehensive coverage and optimal performance. We use the latest technology to provide high-quality video surveillance that you can rely on.
                </p>
                <p class="service__desc">Our 24/7 monitoring services ensure that your property is always being watched, even when you're not there. In the event of an incident, our team will respond quickly and efficiently, providing you with the peace of mind that your property is secure. We also offer remote access to your CCTV system, so you can view your cameras from anywhere in the world.
                </p>
                <h5 class="service__subtitle">Our CCTV Services Include:</h5>
                <ul class="list-items list-unstyled mb-40">
                  <li>Custom CCTV System Design and Installation</li>
                  <li>24/7 Professional Monitoring</li>
                  <li>Remote Access and Mobile Viewing</li>
                  <li>High-Definition and IP Cameras</li>
                  <li>Maintenance and Support</li>
                  <li>Integration with Existing Security Systems</li>
                </ul>
              </div><!-- /.service__content -->
            </div><!-- /.service-single-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

</div>