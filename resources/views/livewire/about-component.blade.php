<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">About Us</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="about__img mb-40">
              <img src="assets/img/trusted.jpg" alt="about">
              <div class="cta-banner">
                <div class="cta__icon">
                  <i class="icon-cctv-camera3"></i>
                </div>
                <h4 class="cta__title">24/7 Monitoring & Support</h4>
                <p class="cta__desc">Our vigilant team provides round-the-clock monitoring and support, ensuring your safety at all times.
                </p>
              </div><!-- /.cta-banner -->
            </div><!-- /.about-img -->
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="heading-layout2 mb-40">
              <h2 class="heading__subtitle">Your Trusted Security Partner</h2>
              <h3 class="heading__title">Providing High-Standard, Cost-Effective Security Solutions</h3>
              <p class="heading__desc">At Gatun Security, our mission is to provide top-tier security services tailored to the unique needs of our clients. We are dedicated to supporting you with the most effective and economical security strategies, ensuring your peace of mind.
              </p>
              <p class="heading__desc">We specialize in a wide range of security services, including Close Protection, Door Supervision, and advanced CCTV solutions. Our team is committed to excellence, offering professional and confidential services that align with your organization's rules of engagement.
              </p>
            </div><!-- /heading -->
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="feature-item feature-item-layout2">
                  <div class="feature__icon">
                    <i class="icon-cctv-camera-2"></i>
                  </div>
                  <h4 class="feature__title">Expert Team</h4>
                  <p class="feature__desc">Our personnel are trained to the highest standards in security techniques and close protection skills.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="feature-item feature-item-layout2">
                  <div class="feature__icon">
                    <i class="icon-shield"></i>
                  </div>
                  <h4 class="feature__title">Tailored Services</h4>
                  <p class="feature__desc">We customize our services to meet your individual requirements, delivering superior security solutions.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="about__text-handler">
              <p>We are actively involved in the security industry, providing professional services such as gate monitoring, internal patrol guards, and specialized security like CCTV installation and club bouncers. Our highly trained team can provide a fully comprehensive package to suit your needs and the high standards that clients demand.
              </p>
            </div>
            <a href="{{ route('services') }}" class="btn btn__primary btn__xl mt-20">
              <i class="icon-arrow-right"></i>
              <span>Our Services</span>
            </a>
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- =========================
      Banners layout 1
      =========================== -->
    <section class="banners-layout1 pt-0 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="banner-item">
              <div class="banner__img d-flex justify-content-center">
                <a href="#"><img src="assets/img/bouncers.png"  height="400" alt="banner"></a>
              </div><!-- /.banner__img -->
              <div class="banner__content ">
                <h4 class="banner__title text-center">Close Protection</h4>
                <p class="banner__desc">Our professional Close Protection services minimize risks and ensure your safety in any environment.
                </p>
                <a href="{{ route('escort') }}" class="btn btn__white btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.banner__content -->
            </div><!-- /.banner-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="banner-item">
              <div class="banner__img d-flex justify-content-center">
                <a href="#"><img src="assets/img/sia_licensed.png"  height="400" alt="banner"></a>
              </div><!-- /.banner__img -->
              <div class="banner__content">
                <h4 class="banner__title text-center">Door Supervision</h4>
                <p class="banner__desc">Our trained Door Supervisors ensure the security and safety of your premises and personnel.
                </p>
                <a href="{{ route('sia-door-supervisors') }}" class="btn btn__white btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.banner__content -->
            </div><!-- /.banner-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banners layout 1 -->

    <!-- ==========================
      Work Process
    ============================ -->
    <section class="work-process bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading-layout2 text-center mb-50">
              <h2 class="heading__subtitle">How We Work</h2>
              <h3 class="heading__title">Our Process</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row work-process-wrapper">
          <!-- process item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="process-item">
              <div class="process__icon">
                <i class="icon-search-2"></i>
              </div><!-- /.process__icon -->
              <h4 class="process__title">Assessment</h4>
              <p class="process__desc">We begin with a thorough assessment of your security needs to develop a tailored strategy.
              </p>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-4 -->
          <!-- process item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="process-item">
              <div class="process__icon">
                <i class="icon-programming"></i>
              </div><!-- /.process__icon -->
              <h4 class="process__title">Implementation</h4>
              <p class="process__desc">Our expert team implements the security plan with precision and professionalism.
              </p>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-4 -->
          <!-- process item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="process-item">
              <div class="process__icon">
                <i class="icon-cctv-camera-2"></i>
              </div><!-- /.process__icon -->
              <h4 class="process__title">Monitoring</h4>
              <p class="process__desc">We provide continuous monitoring to ensure ongoing safety and rapid response.
              </p>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <!-- ======================
      Testimonials
    ========================= -->
    <section class="testimonials-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading-layout2 text-center mb-50">
              <h2 class="heading__subtitle">Client Testimonials</h2>
              <h3 class="heading__title">What Our Clients Say</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}]}'>
              <!-- Testimonial #1 -->
              <div class="testimonial-item">
                <div class="testimonial__meta">
                  <!-- <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div> -->
                  <div>
                    <h4 class="testimonial__meta-title">Adesanya John</h4>
                    <p class="testimonial__meta-desc">Business Owner</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__body">
                  <p class="testimonial__desc">Gatun Security provided exceptional service. Their team is professional, reliable, and highly skilled. I feel much safer knowing they are protecting my business.
                  </p>
                </div><!-- /.testimonial-body -->
              </div><!-- /.testimonial-item -->
              <!-- Testimonial #2 -->
              <div class="testimonial-item">
                <div class="testimonial__meta">
                  <!-- <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div> -->
                  <div>
                    <h4 class="testimonial__meta-title">Oluwatosin Okeola</h4>
                    <p class="testimonial__meta-desc">Homeowner</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__body">
                  <p class="testimonial__desc">The peace of mind Gatun Security has given me is priceless. Their team is always responsive and professional. I highly recommend their services.
                  </p>
                </div><!-- /.testimonial-body -->
              </div><!-- /.testimonial-item -->
              <!-- Testimonial #3 -->
              <div class="testimonial-item">
                <div class="testimonial__meta">
                  <!-- <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div> -->
                  <div>
                    <h4 class="testimonial__meta-title">Banjo joseph</h4>
                    <p class="testimonial__meta-desc">Event Manager</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__body">
                  <p class="testimonial__desc">Gatun Security is our go-to for event security. They are thorough, professional, and handle every situation with expertise. We couldn't be happier with their service.
                  </p>
                </div><!-- /.testimonial-body -->
              </div><!-- /.testimonial-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.testimonials -->

</div>