<div>
    <li class="c-header-nav-item dropdown d-md-down-none mx-2">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-icon">
                {{--<i class="fas fa-envelope-open"></i>--}}
                @if($notifications->count() == 0)
                    <i class="fas fa-bell-slash text-red-500"></i>
                @else
                    <i class="fas fa-bell text-green-300"></i>
                @endif
            </div>
            <span class="badge badge-pill badge-info">{{$notifications->count()}}</span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>{{__('You have').'  '. $notifications->count().' '.__('messages')}}</strong></div>
            @if($notifications->count() > 0)
                @foreach($notifications as $notifications)
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mfe-3 float-left">
                            <div class="c-avatar"><img class="c-avatar-img" src="{{asset('images/avatar/user.jpg')}}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                        </div>
                        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a>
                @endforeach
            @endif
            <a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
        </div>
    </li>
</div>
