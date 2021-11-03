<div class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <div class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <img src="https://perzona-s3-resources.s3.us-west-1.amazonaws.com/web-assets/logo_perzona_white.svg" width="180">
        </div>
        <div class="sidebar-brand-narrow" width="40" height="40" alt="CoreUI Logo">
            <img src="https://perzona-s3-resources.s3.us-west-1.amazonaws.com/web-assets/favicon_perzona_white.svg" width="40">
        </div>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="/client">
                <i class="nav-icon  fad fa-tachometer-alt-fastest"></i>
            {{__('Dashboard')}}
            <!--<span class="badge bg-info-gradient ms-auto">NEW</span>-->
            </a>
        </li>
        {{--CLIENT --}}
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="nav-icon fad fa-file-invoice-dollar mr-2"></i></i> {{__('Billing')}}
            </a>
            <ul class="nav-group-items">
                <li class="sub-nav-item">
                    <a class="nav-link" href="/client/billing">
                        <i class="nav-icon fad fa-credit-card-front mr-2"></i>
                        {{__('Payment methods')}}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
