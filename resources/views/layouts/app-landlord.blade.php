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
    {{-- META TAGS--}}
    @include('app-landlord.includes.common.head.meta')
    {{--APP STYLES--}}
    @include('app-landlord.includes.common.head.vendor-css')
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    {{--CORE UI STYLES--}}
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    {{--APP SCRIPT--}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body class="mode-dark text-sm text-dark">
{{--SIDEBAR--}}
@include('app-landlord.includes.dashboard.sidebars.landlord_sidebar')
{{--CORE UI WRAPPER--}}
<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
    {{--TOP NAV BAR--}}
    @include('app-landlord.includes.dashboard.headers.landlord_header')
    {{--BODY--}}
    <div class="body flex-grow-1 px-3">
        {{--ONLY VISIBLE ON DESKTOP--}}
        <div class="d-none d-md-block d-sm-block d-xl-none">
            <p class="text-sm-center">{{__('Only visible on large screens')}}</p>
        </div>
        {{--MAIN CONTENT--}}
        <div class="d-none d-xl-block">
            {{$slot}}
        </div>
    </div>
    {{--FOOTER--}}
    @include('app-landlord.includes.dashboard.footers.landlord_footer')
    @stack('modals')
</div>
{{--END CORE UI WRAPPER--}}
{{--STACKS SCRIPTS & LIVEWIRE--}}
@livewireScripts
@include('app-landlord.includes.common.scripts.vendor-scripts')
{{--CORE UI SCRIPTS--}}
<script src="{{asset('tenancy/assets/vendor/@coreui/coreui-pro/js/coreui.bundle.min.js')}}"></script>
<script src="{{asset('tenancy/assets/vendor/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
{{--DARK MODE SCRIPT--}}
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
{{--IN PAGE SCRIPTS--}}
@stack('in_page_scripts')

</body>
</html>

