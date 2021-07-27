<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <img src="https://nuevecubica-aws.s3.amazonaws.com/assets/logos/perzona/logo_perzona.svg" width="180">
        <div class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <img src="https://perzona-resources.s3.amazonaws.com/images/logos/favicon_perzona.svg" width="180">
        </div>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="dashboard">
                <i class="fas fa-tachometer-alt mr-2"></i>
                {{__('Dashboard')}}
                {{--<span class="badge badge-info">NEW</span>--}}
            </a>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fas fa-user-cog mr-2"></i>
            {{__('Users')}}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"></a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"> Cards</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/carousel.html"> Carousel</a></li>
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
