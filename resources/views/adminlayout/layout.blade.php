<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<!-- Mirrored from html.digiboard.codebasket.xyz/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Sep 2023 10:45:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product | Digiboard</title>

    <link rel="shortcut icon" href="favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/sharp-solid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/jquery.uploader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap-material-datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/material-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/selectize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" id="primaryColor" href="{{asset('assets/css/blue-color.css')}}">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="body-padding body-p-top">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->
    @include('adminlayout.header')
    @yield('content')
    @include('adminlayout.footer')


    <script src="{{asset('assets/vendor/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/ckeditor.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery.uploader.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('assets/vendor/js/selectize.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/select2-init.js')}}"></script>
    <script src="{{asset('assets/js/add-product.js')}}"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }

    </script>
    <!-- for demo purpose -->

</body>

<!-- Mirrored from html.digiboard.codebasket.xyz/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Sep 2023 10:45:20 GMT -->
</html>
