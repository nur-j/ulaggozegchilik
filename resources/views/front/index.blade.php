@extends('front.layout')


  @section('content')
    <main class="main-content site-wrapper-reveal">
      <!--== Start Hero Area Wrapper ==-->
      <section class="hero-slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- swiper-slide start -->
            <div
              class="swiper-slide"
            >
              <img src="{{ asset('assets/front/img/slider/slide1.jpg') }}" alt="slide1">
            </div>
            <!-- swiper-slide end -->
            <!-- swiper-slide start -->
            <div
              class="swiper-slide"
            >
              <img src="{{ asset('assets/front/img/slider/slide2.jpg') }}" alt="slide1">
            </div>
            <!-- swiper-slide end -->
            <!-- swiper-slide start -->
            <div
              class="swiper-slide"
            >
              <img src="{{ asset('assets/front/img/slider/slide3.jpg') }}" alt="slide1">
            </div>
            <!-- swiper-slide end -->
          </div>

          <div class="swiper-button-prev">
            <i class="icofont-arrow-left"></i>
          </div>
          <div class="swiper-button-next">
            <i class="icofont-arrow-right"></i>
          </div>
        </div>
      </section>
      <!--== End Hero Area Wrapper ==-->

      <!--== Start Blog Area Wrapper ==-->
      <section class="about-area">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div
                class="section-title"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <h2 class="title"><span>Biz barada</span></h2>
                <div>
                  Türkmenistanyň Ministrler Kabinetiniň ýanyndaky ulag we kommunikasiýalar agentliginiň «Türkmenawtoulaglary» agentliginiň «Türkmenulaggözegçilik» döwlet kärhanasy ilkinji gezek 1994-nji ýylyň fewralynda Türkmenistanyň Awtomobil transporty ministrliginiň «Türkmentransinspeksiýa» döwlet kärhanasy hökmünde döredildi.
                  <div class="btn-area mt-3">
                    <a href="{{ route('about.page') }}" class="btn btn-success">Doly oka</a>
                  </div>
                </div>
              </div>
              

            </div>
            <div class="col-md-6">
              <div
                data-aos="fade-up"
                data-aos-duration="1000"
              >
              <div class="row">
                <div class="col-12">
                  <img src="{{ asset('assets/front/img/home_about1.jpg') }}" alt="about1">
                </div>
                <div class="col-6">
                  <img src="{{ asset('assets/front/img/home-about2.jpg') }}" alt="about2">
                </div>
                <div class="col-6">
                  <img src="{{ asset('assets/front/img/home-about3.jpg') }}" alt="about3">
                </div>
              </div>
              </div>
              

            </div>
          </div>
        </div>
      </section>
      <!--== End Blog Area Wrapper ==-->


      <!--== Start Blog Area Wrapper ==-->
      <section class="blog-area blog-default-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="section-title"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <h2 class="title"><span>Täzelikler</span></h2>
              </div>
              <div
                class="post-items-style1"
                data-aos="fade-up"
                data-aos-duration="1100"
              >
                @foreach ($posts as $post)
                  <!--== Start Blog Post Item ==-->
                  <div class="post-item d-flex" style="gap: 5px">
                    <div class="thumb">
                      <a href="{{ route('news.single', $post->id) }}"
                        ><img src="{{ asset('storage/' . $post->poster) }}" alt="news_img"
                      /></a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="{{ route('news.single', $post->id) }}">
                          @switch(Lang::locale())
                            @case('tm')
                              {{ $post->title_tm }}
                              @break
                            @case('ru')
                              {{ $post->title_ru }}
                              @break
                            @case('en')
                              {{ $post->title_en }}
                              @break
                              {{ $post->title_tm }}
                            @default
                              
                          @endswitch
                          {{ $post->title }}
                          </a>
                      </h4>
                      <div class="meta">
                        @switch(Lang::locale())
                            @case('tm')
                              {{\Carbon\Carbon::parse($post->date)->locale('tk')->diffForHumans() }}
                                @break
                            @case('ru')
                              {{\Carbon\Carbon::parse($post->date)->locale('ru')->diffForHumans() }}
                                @break
                            @case('en')
                              {{\Carbon\Carbon::parse($post->date)->locale('en')->diffForHumans() }}
                                @break
                            @default
                              {{\Carbon\Carbon::parse($post->date)->locale('tk')->diffForHumans() }}
                        @endswitch
                          
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->
                @endforeach
              </div>

            </div>
            {{-- <div class="col-lg-6">
              <div
                class="section-title mt-md-70"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <h2 class="title"><span>FAQs</span></h2>
              </div>
              <div
                class="accordian-content"
                data-aos="fade-up"
                data-aos-duration="1100"
              >
                <div
                  class="accordion accordion-style2 no-bg"
                  id="accordionStyle"
                >
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        Can I Get A Divorce Without A Consultant?
                        <i class="icon icon-plus icofont-thin-down"></i>
                        <i class="icon icon-minus icofont-close-line"></i>
                      </button>
                    </div>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      aria-labelledby="headingOne"
                      data-bs-parent="#accordionStyle"
                    >
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur consectetur elit lacinia ornare. In
                        volutpat rutrum molestie. Vivamus efficitur orci, ac
                        gravida eros bibendum non. Nullam auctor varius fer
                        vestibulum ante ipsum primis in faucibus orci luctus
                        et ultrices.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        I Have A Technical Problem Or Support Issue I Need
                        Resolved, Who Do I Email?
                        <i class="icon icon-plus icofont-thin-down"></i>
                        <i class="icon icon-minus icofont-close-line"></i>
                      </button>
                    </div>
                    <div
                      id="collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingTwo"
                      data-bs-parent="#accordionStyle"
                    >
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur consectetur elit lacinia ornare. In
                        volutpat rutrum molestie. Vivamus efficitur orci, ac
                        gravida eros bibendum non. Nullam auctor varius fer
                        vestibulum ante ipsum primis in faucibus orci luctus
                        et ultrices.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        What Other Services Are You Compatible With?
                        <i class="icon icon-plus icofont-thin-down"></i>
                        <i class="icon icon-minus icofont-close-line"></i>
                      </button>
                    </div>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionStyle"
                    >
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur consectetur elit lacinia ornare. In
                        volutpat rutrum molestie. Vivamus efficitur orci, ac
                        gravida eros bibendum non. Nullam auctor varius fer
                        vestibulum ante ipsum primis in faucibus orci luctus
                        et ultrices.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingFour">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                      >
                        Are You Hiring?
                        <i class="icon icon-plus icofont-thin-down"></i>
                        <i class="icon icon-minus icofont-close-line"></i>
                      </button>
                    </div>
                    <div
                      id="collapseFour"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingFour"
                      data-bs-parent="#accordionStyle"
                    >
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur consectetur elit lacinia ornare. In
                        volutpat rutrum molestie. Vivamus efficitur orci, ac
                        gravida eros bibendum non. Nullam auctor varius fer
                        vestibulum ante ipsum primis in faucibus orci luctus
                        et ultrices.
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn-line" href="#/">View All Questions</a>
              </div>
            </div> --}}
          </div>
        </div>
      </section>
      <!--== End Blog Area Wrapper ==-->

    </main>
  @endsection

      

