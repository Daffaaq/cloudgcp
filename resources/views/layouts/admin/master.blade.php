<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Sistem Pemesanan Menu @yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admindek/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/admindek/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admindek/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admindek/font-awesome-n.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/admindek/chartist.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admindek/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admindek/widget.css') }}">

    @stack('style')
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('layouts.admin.partials.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @if (Auth::user()->role == 1)
                        @include('layouts.admin.partials.sidebar-admin')
                    @else
                        @include('layouts.admin.partials.sidebar-kasir')
                    @endif

                    <div class="pcoded-content">

                        @yield('content')

                        @include('layouts.admin.partials.footer')

                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="{{ asset('js/admindek/email-decode.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/jquery.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/jquery-ui.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/popper.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/admindek/waves.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('js/admindek/jquery.flot.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/admindek/jquery.flot.categories.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/admindek/curvedlines.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/admindek/jquery.flot.tooltip.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{ asset('js/admindek/chartist.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{ asset('js/admindek/amcharts.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/admindek/serial.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/admindek/light.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{ asset('js/admindek/pcoded.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/admindek/vertical-layout.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/custom-dashboard.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/admindek/script.min.js') }}"></script>

    <script src="{{ asset('js/admindek/rocket-loader.min.js') }}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>

    @stack('script')
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>
