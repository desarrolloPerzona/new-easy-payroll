<x-guest-layout>
    @section('title') {{__('Welcome') }} @endsection
    @section('seo-description')
        'R.R.H.H',
    @endsection
    <div class="container bg-white rounded shadow p-4 mt-4 mx-auto">
        <h2>{{__('Welcome to')}} <span class="text-indigo-400">{{env('APP_NAME')}}</span></h2>
    </div>
    <h2{{__('Welcome to').' '.env('APP_NAME')}}></h2>
</x-guest-layout>
