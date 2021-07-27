<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- META -->
@include('include.common.head.meta')

<!-- CORE UI STYLES -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/core_ui.css')}}">
    <!-- app styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- APP SCRIPTS -->
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
    @include('include.common.head.vendor-css')
</head>
<body class="c-app c-no-layout-transition">
<!-- SIDE BAR -->
@include('include.dashboard.sidebars.admin_sidebar')
<!-- SIDE BAR RIGHT -->


<div class="c-wrapper">
    <!-- HEADER -->
@include('include.dashboard.headers.admin_header')
<!-- MAIN -->
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </main>
    </div>
    <!-- FOOTER -->
    @include('include.dashboard.footers.admin_footer')
</div>
<!-- STACKS SCRIPTS & LIVEWIRE -->
@stack('in_page_scripts')
@stack('modals')
@livewireScripts

<script src="{{asset('vendors/@coreui/coreui-pro/js/coreui.bundle.min.js')}}"></script>
<!--[if IE]><!-->
<script src="{{asset('vendors/@coreui/icons/js/svgxuse.min.js')}}"></script>
<!--<![endif]-->
<!-- Plugins and scripts required by this view-->

<script src="{{asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        setTimeout(function () {
            document.body.classList.remove('c-no-layout-transition')
        }, 2000);
    });
</script>

</body>
</html>

