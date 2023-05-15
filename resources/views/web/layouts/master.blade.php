<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Home | ChatUp</title>
    <link rel="icon" href="{{ asset('assets/images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="theme-layout">
        <div class="postoverlay"></div>

        @include('web.layouts.header')

        {{-- @include('layouts.web.chatbox') --}}

        {{-- @include('web.layouts.sidebar-main') --}}

        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                @include('web.layouts.sidebar-left')
                                @yield('content')
                                @include('web.layouts.sidebar-right')
                                <!-- sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('web.layouts.footer')
    </div>


    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/map-init.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script> --}}

</body>

</html>
