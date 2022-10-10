@extends('front.layout')

  @section('content')

    <main class="main-content site-wrapper-reveal">
      <!--== Start Page Title Area ==-->
      <section class="page-title-area bg-img bg-img-top mt-3" data-bg-img="{{ asset('assets/front/img/home_services.png') }}" style="background-image: url({{ asset('assets/front/img/home_about1.jpg') }}); background-position: center;">
        <div style="background-color: rgba(0, 0, 0, 0.3)">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-xl-7 m-auto">
                <div class="page-title-content content-style2 text-center">
                  <h4 class="title">{{  __('services.title_1') }} <br /> {{ __('services.title_2') }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

      <!--== Start Service Area Wrapper ==-->
      <section class="service-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title text-center">
                <h2 class="title"><span>{{ __('services.subtitle') }}</span></h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="row service-style2">
                <div class="col-12 service-item">
                  <div class="content">
                    <p>1. {{ __('services.service_1') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>2. {{ __('services.service_2') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>3. {{ __('services.service_3') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>4. {{ __('services.service_4') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>5. {{ __('services.service_5') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>6. {{ __('services.service_6') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>7. {{ __('services.service_7') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>8. {{ __('services.service_8') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>9. {{ __('services.service_9') }}</p>
                  </div>
                </div>
                <div class="col-12 service-item">
                  <div class="content">
                    <p>10. {{ __('services.service_10') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5" style="font-size: 25px; text-align: center">
            {{ __('services.service_footer') }}
          </div>
        </div>
      </section>
      <!--== End Service Area Wrapper ==-->

    </main>
    
  @endsection

  