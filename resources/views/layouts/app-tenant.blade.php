<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--META--}}
    @include('app-tenant.includes.common.head.meta')

    {{--STYLES--}}
    @include('app-tenant.includes.common.head.vendor-css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--CORE UI STYLES--}}
    <link href="/css/style.css" rel="stylesheet">
@livewireStyles
@stack('inline_css')
@stack('inline_styles')
<!-- Scripts -->
    <script src="/js/app.js" defer></script>

</head>
<body class="font-sans antialiased">
@include('app-tenant.includes.dashboard.sidebars.tenant_sidebar')
{{--CORE UI WRAPPER--}}
<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
    {{--TOP NAV BAR--}}
    @include('app-tenant.includes.dashboard.headers.tenant_header')
{{ $slot }}

    @include('app-tenant.includes.dashboard.footers.tenant_footer')
</div>

{{--Sweet alert--}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--STACKS SCRIPTS & LIVEWIRE--}}
@livewireScripts
@include('app-tenant.includes.common.scripts.vendor-scripts')
{{--CORE UI SCRIPTS--}}
<script src="{{asset('vendor/@coreui/coreui-pro/js/coreui.bundle.min.js')}}"></script>
<script src="{{asset('vendor/simplebar/js/simplebar.min.js')}}"></script>
<script src="/js/main.js"></script>

{{--Sweet Alert script--}}
<script>

    // Success message
    Livewire.on('alert', function(message){
        Swal.fire(
            'Excelente!',
            message,
            'success'
        )
    });

    // Delete message
    Livewire.on('deleteMessage', recordId => {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esta acción!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                //Emit the delete event to catch it in our component
                Livewire.emit('delete', recordId);

                Swal.fire(
                    'Eliminado!',
                    'El registro ha sido eliminado.',
                    'success'
                )
            }
        })
    })

</script>

{{--Delete message--}}

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

        tippy('.tool-tip', {
        role: 'tooltip',
        duration: 1,
        theme: 'tomato',
        trigger: 'mouseenter click',
    });

</script>
{{--IN PAGE SCRIPTS--}}
@stack('inline_scripts')

</body>
</html>
