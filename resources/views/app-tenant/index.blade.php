@section('title')  {{Auth::user()->tenancy_domain ?? __('Not logged')}} @endsection
<x-app-tenant>
    <div class="mt-4 ">
        {{Tenant()->domain}}
        <div class="bg-white shadow-sm rounded p-4 text-center  max-w-2xl my-4 mx-auto">
            <h4>{{Tenant()->name .' '.__('Welcome to your').' '.env('APP_NAME') .' '.__('application')}}</h4>
            @auth
                <h2 class="uppercase">{{Auth::user()->tenancy_company ?? __('Not logged')}}</h2>
            @endauth

            {{-- <p>DB: <strong>{{$db_name ?? ''}}</strong></p>--}}
            <hr class="mt-4">

            @if(!Auth()->user())
                <p class="my-2">{{__('Please log in to your account')}}</p>
                <a href="{{route('tenant.login')}}" class="btn btn-primary">{{__('Login')}}</a>
            @else
                <p>{{__("Don't forget to complete your business information")}}</p>
                <a href="{{route('business.edit',1)}}" class="btn btn-primary">{{__('Edit business')}}</a>
                <hr>
                {{--<p class="my-2">{{__('Please go to your dashboard')}}</p>
                <a href="{{route('tenant.dashboard')}}" class="btn btn-primary">{{__('panel')}}</a>--}}
            @endif




        </div>

    </div>
</x-app-tenant>
