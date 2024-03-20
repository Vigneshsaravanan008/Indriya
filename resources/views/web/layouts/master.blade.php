<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @yield("meta-details")

    <link rel="shortcut icon" href="{{ asset($setting->favicon) }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/assets/css/style.css') }}">
    @livewireStyles
</head>

<body>

    <!-- Preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="loading-logo" src="{{ asset($setting->logo) }}"
                        alt="icon">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader area end -->

    <!-- Header area start here -->
    @include('web.layouts.header')
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    @include('web.layouts.sidebar')
    <!-- Sidebar area end here -->
    <main>
        @yield('content')
    </main>
    <!-- Footer area start here -->
    @include('web.layouts.footer')
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <script src="{{ asset('web-assets/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/script.js') }}"></script>
    @livewireScripts
    @stack('javascript')
</body>

</html>
