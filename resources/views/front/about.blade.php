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
                  <h4 class="title">Biz <br /> barada</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

    </main>
    
  @endsection

  