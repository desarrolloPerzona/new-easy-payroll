<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- TITLE -->
    <title>{{ config('app.name', 'PerZona ') }} | @yield('title')</title>
    <!-- META -->
@include('include.common.head.meta')

<!-- CORE UI STYLES -->
    <link rel="stylesheet" href="{{asset('vendor/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/simplebar.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- app styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- APP SCRIPTS -->
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
    @include('include.common.head.vendor-css')
</head>
<body>
<!-- SIDE BAR -->
@include('include.dashboard.sidebars.admin_sidebar')
<!-- SIDE BAR RIGHT -->
<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
    <!-- HEADER -->
@include('include.dashboard.headers.admin_header')
<!-- MAIN -->
    <!-- TOP MENU NAV BAR -->

    <!-- NAV BAR -->

    <div class="body flex-grow-1 px-3">
        <!-- BODY -->
        {{$slot}}
    </div>
    <!-- FOOTER -->
    @include('include.dashboard.footers.admin_footer')
</div>

<!-- STACKS SCRIPTS & LIVEWIRE -->
@stack('in_page_scripts')
@stack('modals')
@livewireScripts
<!-- CORE UI SCRIPTS -->
<script src="{{asset('vendor/@coreui/coreui-pro/js/coreui.bundle.min.js')}}"></script>
<script src="{{asset('vendor/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        setTimeout(function () {
            document.body.classList.remove('c-no-layout-transition')
        }, 2000);
    });
    if (document.body.classList.contains('dark-theme')) {
        var element = document.getElementById('btn-dark-theme');
        if (typeof (element) != 'undefined' && element != null) {
            document.getElementById('btn-dark-theme').checked = true;
        }
    } else {
        var element = document.getElementById('btn-light-theme');
        if (typeof (element) != 'undefined' && element != null) {
            document.getElementById('btn-light-theme').checked = true;
        }
    }

    function handleThemeChange(src) {
        var event = document.createEvent('Event');
        event.initEvent('themeChange', true, true);

        if (src.value === 'light') {
            document.body.classList.remove('dark-theme');
        }
        if (src.value === 'dark') {
            document.body.classList.add('dark-theme');
        }
        document.body.dispatchEvent(event);
    }
</script>
</body>
</html>

