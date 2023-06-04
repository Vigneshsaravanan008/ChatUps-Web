<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>{{ Auth::user()->name }}</title>
    <link rel="icon" href="{{ asset('assets/images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">

        @include('web.layouts.header')

        {{-- Top Auth Header Content --}}
        <section>
            <div class="feature-photo">
                <figure><img src="{{ asset('assets/images/resources/timeline-1.jpg') }}" alt=""></figure>
                <div class="text-end">
                    <form class="edit-phto">
                        <i class="fa fa-camera-retro"></i>
                        <label class="fileContainer">
                            Edit Cover Photo
                            <input type="file">
                        </label>
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="row merged">
                        <div class="col-lg-2 col-sm-3">
                            <div class="user-avatar">
                                <figure>
                                    <img src="{{ Auth::user()->image == null ? asset('assets/images/profile/male-icon.jpg') : asset('storage/' . Auth::user()->image) }}"
                                        alt="{{ Auth::user()->name }}">
                                    <form method="POST" action="{{ route('profile.upload') }}"
                                        enctype="multipart/form-data" class="image_upload_form edit-phto">
                                        @csrf()
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <input type="file" name="image" class="image_upload" />
                                        </label>
                                    </form>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="timeline-info">
                                {{-- <ul>
                                    <li class="admin-name">
                                        <div class="row d-flex justify-content-between">
                                            <h3>{{ Auth::user()->name }}</h3>
                                        </div>
                                        <h5>0 Friends</h5>
                                    </li>
                                </ul>

                                <hr>
                                <ul>
                                    <li>
                                        <a class="" href="time-line.html" title="" data-ripple="">time
                                            line</a>
                                        <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                        <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                        <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                        <a class="" href="groups.html" title="" data-ripple="">Groups</a>
                                        <a class="" href="about.html" title="" data-ripple="">about</a>
                                        <a class="active" href="#" title="" data-ripple="">more</a>
                                    </li>
                                </ul> --}}
                                <ul>
                                    <li class="admin-name">
                                        <div class="row d-flex justify-content-between">
                                            <h3>{{ Auth::user()->name }}</h3>
                                        </div>
                                        <h6>0 Friends</h6>
                                    </li>
                                    <li class="top_nav">
                                        <a class="" href="time-line.html" title="" data-ripple="">time
                                            line</a>
                                        <a class="" href="timeline-photos.html" title=""
                                            data-ripple="">Photos</a>
                                        <a class="" href="timeline-videos.html" title=""
                                            data-ripple="">Videos</a>
                                        <a class="" href="timeline-friends.html" title=""
                                            data-ripple="">Friends</a>
                                        <a class="" href="groups.html" title="" data-ripple="">Groups</a>
                                        <a class="" href="about.html" title="" data-ripple="">about</a>
                                        <a class="active" href="#" title="" data-ripple="">more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area -->
        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                @include('web.profile.layouts.sidebar-left')
                                @yield('content')
                                @include('web.profile.layouts.sidebar-right')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('web.layouts.footer')
    </div>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/map-init.js') }}"></script>
    @stack('javascript')
</body>

</html>
