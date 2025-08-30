<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Concierge</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Concierge</li>
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
                <img src="assets/img/concierge.png" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__content">
                <h4 class="service__title">Professional Concierge Services</h4>
                <p class="service__desc">Gatun Security provides professional concierge services to enhance the security and customer experience of your building. Our concierge staff are highly trained, courteous, and professional, providing a welcoming and secure presence for your residents, employees, and visitors. We understand the importance of creating a positive first impression, and our team is dedicated to providing exceptional service.
                </p>
                <p class="service__desc">Our concierge services are tailored to meet the specific needs of your building. Whether you need front desk reception, access control, or mail and package handling, our team will provide a seamless and efficient service. We also offer 24/7 concierge services to ensure that your building is always secure and well-managed.
                </p>
                <h5 class="service__subtitle">Our Concierge Services Include:</h5>
                <ul class="list-items list-unstyled mb-40">
                  <li>Front Desk Reception and Customer Service</li>
                  <li>Access Control and Visitor Management</li>
                  <li>Mail and Package Handling</li>
                  <li>Building Patrols and Security Checks</li>
                  <li>Emergency Response and Evacuation Procedures</li>
                  <li>24/7 On-Site Presence</li>
                </ul>
              </div><!-- /.service__content -->
            </div><!-- /.service-single-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

</div>