<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>"Türkmenulaggözegçilik" döwlet kärhanasy</title>
    <!--== Favicon ==-->
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <!--== Main Style CSS ==-->
    <link href="{{ asset('assets/front/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet" />
    @yield('styles')
  </head>

  <body>
    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">
      <!--== Start Preloader Content ==-->
      <!--<div class="preloader-wrap">
        <div class="preloader">
          <span class="dot">
            <img src="{{ asset('assets/awtoulag_logo.svg') }}">
          </span>
          {{-- <div class="dots">
            <span></span>
            <span></span>
            <span></span> --}}
          </div>
        </div>
      </div> -->
      <!--== End Preloader Content ==-->

      @include('front.inc.alert')

      @include('front.inc.error')

      <!--== Start Header Wrapper ==-->
      
      @include('front.inc.header')

      <!--== End Header Wrapper ==-->

      @yield('content')

      <!--== Start Footer Area Wrapper ==-->
      @include('front.inc.footer')
      <!--== End Footer Area Wrapper ==-->

      @include('front.inc.offcanvas')

      <!--== Scroll Top Button ==-->
      <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>
    </div>

    <!-- @include('cookieConsent::index') -->

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="{{ asset('assets/front/js/modernizr.js') }}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('assets/front/js/jquery-main.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('assets/front/js/jquery-migrate.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <!--=== jquery UI Min Js ===-->
    <script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
    <!--=== Plugin Collection Js ===-->
    <script src="{{ asset('assets/front/js/plugincollection.js') }}"></script>

    <!--=== Custom Js ===-->
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>

    <script>
      var url = "{{ route('lang.change') }}";
      $('.changeLang').change(function() {
        window.location.href = url + "?lang=" + $(this).val();
      });
    </script>
    @yield('scripts')
  </body>
</html>
