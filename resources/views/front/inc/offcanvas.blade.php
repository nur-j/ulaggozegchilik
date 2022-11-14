<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
  <div class="inner">
    <div class="border-bottom mb-3 pb-3 text-end">
      <button class="offcanvas-close">×</button>
    </div>
    <div class="offcanvas-head mb-3">
      <div class="header-top-offcanvas d-flex" style="align-items:center; gap: 10px;">
        <i class="icofont-world" style="font-size: 30px"></i>
        <select class="form-control changeLang">
          <option value="tm" {{ session()->get('locale') == 'tm' ? 'selected' : '' }}>Türkmençe</option>
          <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
          <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Русский</option>
        </select>
      </div>
    </div>
    <nav class="offcanvas-menu">
      <ul>
        <li>
          <a href="{{ route('home.page') }}"><span class="menu-text">{{ __('messages.home') }}</span></a>
        </li>
        <li>
          <a href="{{ route('services.page') }}"><span class="menu-text">{{ __('messages.services') }}</span></a>
          {{-- <ul class="offcanvas-submenu">
            <li>
              <a href="services.html">Service</a>
            </li>
            <li>
              <a href="service-details.html">service details</a>
            </li>
          </ul> --}}
        </li>

        <li>
          <a href="{{ route('request.page') }}"><span class="menu-text">{{ __('messages.online.request') }}</span></a>
        </li>

        <li>
          <a href="{{ route('news.page') }}"><span class="menu-text">{{ __('messages.news') }}</span></a>
        </li>

        <li>
          <a href="{{ route('about.page') }}">{{ __('messages.about') }}</a>
        </li>

        <li><a href="{{ route('contact.page') }}">{{ __('messages.contact') }}</a></li>
        @guest
          <li>
            <a href="{{ route('login') }}"><span class="menu-text">{{ __('messages.login') }}</span></a>
          </li>

          <li>
            <a href="{{ route('register') }}"><span class="menu-text">{{ __('messages.registration') }}</span></a>
          </li>
        @else
          <li>
            <a href="{{ route('dashboard') }}"><span class="menu-text">{{ __('messages.dashboard') }}</span></a>
          </li>

          <li>
            <a href="{{ route('logout') }}"><span class="menu-text">{{ __('messages.logout') }}</span></a>
          </li>
        @endguest
        

        


      </ul>
    </nav>

    <ul class="media-wrap mt-3">

      <!-- media-list start -->
      <li class="media media-list">
        <span class="media-icon"><i class="icofont-ui-call"></i></span>
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
        <span class="media-icon"><i class="icofont-envelope"></i></span>
        <div class="media-content">
          <span class="media-sub-heading">Email</span>
          <a class="media-heading" href="mailto:trans.sanly@ulaggozegchilik.gov.tm"
            >trans.sanly@ulaggozegchilik.gov.tm</a
          >
        </div>
      </li>
      <!-- media-list end -->
    </ul>
  </div>
</div>
<!-- offcanvas-mobile-menu end -->