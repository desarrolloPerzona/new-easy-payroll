<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--META--}}
    @include('tenant.include.common.head.meta')
    {{--STYLES--}}
    @include('tenant.include.common.head.vendor-css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles
<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
{{ $slot }}
@livewireScripts
{{--@include('tenant.include.scripts.vendor-scripts')--}}
@stack('in_page_scripts')
@stack('modals')
</body>
</html>
