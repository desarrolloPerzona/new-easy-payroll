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
            <a class="nav-link" href="{{ route('tenant.dashboard') }}">
                <i class="nav-icon  fad fa-tachometer-alt-fastest"></i>
                {{__('Dashboard')}}
                {{--<span class="badge bg-info-gradient ms-auto">NEW</span>--}}
            </a>
        </li>
        {{--<li class="nav-title"><i class="fad fa-browser mr-2"></i> {{__('Application')}}</li>--}}
        @if(Tenant()->role === 1 && Auth()->user())
            {{-- BUSINESS --}}
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <i class="nav-icon fad fa-building mr-2"></i> {{__('Businesses')}}
                </a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('business.index')}}">

                            {{__('Businesses')}} / {{__('Headquarters')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('employer-register.index')}}">

                            {{__('Employer register')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('banks.index')}}">

                            {{__('Bank accounts')}}
                        </a>
                    </li>


                </ul>
            </li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <i class="nav-icon fad fa-user-cog mr-2"></i> {{__('Administration')}}
                </a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('payroll.index')}}">

                            {{__('Payroll')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('policies.index')}}">

                            {{__('Policies')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('areapositions.index')}}">

                            {{__('Areas and positions')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('workingdayholiday.index')}}">

                            {{__('Working and holiday')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('concept.index')}}">

                            {{__('Concepts')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tablevalue.index')}}">

                            {{__('Table and value')}}
                        </a>
                    </li>

                </ul>
            </li>

        @else

            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <i class="nav-icon fad fa-building mr-2"></i> {{__('otra cosa')}}
                </a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon fad fa-users mr-2"></i>
                            {{__('cosa')}}
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
