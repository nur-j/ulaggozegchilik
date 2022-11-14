@extends('front.layout')

  @section('content')

  <main class="main-content site-wrapper-reveal">
    <!--== Start Map Area Wrapper ==-->
    <div class="contact-map-area">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4452.725515920602!2d58.30665441841793!3d37.89414893142722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f7003bfd90eac49%3A0xbf726218d1ffdd1f!2sState%20Concern%20%22Turkmenavtoyollary%22%2C%20Ashgabat%2C%20Turkmenistan!5e0!3m2!1sen!2sus!4v1665241050654!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--== End Map Area Wrapper ==-->

    <!--== Start Contact Area ==-->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-info-content">
              <div class="info-address">
                <h2 class="title">{{ __('messages.address_1') }}, </h2>
                <p>{{ __('messages.address_2') }}
                </p>
                <a href="mailto://trans.sanly@ulaggozegchilik.gov.tm"><span>Email:</span> trans.sanly@ulaggozegchilik.gov.tm</a>
              </div>
              <div class="brand-office">
                <div class="info-tem style-two">
                  <h6>{{ __('messages.Phone') }}:</h6>
                  <p>+99312 39-02-51
                  </p>
                </div>
                {{-- <div class="info-tem">
                  <h6>Ofisler:</h6>
                  <p>
                    Allentown PA | Allanta, GA | Chicago, IL | Dallas, TX,
                    Edison, NJ | Houston, TX
                  </p>
                </div>
                <div class="info-tem mb-0">
                  <h6>Iş wagtlary:</h6>
                  <p>Mon - Sat: 8.00 - 17.00, Sunday closed</p>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-form">
              <div class="section-title text-center">
                {{-- <p>Contact</p> --}}
                <h2 class="title">
                  <span>{{ __('messages.contact_us') }}</span>
                </h2>
              </div>
              <form class="contact-form-wrapper" id="contact-form" action="#" method="get">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="text" name="con_name" placeholder="{{ __("messages.name") }}">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="email" name="con_email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="text" name="con_subject" placeholder="{{ __('messages.subject') }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-0">
                      <textarea name="con_message" rows="5" placeholder="{{ __('messages.message') }}"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="form-group mb-0">
                      <button disabled class="btn btn-theme btn-block"{{--  type="submit" --}}>
                        {{ __('messages.send') }}
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

      