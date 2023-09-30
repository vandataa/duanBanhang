<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.digiboard.codebasket.xyz/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Sep 2023 10:45:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Digiboard</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" id="primaryColor" href="{{asset('assets/css/blue-color.css')}}">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body>
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- theme color hidden button -->
    <button class="header-btn theme-color-btn d-none"><i class="fa-light fa-sun-bright"></i></button>
    <!-- theme color hidden button -->


    <!-- main content start -->
    <div class="main-content login-panel login-panel-2">
        <h3 class="panel-title">Registration </h3>
        @if (Session::has('success'))
                <label class="form-check-label text-white" for="loginCheckbox">
                    {{session::get('success')}}
                </label>
                @endif
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="/">   <img src="{{asset('assets/img/logoz.png')}}" alt="Logo">   </a>
                </div>

            </div>
            <div class="bottom">
                <form action="{{route('resign')}}" method="POST">
                    @csrf
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" name="name" placeholder="Username">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    <div class="input-group mb-20">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    <div class="d-flex justify-content-end mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label class="form-check-label text-white" for="loginCheckbox">
                                I agree <a href="#" class="text-white text-decoration-underline">Terms & Policy</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 login-btn" type="submit">Sign Up</button>
                </form>
                <div class="other-option">
                    <p class="mb-0">Already have an account? <a href="{{route('login')}}" class="text-white text-decoration-underline">Login</a></p>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    <script src="{{asset('assets/vendor/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

<!-- Mirrored from html.digiboard.codebasket.xyz/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Sep 2023 10:45:29 GMT -->
</html>
