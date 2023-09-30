<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from abid-html.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:23:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Themewatch">
    <!-- Site Title -->
    <title>Abid - Multipurpose business HTML template</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body>
    <!-- Start Preloader -->
    <div class="st-perloader">
        <div class="st-perloader-in"></div>
    </div>
    <!-- End Preloader -->


@include('layout.header')
@yield('content')
@include('layout.footer')

<!-- Start Video Popup -->
<div class="st-video-popup">
    <div class="st-video-popup-overlay"></div>
    <div class="st-video-popup-content">
      <div class="st-video-popup-layer"></div>
      <div class="st-video-popup-container">
        <div class="st-video-popup-align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="st-video-popup-close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

  <!-- Scroll to top button -->
  <a class="scrollToTop"><i class="fas fa-chevron-up"></i></a>

  <!-- JS: Jquery -->
  <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('assets/js/slick.min.js')}}"></script>
  <script src="{{asset('assets/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/js/isotope.pkg.min.js')}}"></script>
  <script src="{{asset('assets/js/lightgallery.min.js')}}"></script>
  <script src="{{asset('assets/js/tamjid-counter.min.js')}}"></script>
  <script src="{{asset('assets/js/wave-animation.js')}}"></script>
  <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/mains.js')}}"></script>
</body>

<!-- Mirrored from abid-html.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:23:58 GMT -->
</html>
