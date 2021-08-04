{{--<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
        </svg>
    </button>
    <!-- LOGO MOBILE -->
    <a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
        <div width="118" height="46" alt="Logo">
            <img src="https://nuevecubica-aws.s3.amazonaws.com/assets/logos/perzona/logo_perzona.svg" width="180">
        </div>
    </a>
    <!-- HAMBURGER -->
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
        </svg>
    </button>
    <!-- HEADER LINKS -->
    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/">{{__('Home')}}</a></li>
    </ul>
    <!-- DARK MODE -->
    <livewire:dashboaord.components.user-header-dark-mode/>
    <ul class="c-header-nav">
        <!-- NOTIFICATIONS -->
        <livewire:dashboaord.components.user-header-notifications :user="auth()->user()"/>
        <!-- HEADER USER MENU -->
        <livewire:dashboaord.components.user-header-menu/>
    </ul>
</header>--}}
<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <!-- TOGGLE BTN -->
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
            </svg>
        </button>
        <!-- HEADER BRAND -->
        <a class="header-brand d-md-none" href="#">
            <div width="118" height="46" alt="Logo">
                <img src="https://nuevecubica-aws.s3.amazonaws.com/assets/logos/perzona/logo_perzona.svg" width="180">
            </div>
        </a>
        <!-- MENU ITEMS -->
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>
        <!-- HEADER NAV DARK MODE -->
        <nav class="header-nav ms-auto me-4">

            <livewire:dashboard.includes.dark-mode-control/>
        </nav>
        <!-- HEADER RIGHT MENU -->
        <ul class="header-nav me-3">
            <livewire:dashboard.includes.notifications-control/>
        </ul>
        <ul class="header-nav me-4">
            <livewire:dashboard.includes.auth-user-control>
        </ul>
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
            <svg class="icon icon-lg">
                <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-applications-settings')}}"></use>
            </svg>
        </button>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <!-- if breadcrumb is single--><span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
        </nav>
    </div>
</header>
