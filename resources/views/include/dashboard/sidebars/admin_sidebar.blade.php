<div class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <div class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <img src="https://perzona-resources.s3.amazonaws.com/images/logos/logo_perzona_white.svg" width="180">
        </div>
        <div class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <img src="https://perzona-resources.s3.amazonaws.com/images/logos/favicon_perzona.svg" width="180">
        </div>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg>{{__('Dashboard')}}
            <!--<span class="badge bg-info-gradient ms-auto">NEW</span>-->
            </a>
        </li>
        <li class="nav-title">{{__('Application')}}</li>
        <li class="nav-item">
            <a class="nav-link" href="colors.html">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cis-user')}}"></use>
                </svg>{{__('Tenants')}}</a></li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg> Typography</a></li>
        <li class="nav-title">Components</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
                </svg> Base</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
            </ul>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
