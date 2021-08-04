{{--<div>
    <li class="c-header-nav-item dropdown mr-4"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                    </button>
                @else
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </span>
                @endif
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-indigo-300 text-white text-sm  py-2 font-light">{{ __('Manage Account') }}</div>
            <a class="dropdown-item text-gray-500" href="{{ route('profile.show') }}">
                <i class="fas fa-user-circle fa-lg mr-2 text-indigo-400"></i>{{ __('Profile') }}
            </a>
            <div class="dropdown-header bg-gradient-to-r from-indigo-300 to-indigo-100 text-white text-sm py-2 font-light"><strong>{{__('Settings')}}</strong></div>
            <a class="dropdown-item" href="#">
                <i class="fas fa-file-invoice-dollar fa-lg mr-2 text-indigo-400"></i>
                {{__('Billing')}}
            </a>
            --}}{{--<div class="dropdown-divider"></div>--}}{{--
            <a class="dropdown-item" href="#">
                <i class="fas fa-book fa-lg mr-2 text-indigo-400"></i>
                {{__('Documentation')}}
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-bell fa-lg mr-2 text-indigo-400"></i>
                {{__('Notifications')}}
            </a>
            <div class="dropdown-item text-gray-10 bg-gray-900  hover:bg-gray-500">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <a class="hover:no-underline hover:text-blue-50 text-white" href="{{ route('logout') }}" onclick="event.preventDefault();  this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt fa-lg mr-2 "></i>{{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </li>
</div>--}}
<div>
    <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{--<div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>--}}
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img class="avatar avatar-md" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
            @else
                <span class="inline-flex rounded-md">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                    </span>
            @endif
        </a>
        <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header bg-light py-2">
                <div class="fw-semibold">Account</div>
            </div>
            <a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-bell')}}"></use>
                </svg>
                Updates<span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-envelope-open')}}"></use>
                </svg>
                Messages<span class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-task')}}"></use>
                </svg>
                Tasks<span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-comment-square')}}"></use>
                </svg>
                Comments<span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
            <div class="dropdown-header bg-light py-2">
                <div class="fw-semibold">Settings</div>
            </div>
            <a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-user')}}"></use>
                </svg>
                Profile</a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-settings')}}"></use>
                </svg>
                Settings</a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-credit-card')}}"></use>
                </svg>
                Payments<span class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-file')}}"></use>
                </svg>
                Projects<span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-lock-locked')}}"></use>
                </svg>
                Lock Account</a><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-account-logout')}}"></use>
                </svg>
                Logout</a>
        </div>
    </li>
</div>

