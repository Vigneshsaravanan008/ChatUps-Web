<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>ChatUp-Web</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="land-featurearea">
                        <div class="land-meta">
                            <h1>Chatup-Web</h1>
                            <p>
                                Winku is free to use for as long as you want with two active projects.
                            </p>
                            <div class="">
                                <span><img src="{{ asset('assets/images/4575.jpg') }}" alt="Chatup-Web"></span>
                            </div>
                            <a href="#" title="" class="folow-me">Follow Us on</a>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
