<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('pages/assets/images/favicon.png') }}">
        <title>Aiki Services @yield('title')</title>
        <!-- This page CSS -->
        <link href="{{ asset('pages/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('pages/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
        <!--c3 CSS -->
        <link href="{{ asset('pages/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('pages/assets/libs/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" />
        <link href="{{ asset('pages/dist/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('pages/dist/css/dashboard/dashboard2.css') }}" rel="stylesheet">
        @stack('css')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="main-wrapper" id="main-wrapper">
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.preloader')
            @include('layouts.dashboard.includes.topbar')

            @include('layouts.dashboard.includes.left-sidebar')
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scaffolding.scss -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Title and breadcrumb -->
                <!-- ============================================================== -->
                <div class="page-titles">
                    <div class="d-flex align-items-center">
                        <h5 class="font-medium m-b-0">Dashboard</h5>
                        <div class="ml-auto custom-breadcrumb">
                            <a href="{{ route('dashboard') }}" class="breadcrumb">Home</a>
                            <a href="" class="breadcrumb">Dashboard</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                @include('layouts.dashboard.includes.footer')
            </div>
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scaffolding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.right-sidebar')
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('pages/dist/js/materialize.min.js') }}"></script>
        <script src="{{ asset('pages/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Apps -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/dist/js/app.js') }}"></script>
        <script src="{{ asset('pages/dist/js/app.init.horizontal.js') }}"></script>
        <script src="{{ asset('pages/dist/js/app-style-switcher.horizontal.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Custom js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/dist/js/custom.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('pages/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('pages/assets/libs/gaugeJS/dist/gauge.min.js') }}"></script>
        <!--c3 JavaScript -->
        <script src="{{ asset('pages/assets/extra-libs/c3/d3.min.js') }}"></script>
        <script src="{{ asset('pages/assets/extra-libs/c3/c3.min.js') }}"></script>
        <script src="{{ asset('pages/assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <script src="{{ asset('pages/dist/js/dashboard/dashboards/dashboard2.js') }}"></script>
        @stack('js')
    </body>

</html>
