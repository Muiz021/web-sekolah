<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title> MTs LANGUAGE INSAN MANDIRI | @yield('title')</title>

    @include('front.partials.style')
    @stack('style')

    <style>
        .login {
            color: #86878a;
            font-size: 16px;
            padding-left: 25px;
            font-family: "Josefin Sans", sans-serif;
            font-weight: 600;
        }

        .login:hover {
            color: #4044b4;
        }

        .i-login {
            padding-right: 10px;
            color: #4044b4;
        }

    </style>
</head>

<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('front/img/logo/logo.png ') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

@include('front.partials.header')

@yield('content')

@include('front.partials.footer')
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@include('front.partials.script')
@stack('script')

</body>

</html>
