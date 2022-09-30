<header class="header">
  <!-- header-top start -->
  <div class="header-top d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <p>
            <i class="icofont-google-map"></i>
            {{ __('messages.real_address') }}
          </p>
        </div>
        <div class="offset-3 col-3 d-flex align-items-center">
          <i class="display-6 text-white icofont-world"></i>
          <select class="form-control changeLang">
            <option value="tm" {{ session()->get('locale') == 'tm' ? 'selected' : '' }}>Türkmençe</option>
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Русский</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- header-top end -->

  <!-- header-middle start -->
  <div class="header-middle mobile-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-middle-content">
            <div class="header-logo">
              <a href="index.html">
                <img
                  class="sticky-img"
                  src="{{ asset('assets/awtoulag_logo.svg') }}"
                  alt="Logo"
                />
              </a>
            </div>
            <ul class="media-wrap d-none d-lg-flex">


              <!-- media-list start -->
              <li class="media media-list">
                <span class="media-icon"
                  ><i class="icofont-ui-call"></i
                ></span>
                <div class="media-content">
                  <span class="media-sub-heading">{{ __('messages.Phone') }}</span>
                  <a class="media-heading" href="tel:+99312390251"
                    >+99312 39-02-51</a
                  >
                </div>
              </li>
              <!-- media-list end -->

              <!-- media-list start -->
              <li class="media media-list">
                <span class="media-icon"
                  ><i class="icofont-envelope"></i
                ></span>
                <div class="media-content">
                  <span class="media-sub-heading">Email</span>
                  <a
                    class="media-heading"
                    href="mailto:tugdk@awtoulag.gov.tm"
                    style="text-transform: lowercase"
                    >tugdk@awtoulag.gov.tm</a
                  >
                </div>
              </li>
              <!-- media-list end -->
            </ul>
            {{-- <a
              href="#"
              class="book-now-btn d-none d-sm-inline-block d-lg-none"
              >book an appointment</a
            > --}}
            <div class="mobile-menu-toggle d-lg-none">
              <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                <svg viewBox="0 0 800 600">
                  <path
                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                    id="top"
                  ></path>
                  <path d="M300,320 L540,320" id="middle"></path>
                  <path
                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                    id="bottom"
                    transform="translate(480, 320) scale(1, -1) translate(-480, -318)"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header-middle end -->

  <!-- header-bottom start -->
  <div class="header-bottom d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div
            class="d-flex flex-wrap align-items-center justify-content-between"
          >
            <ul class="main-menu">
              <li class="@if (Route::current()->getName() === 'home.page') active @endif">
                <a class="main-menu-link" href="/"
                  >{{ __('messages.home') }}</a
                >
              </li>
              <li class="@if (Route::current()->getName() === 'services.page') active @endif">
                <a class="main-menu-link" href="/services"
                  >{{ __('messages.services') }}</a
                >
                {{-- <ul class="sub-menu">
                  <li>
                    <a class="sub-menu-link" href="services.html"
                      >Services</a
                    >
                  </li>
                  <li>
                    <a class="sub-menu-link" href="service-details.html"
                      >Service Details</a
                    >
                  </li>
                </ul> --}}
              </li>

              <li class="@if (Route::current()->getName() === 'request.page') active @endif">
                <a class="main-menu-link" href="/request">{{ __('messages.online.request') }}</a>
              </li>

              <li class="@if (Route::current()->getName() === 'news.page') active @endif">
                <a class="main-menu-link" href="/news">{{ __('messages.news') }}</a>
              </li>

              <li class="@if (Route::current()->getName() === 'about.page') active @endif">
                <a class="main-menu-link" href="/about">{{ __('messages.about') }}</a>
              </li>
              <li class="@if (Route::current()->getName() === 'contact.page') active @endif">
                <a class="main-menu-link" href="contact.html">{{ __('messages.contact') }}</a>
              </li>

                @guest
                  <li class="ml-auto">
                      <a class="main-menu-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                  </li>
                  <li>
                      <a class="main-menu-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                  </li>
                @else
                  <li class="ml-auto">
                      <a class="main-menu-link" href="{{ route('dashboard') }}">{{ __('auth.dashboard') }}</a>
                  </li>
                  <li>
                      <a class="main-menu-link" href="{{ route('logout') }}">{{ __('auth.logout') }}</a>
                  </li>
                @endguest 
            </ul>
            {{-- <a href="#" class="book-now-btn">book an appointment</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header-bottom end -->
  <!-- header-bottom start -->
  <div class="header-bottom sticky-header d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div
            class="d-flex flex-wrap align-items-center justify-content-between"
          >
            <ul class="main-menu">
              <li class="@if (Route::current()->getName() === 'home.page') active @endif">
                <a class="main-menu-link" href="{{ route('home.page') }}"
                  >{{ __('messages.home') }}</a
                >
              </li>
              <li class="@if (Route::current()->getName() === 'services.page') active @endif">
                <a class="main-menu-link" href="{{ route('services.page') }}"
                  >{{ __('messages.services') }}</a
                >
              </li>
              <li class="@if (Route::current()->getName() === 'request.page') active @endif">
                <a class="main-menu-link" href="{{ route('request.page') }}"
                  >{{ __('messages.online.request') }}</a
                >
              </li>

              <li class="@if (Route::current()->getName() === 'news.page') active @endif">
                <a class="main-menu-link" href="{{ route('news.page') }}">{{ __('messages.news') }}</a>
                {{-- <ul class="sub-menu">
                  <li>
                    <a class="sub-menu-link" href="blog.html"
                      >Blog list</a
                    >
                  </li>
                  <li>
                    <a class="sub-menu-link" href="blog-details.html"
                      >Blog Details</a
                    >
                  </li>
                </ul> --}}
              </li>

              <li class="@if (Route::current()->getName() === 'about.page') active @endif">
                <a class="main-menu-link" href="{{ route('about.page') }}">{{ __('messages.about') }}</a>
              </li>
              <li class="@if (Route::current()->getName() === 'contact.page') active @endif">
                <a class="main-menu-link" href="{{ route('contact.page') }}">{{ __('messages.contact') }}</a>
              </li>
              
            </ul>
            {{-- <a href="#" class="book-now-btn">book an appointment</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header-bottom end -->
</header>