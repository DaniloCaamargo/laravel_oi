<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" sizes="32x32" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>

<body class="left-side-menu-light enlarged" data-keep-enlarged="true">

    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts/_partials/topbar')

        @include('layouts/_partials.left-sidebar')

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">

                    @yield('container')

                    @include('layouts/_partials/footer')

                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->


    @yield('pre-script')

    <!-- Vendor js -->
    <script src="{{ URL::asset('assets/js/vendor.min.js') }}"></script>

    @yield('middle-script')

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>

    @yield('pos-script')

</body>

</html>
