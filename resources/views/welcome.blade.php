<x-guest-layout>
    @section('title') {{__('R.R.H.H. SaaS') }} @endsection
    <div class="bg-blend-color rounded shadow p-4 mt-4 mx-auto">
        <h2>{{__('Welcome to')}} <span class="text-indigo-400">{{env('APP_NAME')}}</span></h2>
        {{--        @if (Route::has('login'))--}}
        {{--            <div class="hidden relative top-0 right-0 px-6 py-4 sm:block">--}}
        {{--                @auth--}}
        {{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
        {{--                @else--}}
        {{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

        {{--                    @if (Route::has('register'))--}}
        {{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
        {{--                    @endif--}}
        {{--                @endauth--}}
        {{--            </div>--}}
        {{--        @endif--}}

    </div>
    <h2{{__('Welcome to').' '.env('APP_NAME')}}></h2>
</x-guest-layout>
