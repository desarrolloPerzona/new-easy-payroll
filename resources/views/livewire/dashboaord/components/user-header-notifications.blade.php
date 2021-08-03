{{--<div>
    <li class="c-header-nav-item dropdown d-md-down-none mx-2">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-icon">
                --}}{{--<i class="fas fa-envelope-open"></i>--}}{{--
                @if($user->notifications->count() == 0)
                    <i class="fas fa-bell-slash text-red-500"></i>
                @else
                    <i class="fas fa-bell text-green-300"></i>
                @endif
            </div>
            <span class="badge badge-pill badge-info">{{$user->notifications->count()}}</span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>{{__('You have').'  '. $user->notifications->count().' '.__('messages')}}</strong></div>
            @if($user->notifications->count() > 0)
                @foreach($user->notifications as $notification)
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mfe-3 float-left">
                            <div class="c-avatar"><img class="c-avatar-img" src="{{asset('images/avatar/user.jpg')}}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                        </div>
                        <div><small class="text-muted"{{$notification['data']['name']}}></small><small class="text-muted float-right mt-1">Just now</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                        <div class="small text-muted text-truncate">{{$notification['data']['notification']}}</div>
                    </div>
                </a>
                @endforeach
            @endif
            <a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
        </div>
    </li>
</div>--}}
<div>
    <!-- NOTIFICATIONS -->

    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="icon icon-lg my-1 mx-2">
                @if($user->notifications->count() > 0) <i class="fad fa-bell-on"></i> @else <i class="fad fa-bell"></i> @endif
            </div>
            <span class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">{{$user->notifications->count()}}</span></a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0 bg-blue-400">

            @forelse ($user->notifications as $notification)
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 me-3 float-start">
                            <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                        </div>
                        <div><small class="text-medium-emphasis">{{$notification['data']['name'].' ',$notification['data']['last_name']}}</small><small class="text-medium-emphasis float-end mt-1">{{$notification->created_at}}</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                        <div class="small text-medium-emphasis text-truncate">{{$notification['data']['notification']}}</div>
                    </div>
                    <a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                </a>
            @empty
            <!-- TITLE NOTIFICATION -->
                <div class="dropdown-header bg-blue-400 text-white text-light"><strong>{{__('You have'.' '.$user->notifications->count())}}  {{ $user->notifications->count() < 1 ? __('notification') : __('notifications') }}</strong></div>
            @endforelse


        </div>
    </li>
</div>
