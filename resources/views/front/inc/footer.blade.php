<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-4">
        <div class="widget-item">
          <div class="about-widget d-flex" style="gap: 20px">
            <a class="footer-logo" href="index.html">
              <img 
                style="min-width: 100px" 
                src="{{ asset('assets/awtoulag_logo.svg') }}" 
                alt="Logo" 
              />
            </a>
            <p>{{ __('messages.turkmenulaggozegchilik') }}</p>
          </div>
        </div>
      </div>  
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="widget-item">
          <h4 class="widget-title line-bottom">{{ __('messages.pages') }}</h4>
          <nav class="widget-posts">
            <ul class="posts-item">
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i>{{ __('messages.home') }}</a
                >
              </li>
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i
                  >{{ __('messages.services') }}</a
                >
              </li>
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i>{{ __('messages.online.request') }}</a
                >
              </li>
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i>{{ __('messages.news') }}</a
                >
              </li>
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i
                  >{{ __('messages.about') }}</a
                >
              </li>
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i>{{ __('messages.about') }}</a
                >
              </li>
              <li>
                <a href="blog-details.html"
                  ><i class="icon icofont-rounded-double-right"></i>{{ __('messages.contact') }}</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="widget-item">
          <h4 class="widget-title line-bottom">{{ __('messages.for_contacting') }}</h4>
          <div class="widget-newsletter">
            <p>
              <i class="icofont-google-map"></i>
              {{ __('messages.real_address') }}
            </p>
            <p>
              <i class="icofont-phone"></i>
              +99312 39-02-51
            </p>
            <p>
              <i class="icofont-envelope"></i>
              trans@awtoulag.gov.tm
            </p>
            <p>
              <a href="{{ route('feed') }}">
                <i class="icofont-rss"></i>
                RSS
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-12">
          <div class="widget-copyright">
            <p>
              &copy; 2022 
              {{ __('messages.arr') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>