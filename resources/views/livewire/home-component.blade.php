<div>


        
@include('components.layouts.homeheader')

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pt-130 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="heading-layout2">
              <h3 class="heading__title mb-50">Your Trusted Partner for Comprehensive Security Solutions</h3>
            </div><!-- /heading -->
            <div class="about__Text">
              <p class="heading__desc mb-20">In today's world, security is paramount for both businesses and individuals. Gatun Security Services Limited stands as your unwavering partner, dedicated to minimizing risks from sophisticated criminal elements. We offer a comprehensive suite of professional security services, meticulously designed to ensure a safer and more profitable future for you.</p>
              <p class="heading__desc mb-40">Our expertise spans from professional Close Protection and vigilant Door Supervision to advanced CCTV Installation and Monitoring. We provide both high and low-profile security solutions, operational at short notice across Nigeria, and extending our reach to international locations like Manchester and Dublin. All our personnel, both male and female, are rigorously trained to the highest industry standards in security techniques and close protection skills, guaranteeing unparalleled service quality.</p>
              <strong>Our Tailored Services Include:</strong>
              <div class="row mt-20">
                <div class="col-sm-12 col-md-6">
                  <ul class="list-items-layout1 list-unstyled">
                    <li class="list__item">Close Protection</li>
                    <li class="list__item">Door Supervision</li>
                    <li class="list__item">Gate Monitoring/Access Control</li>
                    <li class="list__item">Internal Patrol Guards</li>
                  </ul>
                </div><!-- /.col-md-6 -->
                <div class="col-sm-12 col-md-6">
                  <ul class="list-items-layout1 list-unstyled">
                    <li class="list__item">CCTV Installation & Monitoring</li>
                    <li class="list__item">Club Bouncers</li>
                    <li class="list__item">Security Dogs</li>
                    <li class="list__item">24/7 Mobile Guarding & Call Out</li>
                  </ul>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->
              <div class="d-flex align-items-center flex-wrap mt-10 mb-40">
                <a href="{{ route('services') }}" class="btn btn__primary btn__xl my-1 mr-30">
                  <span>Explore Our Services</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="btn btn__secondary btn__xl my-1"> Contact Us</a>
              </div>
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="video-banner-layout2 mb-50">
              <img src="assets/img/trusted.jpg" alt="about">
              <!-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__title color-white">Watch Our Intro!</span>
              </a> -->
            </div><!-- /.video-banner -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ========================
      Features layout 2
    ========================== -->
    <section class="features-layout2 bg-overlay bg-overlay-gradient pt-130">
      <div class="bg-img"><img src="assets/images/banners/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2 heading-light mb-140">
              <h3 class="heading__title">Protect What Matters Most with Gatun Security!</h3>
              <p class="heading__desc">At Gatun Security, we understand that your peace of mind is invaluable. Our objective is to support you in providing the best and most cost-effective security strategy, tailored to your individual requirements. We are committed to delivering a fully comprehensive package that meets your needs and the high standards you demand.</p>
            </div><!-- /heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 5, "arrows": true, "dots": false, "autoplay": false,  "infinite": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <!-- feature item #1 -->
              <div class="feature-item">
                <h3 class="feature__number">01</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Professional Close Protection</h4>
                  <a href="{{ route('escort') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #2 -->
              <div class="feature-item">
                <h3 class="feature__number">02</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Expert Door Supervision</h4>
                  <a href="{{ route('sia-door-supervisors') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #3 -->
              <div class="feature-item">
                <h3 class="feature__number">03</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Advanced CCTV Monitoring</h4>
                  <a href="{{ route('cctv-installation-monitoring') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #4 -->
              <div class="feature-item">
                <h3 class="feature__number">04</h3>
                <div class="feature__body">
                  <h4 class="feature__title">24/7 Mobile Guarding</h4>
                  <a href="{{ route('24-hour-mobile-guarding') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #5 -->
              <div class="feature-item">
                <h3 class="feature__number">05</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Rapid Alarm Response</h4>
                  <a href="{{ route('rapid-alarm-response') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #6 -->
              <div class="feature-item">
                <h3 class="feature__number">06</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Specialist Security Dogs</h4>
                  <a href="{{ route('security-dogs') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
              <!-- feature item #7 -->
              <div class="feature-item">
                <h3 class="feature__number">07</h3>
                <div class="feature__body">
                  <h4 class="feature__title">Site & Event Security</h4>
                  <a href="{{ route('site-events-property-security') }}" class="btn btn__link btn__white">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Learn More</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 d-flex justify-content-end">
            <button class="btn__download d-flex align-items-center">
              <span class="text-right mx-2">
                <span class="color-body d-block">Discover our full range of services</span>
                <strong class="color-white d-block fz-15">Download Our  Profile</strong>
              </span>
              <a href="assets/files/gatun_profile.pdf"> <span class="download__icon">
                <i class="icon-download"></i>
              </span></a>
            </button>
</div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features-layout2 -->

    <section class="services-layout2 pb-0">
      <div class="container">
        <div class="row heading mb-70">
          <div class="col-12">
            <h2 class="heading__subtitle">Our Core Services</h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Proactive Security for Complete Peace of Mind</h3>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc">From corporate to personal, on-site to remote, Gatun provides a comprehensive suite of security services. We leverage highly-trained personnel and cutting-edge technology to protect your assets, ensuring your safety and profitability. Discover how our tailored solutions can fortify your world.</p>
            <div class="d-flex flex-wrap align-items-center mt-30">
              <a href="{{ route('about') }}" class="btn btn__secondary btn__xl my-1 mr-30">
                <span>Our Approach</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="{{ route('services') }}" class="btn btn__secondary btn__link my-1">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>View All Services</span>
              </a>
            </div>
          </div>
        </div>

        <div class="services-wrapper">
          <div class="row row-gutter-0">
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-shield"></i>
                  </div>
                  <h4 class="service__title">SIA Door Supervisors</h4>
                  <p class="service__desc">Our SIA-licensed professionals provide a formidable presence, ensuring secure access control and a safe environment for your venue, event, or business.</p>
                  <a href="{{ route('sia-door-supervisors') }}" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <!-- <i class="icon-cctv-camera2"></i> -->
                  </div>
                  <h4 class="service__title">CCTV & Remote Monitoring</h4>
                  <p class="service__desc">We design and install advanced CCTV systems, backed by 24/7 remote monitoring to detect and respond to threats in real-time, keeping a watchful eye when you can't.</p>
                  <a href="{{ route('cctv-installation-monitoring') }}" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-car"></i>
                  </div>
                  <h4 class="service__title">24/7 Mobile Guarding</h4>
                  <p class="service__desc">Our mobile patrol units provide a visible deterrent and rapid response, conducting regular checks and ensuring the security of your property around the clock.</p>
                  <a href="{{ route('24-hour-mobile-guarding') }}" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="service-item">
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-dog"></i>
                  </div>
                  <h4 class="service__title">K9 Security Units</h4>
                  <p class="service__desc">Highly trained security dogs and their expert handlers offer an unparalleled level of detection and deterrence for high-risk environments and large-scale events.</p>
                  <a href="{{ route('security-dogs') }}" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Read More</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="cta-layout3 bg-white d-flex flex-wrap align-items-center justify-content-between p-40">
                <div class="d-flex align-items-center">
                  <div class="cta__icon"><i class="icon-alert"></i></div>
                  <p class="cta__desc font-weight-bold my-2">Ready to enhance your security? Our experts can design a comprehensive package tailored to your exact needs and budget.
                    <a href="{{ route('contact') }}" class="text-underlined">Let's connect.</a>
                  </p>
                </div>
                <a href="{{ route('get-quote') }}" class="btn btn__secondary btn__outlined btn__xl">
                  <span>Request a Consultation</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
              
              <section class="about-layout3 bg-dark pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading-layout2 heading-light text-center mb-90">
              <h2 class="heading__subtitle">Find Peace Of Mind With Our Security Solutions </h2>
              <h3 class="heading__title">Integrated Security Solutions & Remote Monitoring 24/7</h3>
            </div></div></div><div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="about__text">
              <div class="heading-layout1 heading-light mb-50">
                <h2 class="heading__subtitle color-primary">Total Control Over Securing Your Business</h2>
                <h3 class=" heading__title mb-40">Providing The Best Practices for Industry Security Protocols & Standardizing Procedures.</h3>
                <p class="heading__desc">This has enabled us to expand our operations and gain a very good reputation within the industry. Our objective is to support the client in providing the best and most cost effective security strategy. In all operations, we offer the clients a professional and confidential service; and also works with the organization rules of engagement.</p>
              </div><ul class="list-items-layout5 list-items-light list-unstyled mb-40">
                <li class="list__item">Professional and confidential service</li>
                <li class="list__item">Works with your organization's rules of engagement</li>
                <li class="list__item">Cost-effective security strategy</li>
              </ul>
              <a href="{{ route('about')}}" class="btn btn__primary btn__primary-style2 btn__xl mb-40">
                <span>Meet Our Experts</span>
                <i class=" icon-arrow-right"></i>
              </a>
            </div>
          </div><div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="about__img">
              <img src="assets/img/total_control.png" alt="about">
              <div class="cta-banner">
                <h3 class="cta__subtitle">Protect Your Assets!</h3>
                <h4 class="cta__title">All The Essentials To Help Give You Peace Of Mind.</h4>
                <ul class="list-items-layout5 list-unstyled mb-0">
                  <li class="list__item">Professional Guarding</li>
                  <li class="list__item">Advanced Monitoring</li>
                  <li class="list__item">Rapid Response</li>
                </ul>
              </div>
            </div></div></div></div></section>
            
            <section class="about-layout4 bg-dark pt-0 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <div class="about__img">
              <img src="assets/img/cctv.png" alt="about">
              <div class="cta-banner cta-banner-primary">
                <h3 class="cta__subtitle">Just Don’t Worry.</h3>
                <h4 class="cta__title">We Take Care Of Everything For Your Business!</h4>
                <ul class="list-items-layout5 list-unstyled mb-0">
                  <li class="list__item">Customized Solutions</li>
                  <li class="list__item">24/7 Support</li>
                  <li class="list__item">Expert Consultation</li>
                </ul>
              </div>
            </div></div><div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
            <div class="about__text">
              <div class="heading-layout1 heading-light mb-60">
                <h2 class="heading__subtitle color-primary">Convenient System Access By Phone Or Tablet</h2>
                <h3 class=" heading__title mb-40">Trusted Analytics that Give Meaning To Security Data.</h3>
                <p class="heading__desc mb-30">We deploy security gadgets without extra costs where necessary, such as metal detectors and car scanners. We also make use of patrol dogs. Our security patrol team provides support for the guards on site 24/7. </p>
                <p class="heading__desc mb-30">Whatever the security situation on sites, we take charge!</p>
              </div><blockquote class="blockquote mb-0">
                <h3 class="quote__title color-white">The peace of mind I have now is so comforting, knowing when I leave home I can still check in on my husband to make sure all is well.
                </h3>
                <div class="d-flex align-items-center">
                  <div class="quote__rate mr-20">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <strong class="quote__author color-white">Oladimeji Gideon</strong>
                </div>
              </blockquote>
            </div>
          </div></div></div></section><section class="about-layout5 bg-dark pt-0 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="about__text">
              <div class="heading-layout1 heading-light mb-50">
                <h2 class="heading__subtitle color-primary">Tailored Solutions For Your Security Priorities</h2>
                <h3 class=" heading__title mb-40">Solutions That Reduce Cost & Increase Business Efficiency.</h3>
                <p class="heading__desc">Our highly trained team can provide a fully comprehensive package to suit your needs and the high standards that clients demand. This has enabled us to expand our operations and gain a very good reputation within the industry.</p>
              </div><div class="widget-categories p-0 mb-60">
                <div class="widget-content">
                  <ul class="list-unstyled d-flex flex-wrap mb-0">
                    <li><a>Close Protection</a></li>
                    <li><a>Door Supervision</a></li>
                    <li><a>Gate Monitoring/Access</a></li>
                    <li><a>Internal Patrol Guards</a></li>
                    <li><a>CCTV Installation & Monitoring</a></li>
                    <li><a>Club Bouncers</a></li>
                  </ul>
                </div></div><p class="font-weight-bold color-white">
                Our team can also provide security integration services for highly complex facilities and offer preventative maintenance plans.
                <a href="{{ route('contact')}}" class="text-underlined color-primary">Contact Us Now!</a>
              </p>
            </div>
          </div><div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="video-banner-layout3 mb-50">
              <img src="assets/img/bouncers.png" alt="about">

              <a class="video__btn video__btn-white popup-video" href="assets/files/gatun.mp4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div> 
          </div></div></div></section>
  
    <!-- ======================
      Portfolio
    ========================= -->
    <section class="portfolio-carousel portfolio-layout2">
      <div class="container">
        <div class="row heading mb-20">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Explore Our Services</h3>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc mb-30">Gatun Security offers a comprehensive range of services to meet all your security needs. From professional guarding to advanced technology solutions, we are committed to providing the highest level of protection for your business and assets.</p>
            <p class="heading__desc mb-30">Our team of experts will work with you to create a customized security plan that fits your specific requirements and budget. We are dedicated to delivering effective and reliable security solutions that you can trust.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "autoplay": false, "arrows": true, "dots": true, "responsive": [{"breakpoint": 1300, "settings": {"slidesToShow": 3,"slidesToScroll": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                <!-- portfolio Item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="assets/img/retail_security.png" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__cat">
                      <a href="{{ route('retail-security') }}">Security</a><a href="{{ route('retail-security') }}">Guarding</a>
                    </div><!-- /.portfolio-cat -->
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="{{ route('retail-security') }}">Retail Security</a>
                      </h4>
                      <p class="portfolio__desc">Our retail security services are designed to protect your assets, prevent loss, and ensure a safe shopping environment for your customers.
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('retail-security') }}" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                  <a href="{{ route('retail-security') }}" class="portfolio__readmore"> <i
                      class="icon-arrow-right"></i></a>
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #2 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="assets/img/concierge.png" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__cat">
                      <a href="{{ route('concierge') }}">Security</a><a href="{{ route('concierge') }}">Concierge</a>
                    </div><!-- /.portfolio-cat -->
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="{{ route('concierge') }}">Concierge Services</a>
                      </h4>
                      <p class="portfolio__desc">Our concierge team provides a professional and welcoming presence, ensuring the security and smooth operation of your front-of-house.
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('concierge') }}" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                  <a href="{{ route('concierge') }}" class="portfolio__readmore"> <i
                      class="icon-arrow-right"></i></a>
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #3 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="assets/img/key_holding.png" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__cat">
                      <a href="{{ route('key-holding') }}">Security</a><a href="{{ route('key-holding') }}">Key Holding</a>
                    </div><!-- /.portfolio-cat -->
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="{{ route('key-holding') }}">Key Holding</a>
                      </h4>
                      <p class="portfolio__desc">Our key holding services provide a secure and rapid response to alarm activations, ensuring your property is always protected.
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('key-holding') }}" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                  <a href="{{ route('key-holding') }}" class="portfolio__readmore"> <i
                      class="icon-arrow-right"></i></a>
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #4 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="assets/img/sia_licensed.png" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__cat">
                      <a href="{{ route('sia-license-staff') }}">Security</a><a href="{{ route('sia-license-staff') }}">SIA</a>
                    </div><!-- /.portfolio-cat -->
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="{{ route('sia-license-staff') }}">SIA Licensed Staff</a>
                      </h4>
                      <p class="portfolio__desc">We provide fully licensed and trained SIA staff for a wide range of security roles, ensuring professionalism and compliance.
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('sia-license-staff') }}" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                  <a href="{{ route('sia-license-staff') }}" class="portfolio__readmore"> <i
                      class="icon-arrow-right"></i></a>
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #5 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="assets/img/rapid_alarm.png" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__cat">
                      <a href="{{ route('rapid-alarm-response') }}">Security</a><a href="{{ route('rapid-alarm-response') }}">Response</a>
                    </div><!-- /.portfolio-cat -->
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="{{ route('rapid-alarm-response') }}">Rapid Alarm Response</a></h4>
                      <p class="portfolio__desc">Our rapid alarm response team is on standby 24/7 to respond to any security alerts, minimizing potential threats.
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('rapid-alarm-response') }}" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                  <a href="{{ route('rapid-alarm-response') }}" class="portfolio__readmore"> <i
                      class="icon-arrow-right"></i></a>
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #6 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="assets/img/sia_door.png" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__body">
                    <div class="portfolio__cat">
                      <a href="{{ route('sia-door-supervisors') }}">Security</a><a href="{{ route('sia-door-supervisors') }}">Supervisors</a>
                    </div><!-- /.portfolio-cat -->
                    <div class="portfolio__info">
                      <h4 class="portfolio__title"><a href="{{ route('sia-door-supervisors') }}">SIA Door Supervisors</a>
                      </h4>
                      <p class="portfolio__desc">Our SIA licensed door supervisors are trained to manage access control and ensure the safety of your venue or event.
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('sia-door-supervisors') }}" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div>
                  </div><!-- /.portfolio__body -->
                  <a href="{{ route('sia-door-supervisors') }}" class="portfolio__readmore"> <i
                      class="icon-arrow-right"></i></a>
                </div><!-- /.portfolio-item -->
              </div><!-- /.carousel -->
            </div><!-- /.carousel-container -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio -->



    <!-- ==========================
        contact layout 3
    =========================== -->
   <section class="contact-layout3 bg-overlay bg-overlay-primary bg-overlay-primary-gradient">
      <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="banner"></div>
      <div class="container">
        <div class="contact-panel p-0">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <form class="contact-panel__form" method="post" action="https://7oroof.com/demos/sekure/assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Request a Professional Security Quote</h4>
                    <p class="contact-panel__desc mb-30">Please complete the form below to receive a customized quote for your security needs. We'll be in touch shortly. For immediate assistance, you can also call us directly at <strong class="color-secondary">+234 813 791 6721</strong>.</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group float-label">
                      <label for="serviceType">Service Type:</label>
                      <select id="serviceType" class="form-control">
                        <option>For a Business</option>
                        <option>For an Individual</option>
                        <option>For a Private Event</option>
                      </select>
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group float-label">
                      <label for="location">Location:</label>
                      <select id="location" class="form-control">
                        <option>Nigeria</option>
                        <option>Manchester, UK</option>
                        <option>Dublin, Ireland</option>
                        <option>Other (Please specify in message)</option>
                      </select>
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group float-label">
                      <label for="profile">Security Profile:</label>
                      <select id="profile" class="form-control">
                        <option>High Profile</option>
                        <option>Low Profile</option>
                      </select>
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group float-label">
                      <label for="own">Gender of Personnel:</label>
                      <select id="own" class="form-control">
                        <option>Male Guards</option>
                        <option>Female Guards</option>
                        <option>Both Male and Female</option>
                      </select>
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="First Name">
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                  </div><div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                  </div><div class="col-12">
                    <div class="form-group mb-10">
                      <label>Services of Interest:</label>
                      <div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="close-protection">
                          <label class="custom-control-label" for="close-protection">Retail retail_security</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="door-supervision">
                          <label class="custom-control-label" for="door-supervision">Concierge Services</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="gate-monitoring">
                          <label class="custom-control-label" for="gate-monitoring">Key Holding</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="internal-guards">
                          <label class="custom-control-label" for="internal-guards">SIA Licensed Staff</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="cctv">
                          <label class="custom-control-label" for="cctv">Rapid Alarm Response</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="bouncers">
                          <label class="custom-control-label" for="bouncers">SIA Door Supervisors</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline mb-20">
                          <input type="checkbox" class="custom-control-input" id="Other">
                          <label class="custom-control-label" for="Other">Other</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__xl">
                      <i class="icon-arrow-right icon-filled"></i> <span>Request Your Quote</span>
                    </button>
                    <div class="contact-result"></div>
                  </div></div></form>
            </div></div></div></div></section>```


    <!-- ======================
      Blog Grid
    ========================= -->
    <!-- <section class="blog-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Security Tips & Resources </h2>
              <h3 class="heading__title">Recent Articles</h3>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                </a>
                <div class="post__meta-cat">
                  <a href="#">Home Security</a>
                </div>
              </div>
              <div class="post__body">
                <h4 class="post__title">
                  <a href="blog-single-post.html">Three Important Things You Must Look For While Choosing Home Security
                    System</a>
                </h4>
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <div class="post__meta-author"><a href="#">John Ezak</a></div>
                </div>
                <p class="post__desc">It is natural if you feel the need for improvising on your home’s security system.
                  Mostly, homes are unguarded or have security guards. Now, in the age of technology advancement...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__outlined">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                </a>
                <div class="post__meta-cat">
                  <a href="#">Solutions</a>
                  <a href="#">IT</a>
                </div>
              </div>
              <div class="post__body">
                <h4 class="post__title">
                  <a href="blog-single-post.html">How Non IT Roles Can Use Security Solutions to Solve All Imerged
                    Business Problems!</a>
                </h4>
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 29, 2022</span>
                  <div class="post__meta-author"><a href="#">Peter Allan</a></div>
                </div>
                <p class="post__desc">It is natural if you feel the need for improvising on your home’s security system.
                  Mostly, homes are unguarded or have security guards. Now, in the age of technology advancement...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__outlined">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
  
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                </a>
                <div class="post__meta-cat">
                  <a href="#">Solutions</a>
                  <a href="#">IT</a>
                </div>
              </div>
              <div class="post__body">
                <h4 class="post__title">
                  <a href="blog-single-post.html">Three Important Things You Must Look For While Choosing Home Security
                    System</a>
                </h4>
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 28, 2022</span>
                  <div class="post__meta-author"><a href="#">John Ezak</a></div>
                </div>
                <p class="post__desc">It is natural if you feel the need for improvising on your home’s security system.
                  Mostly, homes are unguarded or have security guards. Now, in the age of technology advancement...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__outlined">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="services.html" class="btn btn__secondary btn__link">
              <span>Check All Blog Posts</span>
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div>
        </div>
      </div>
    </section> -->

   
   </div>