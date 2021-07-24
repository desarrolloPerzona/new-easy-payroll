<div>
    <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                    </button>
                @else
                    <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                @endif
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>{{ __('Manage Account') }}</strong></div>
            <a class="dropdown-item" href="{{ route('profile.show') }}">
                <i class="fas fa-user-circle mr-2"></i>{{ __('Profile') }}
            </a>


            <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
            <a class="dropdown-item" href="#">
                <svg class="c-icon mfe-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg>
                Profile</a><a class="dropdown-item" href="#">
                <svg class="c-icon mfe-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg>
                Settings</a><a class="dropdown-item" href="#">
                <svg class="c-icon mfe-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                </svg>
                Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mfe-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                </svg>
                Projects<span class="badge badge-primary mfs-auto">42</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <svg class="c-icon mfe-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                </svg>
                Lock Account</a><a class="dropdown-item" href="#">
                <svg class="c-icon mfe-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg>
                Logout</a>
        </div>
    </li>
</div>
