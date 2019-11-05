<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sistema BiRads 2.0')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    @yield('before-css')
    <link id="gull-theme" rel="stylesheet" href="{{mix('assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">
    @yield('page-css')
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large clearfix">

        @include('layouts.header-menu')
        
        @include('layouts.sidebar')

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">

            @yield('main-content')

            @include('layouts.footer')
        </div>
        <!-- ============ Body content End ============= -->
    </div>

    <script src="{{mix('assets/js/common-bundle-script.js')}}"></script>
    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/sidebar.large.script.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/customizer.script.min.js')}}"></script>
    
    @yield('js')
</body>

</html>