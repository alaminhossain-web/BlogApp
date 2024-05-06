<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/') }}front/assets/images/fav.png" type="image/x-icon">

    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/plugins/fontawesome-5.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/bootstrap.min.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/swiper.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/metismenu.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/magnific-popup.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/style.css" as="style">
</head>

<body class="home-one">
    <!-- Start Top Header Area -->

    <!-- Start Top Header Area -->
    <header class="echo-header-area">
        @include('frontend.includes.header-top')
        <!-- Start Home-1 Menu & Site Logo & Social Media -->
        @include('frontend.includes.header-bottom')
        <!-- End Home-1 Menu & Site Logo & Social Media -->
    </header>
    <!-- End Top Header Area -->

    <!-- side bar for desktop -->
   @include('frontend.includes.mobile-menu')
    <!-- header style two End -->
    @yield('body')

    <!-- Start Footer Area -->
    @include('frontend.includes.footer')
    <!-- End Footer Area -->


    <!--scroll top button-->
    <button class="scroll-top-btn">
        <i class="fa-regular fa-angles-up"></i>
    </button>
    <!--scroll top button end-->

    <div id="anywhere-home"></div>

    <script src="{{ asset('/') }}front/assets/js/vendor/jquery.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/audio.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/vendor/bootstrap.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/vendor/swiper.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/vendor/metisMenu.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/audio.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/magnific-popup.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/contact-form.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/resize-sensor.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/theia-sticky-sidebar.min.js" defer></script>

    <!-- main js file -->
    <script src="{{ asset('/') }}front/assets/js/main.js" defer></script>

</body>
</html>