@extends('front.layout')

  @section('content')

    <main class="main-content site-wrapper-reveal">
      <!--== Start Page Title Area ==-->
      <section class="page-title-area bg-img bg-img-top mt-3" data-bg-img="{{ asset('assets/front/img/home_about1.jpg') }}" style="background-image: url({{ asset('assets/front/img/home_about1.jpg') }});">
        <div style="background-color: rgba(0, 0, 0, 0.3)">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-xl-7 m-auto">
                <div class="page-title-content content-style2 text-center">
                  <h4 class="title">{{ __('about.title_1') }} <br /> {{ __('about.title_2') }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

      <!--== Start About Area Wrapper ==-->
      <section class="about-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-list-content">
                <p class="text-block">{{ __('about.text_1') }}</p>
                <p class="text-block">{{ __('about.text_2') }}</p>
                <p class="text-block">{{ __('about.text_3') }}</p>
            </div>
          </div>
        </div>
      </section>
      <!--== End About Area Wrapper ==-->

    </main>
    
  @endsection

  