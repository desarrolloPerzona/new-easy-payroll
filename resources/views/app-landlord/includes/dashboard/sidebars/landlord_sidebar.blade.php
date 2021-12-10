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
            <a class="nav-link" href="/admin">
                <i class="nav-icon  fad fa-tachometer-alt-fastest"></i>
            {{__('Dashboard')}}
            {{--<span class="badge bg-info-gradient ms-auto">NEW</span>--}}
            </a>
        </li>
        {{--<li class="nav-title"><i class="fad fa-browser mr-2"></i> {{__('Application')}}</li>--}}
        @hasrole('SuperAdmin')
        {{-- APP ADMIN PERMISSIONS--}}
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fak fa-admin-perzona mr-2"></i> {{__('APP Administration')}}
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{'/permissions'}}">
                        <i class="nav-icon fad fa-user-crown mr-2"></i> {{__('Permissions')}}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.roles.index')}}">
                        <i class="nav-icon fad fa-users-cog mr-2"></i>{{__('Roles')}}
                    </a>
                </li>
            </ul>
        </li>
        {{--API ADMIN VARIABLES--}}
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="nav-icon fad fa-browser mr-2"></i> {{__('API variables')}}
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">

                    <a class="nav-link" href="{{route('admin.banks.index')}}">
                        <i class="nav-icon fad fa-university mr-2"></i> {{__('Banks')}}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.fiscal-regimes.index')}}">
                        <i class="nav-icon fad fa-warehouse mr-2"></i>{{__('Fiscal Regimes')}}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.industries.index')}}">
                        <i class="nav-icon fad fa-industry mr-2"></i>{{__('Industries')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.zipcodes.index')}} ">
                        <i class="nav-icon fad fa-map-marked-alt mr-2"></i> {{__('Zip codes')}}</a>
                </li>
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="nav-icon fad fa-tools mr-2"></i> {{__('User Administration')}}
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.users.index')}}">
                        <i class="nav-icon fad fa-users mr-2"></i>
                        {{__('Users')}}
                    </a>
                </li>
            </ul>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.tenants.index')}}">
                        <i class="nav-icon fad fa-users mr-2"></i>
                        {{__('Tenants')}}
                    </a>
                </li>
            </ul>
        </li>
        @endhasrole
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
