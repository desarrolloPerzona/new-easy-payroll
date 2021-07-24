<header class="c-header c-header-light c-header-fixed">
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
</header>
