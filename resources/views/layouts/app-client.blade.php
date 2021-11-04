<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    {{--TITLE--}}
    <title>{{ config('app.name', 'PerZona ') }} | @yield('title')</title>
    {{--META--}}
    @include('include.common.head.meta')
    {{--APP STYLE--}}
    @include('include.common.head.vendor-css')
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    {{--CORE UI STYLES--}}
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
   {{--VENDOR CSS--}}

    {{--APP SCRIPTS--}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles

</head>
<body class="mode-dark text-sm text-dark">
<!-- SIDE BAR -->
@include('include.dashboard.sidebars.client_sidebar')
<!-- SIDE BAR RIGHT -->
<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
    <!-- HEADER -->

    <!-- MAIN -->
    <!-- TOP MENU NAV BAR -->
@include('include.dashboard.headers.admin_menu_header')
<!-- NAV BAR -->
    @include('include.dashboard.headers.admin_header')

    <div class="body flex-grow-1 px-3">
        <!-- BODY -->
        <div class="d-none d-md-block d-sm-block d-xl-none">
            <p class="text-sm-center">{{__('Only visible on large screens')}}</p>
        </div>
        <div class="d-none d-xl-block">
            {{$slot}}
        </div>

    </div>
    <!-- FOOTER -->
    @include('include.dashboard.footers.admin_footer')
    @stack('modals')
</div>

<!-- STACKS SCRIPTS & LIVEWIRE -->

@livewireScripts
@include('include.common.scripts.vendor-scripts')
@stack('in_page_scripts')
<!-- CORE UI SCRIPTS -->
<script src="{{asset('tenancy/assets/vendor/@coreui/coreui-pro/js/coreui.bundle.min.js')}}"></script>
<script src="{{asset('tenancy/assets/vendor/simplebar/js/simplebar.min.js')}}"></script>
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

