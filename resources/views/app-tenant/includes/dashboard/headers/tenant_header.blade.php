<header class="header header-sticky mb-4">
    <div class="container-fluid">
        {{--TOGGLE BTN--}}
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="fad fa-bars"></i>
        </button>
        {{--BRAND HEADER--}}
        <a class="header-brand d-md-none" href="#">
            <div width="118" height="46" alt="Logo">
                <img src="https://nuevecubica-aws.s3.amazonaws.com/assets/logos/perzona/logo_perzona.svg" width="180" alt="logo">
            </div>
        </a>
        {{--MENU ITEMS--}}
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="/">{{__('Home')}}</a></li>
            <li class="nav-item"><a class="nav-link" href="#">{{__('Employess')}}</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>
       {{--HEADER NAV DARK MODE COMPONENT--}}
        <nav class="header-nav ms-auto me-4">
            <livewire:dashboard.includes.dark-mode-control/>
        </nav>
        {{-- HEADER RIGHT MENU--}}
        <ul class="header-nav me-3">
           {{-- <livewire:dashboard.includes.notifications-control/>--}}
        </ul>
        {{--USER PROFILE LOG OUT--}}
        <ul class="header-nav me-4">
            <livewire:dashboard.includes.auth-user-control/>
        </ul>
        {{--ASIDE MORE APPLICATION INFO--}}
       {{-- <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
            <i class="fas fa-tasks-alt"></i>
        </button>--}}
    </div>
</header>
