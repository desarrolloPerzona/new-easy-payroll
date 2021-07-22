<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    @include('include.common.head.meta')
    @include('include.common.head.vendor-css')
    @livewireStyles
    @stack('in_page_styles')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<livewire:components.nav-bar-welcome/>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>
</body>
@include('include.common.scripts.vendor-scripts')
@livewireScripts
@stack('in_page_scripts')
</html>
