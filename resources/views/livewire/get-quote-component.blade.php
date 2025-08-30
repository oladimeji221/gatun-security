<div>
    @include('components.layouts.header')

    <!-- ========================_page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Request a Quote</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Get a Quote</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-right sticky-top mb-30">
              <div class="widget widget-help bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                  <h4 class="widget__title">A Tradition of Excellence</h4>
                  <p class="widget__desc mb-50">At Gatun Security, we provide more than just services; we deliver peace of mind. Our team is ready to conduct a thorough security assessment and provide a detailed, no-obligation quote tailored to your unique requirements.
                  </p>
                  <a href="tel:+2348137916721" class="phone__number">
                    <i class="icon-phone"></i> <span>+234 813 791 6721</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download">
                <div class="widget-content">
                  <h4 class="widget__title">Our Company Profile</h4>
                  <a href="assets/files/gatun_profile.pdf" class="btn btn__secondary btn__block mb-20" download>
                    <i class="icon-download"></i>
                    <span>Download PDF Profile</span>
                  </a>
                </div>
              </div>
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <section class="contact-layout4 py-0">
              <div class="contact-panel">
                <form class="contact-panel__form" method="post" action="#" id="contactForm">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact-panel__title">Request a Professional Security Consultation</h4>
                      <p class="contact-panel__desc mb-30">Please provide as much detail as possible so our expert security consultants can prepare a comprehensive and accurate proposal for you. For immediate assistance, call us at <strong class="color-secondary">+234 813 791 6721</strong>.
                      </p>
                    </div>
                    <!-- Personal & Company Info -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company Name (Optional)">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Best Time to Call">
                      </div>
                    </div>
                    <!-- Service Details -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group float-label">
                        <label for="propertyType">Type of Property</label>
                        <select id="propertyType" class="form-control">
                          <option>Commercial</option>
                          <option>Residential</option>
                          <option>Event Venue</option>
                          <option>Industrial Site</option>
                          <option>Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Location of Service" required>
                      </div>
                    </div>
                    <!-- Services of Interest -->
                    <div class="col-12">
                      <div class="form-group mb-10">
                        <label class="mb-20">Services of Interest (Select all that apply):</label>
                        <div class="row">
                          <div class="col-sm-6 col-md-4">
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="retail"><label class="custom-control-label" for="retail">Retail Security</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="concierge"><label class="custom-control-label" for="concierge">Concierge</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="keyholding"><label class="custom-control-label" for="keyholding">Key Holding</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="sialicense"><label class="custom-control-label" for="sialicense">SIA License Staff</label></div>
                          </div>
                          <div class="col-sm-6 col-md-4">
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="alarmresponse"><label class="custom-control-label" for="alarmresponse">Rapid Alarm Response</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="siadoor"><label class="custom-control-label" for="siadoor">SIA Door Supervisors</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="mobileguarding"><label class="custom-control-label" for="mobileguarding">24-Hour Mobile Guarding</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="callout"><label class="custom-control-label" for="callout">24-Hour Call Out</label></div>
                          </div>
                          <div class="col-sm-6 col-md-4">
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="cctv"><label class="custom-control-label" for="cctv">CCTV & Monitoring</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="events"><label class="custom-control-label" for="events">Site & Event Security</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="k9"><label class="custom-control-label" for="k9">Security Dogs (K9)</label></div>
                            <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="escort"><label class="custom-control-label" for="escort">Escort / Close Protection</label></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Message & Submit -->
                    <div class="col-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Please describe your security needs in detail"></textarea>
                      </div>
                      <button type="submit" class="btn btn__secondary btn__xl">
                        <i class="icon-arrow-right icon-filled"></i> <span>Submit Secure Request</span>
                      </button>
                      <div class="contact-result"></div>
                    </div>
                  </div><!-- /.row -->
                </form>
              </div><!-- /.contact-panel -->
            </section><!-- /.contact layout 4 -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
</div>
