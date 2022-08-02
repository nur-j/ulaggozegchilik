@extends('front.layout')

  @section('content')

    <main class="main-content site-wrapper-reveal">
      <!--== Start Map Area Wrapper ==-->
      <div class="contact-map-area">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185374!2d144.95373631590425!3d-37.81720974201477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg"
        ></iframe>
      </div>
      <!--== End Map Area Wrapper ==-->

      <!--== Start Contact Area ==-->
      <section class="contact-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="contact-info-content">
                <div class="info-address">
                  <h2 class="title">Brooklyn, <span>New York</span></h2>
                  <p>
                    849 Diamond Str, 07th Floor, NY 10012, New York, United
                    State America
                  </p>
                  <a href="mailto://hello@yourdomain.com"
                    ><span>Email:</span> infor@hope.com</a
                  >
                </div>
                <div class="brand-office">
                  <div class="info-tem style-two">
                    <h6>Call directly:</h6>
                    <p>+1 212-226-3126</p>
                  </div>
                  <div class="info-tem">
                    <h6>Brand Offices:</h6>
                    <p>
                      Allentown PA | Allanta, GA | Chicago, IL | Dallas, TX,
                      Edison, NJ | Houston, TX
                    </p>
                  </div>
                  <div class="info-tem mb-0">
                    <h6>Work Hours:</h6>
                    <p>Mon - Sat: 8.00 - 17.00, Sunday closed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="contact-form">
                <div class="section-title text-center">
                  <p>Contact</p>
                  <h2 class="title">
                    <span> We Alway Ready</span> To Help Your
                  </h2>
                </div>
                <form
                  class="contact-form-wrapper"
                  id="contact-form"
                  action="http://whizthemes.com/mail-php/raju/arden/mail.php"
                  method="post"
                >
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input
                          class="form-control"
                          type="text"
                          name="con_name"
                          placeholder="Your Name"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input
                          class="form-control"
                          type="email"
                          name="con_email"
                          placeholder="Email Address"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input
                          class="form-control"
                          type="text"
                          name="con_subject"
                          placeholder="Subject (optional)"
                        />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <textarea
                          name="con_message"
                          rows="5"
                          placeholder="Write your message here"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="form-group mb-0">
                        <button class="btn btn-theme btn-block" type="submit">
                          Send Message
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Message Notification -->
              <div class="form-message"></div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Contact Area ==-->
    </main>

  @endsection

      