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
                <i class="fad fa-tachometer-alt-fastest mr-2"></i> {{__('Dashboard')}}
            <!--<span class="badge bg-info-gradient ms-auto">NEW</span>-->
            </a>
        </li>
        {{--<li class="nav-title"><i class="fad fa-browser mr-2"></i> {{__('Application')}}</li>--}}
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fad fa-browser mr-2"></i> {{__('Application variables')}}
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fad fa-university mr-2"></i> {{__('Banks')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fad fa-map-marked-alt mr-2"></i> {{__('Zip codes')}}</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="index.html">
                        <i class="fad fa-warehouse mr-2"></i>{{__('Fiscal Regimes')}}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="index.html">
                        <i class="fad fa-industry mr-2"></i>{{__('Industries')}}
                    </a>
                </li>
            </ul>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
