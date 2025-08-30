<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Our Services</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 pt-130">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading-layout2 text-center mb-50">
              <h2 class="heading__subtitle">Comprehensive Security Solutions</h2>
              <h3 class="heading__title">Your Safety is Our Priority</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- service item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="assets/images/services/1.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Retail Security</h4>
                <p class="service__desc">Our retail security services are designed to protect your assets, prevent loss, and ensure a safe shopping environment for your customers.
                </p>
                <a href="{{ route('retail-security') }}" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="assets/images/services/2.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Concierge Services</h4>
                <p class="service__desc">Our concierge team provides a professional and welcoming presence, ensuring the security and smooth operation of your front-of-house.
                </p>
                <a href="{{ route('concierge') }}" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="assets/images/services/3.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Key Holding</h4>
                <p class="service__desc">Our key holding services provide a secure and rapid response to alarm activations, ensuring your property is always protected.
                </p>
                <a href="{{ route('key-holding') }}" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="assets/images/services/4.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">SIA Licensed Staff</h4>
                <p class="service__desc">We provide fully licensed and trained SIA staff for a wide range of security roles, ensuring professionalism and compliance.
                </p>
                <a href="{{ route('sia-license-staff') }}" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="assets/images/services/5.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Rapid Alarm Response</h4>
                <p class="service__desc">Our rapid alarm response team is on standby 24/7 to respond to any security alerts, minimizing potential threats.
                </p>
                <a href="{{ route('rapid-alarm-response') }}" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="assets/images/services/6.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">SIA Door Supervisors</h4>
                <p class="service__desc">Our SIA licensed door supervisors are trained to manage access control and ensure the safety of your venue or event.
                </p>
                <a href="{{ route('sia-door-supervisors') }}" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

</div>