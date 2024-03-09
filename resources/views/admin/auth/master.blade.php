<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indriya | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/toastr/toastr.min.css')}}">
    <link rel="icon" href="{{asset($setting->favicon)}}" />
    <link rel="shortcut icon" href="{{asset($setting->favicon)}}" />
    @livewireStyles
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <img src="{{asset($setting->logo)}}"/>
            </a>
        </div>
        @yield('content')
    </div>
    <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/toastr/toastr.min.js')}}"></script>
    @livewireScripts
    @stack('script')
</body>

</html>
