<div>
    {{--NOTIFICATIONS--}}
    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{--COUNTER--}}
            <div class="icon icon-lg my-1 mx-2">
                @if($user->notifications->count() > 0) <i class="fad fa-bell-on"></i> @else <i class="fad fa-bell"></i> @endif
            </div>
            <span class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">{{$user->notifications->count()}}</span></a>

        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg bg-blue-400 min-w-2xl p-4">

            @forelse ($user->notifications as $notification)
                <a class="dropdown-item bg-blueSteel text-white border-bottom-2 border-gray-100 mb-2" href="#">
                    <div class="message">
                        <p class="small mb-0 text-warning">{{$notification['data']['name'].' ',$notification['data']['last_name']}}</p>
                        <p class="small mb-0">{{$notification['data']['notification']}}</p>
                        <p class="small mb-0">{{formatDate($notification->created_at)}}</p>
                    </div>
                </a>
            @empty
            <!-- TITLE NOTIFICATION -->
                <div class="dropdown-header bg-blue-400 text-white text-light"><strong>{{__('You have'.' '.$user->notifications->count())}}  {{ $user->notifications->count() < 1 ? __('notification') : __('notifications') }}</strong></div>
            @endforelse
            <a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
        </div>
    </li>
</div>
