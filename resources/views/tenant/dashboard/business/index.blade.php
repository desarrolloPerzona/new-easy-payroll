@section('title')  {{Auth::user()->tenancy_domain ?? __('Not logged')}} @endsection
<x-app-tenant>
    <div class="mt-4 ">
        <div class="bg-white shadow-sm rounded p-4 text-center  max-w-2xl my-4 mx-auto">
            <h2>{{__('Business')}}</h2>
            este budiidi
        </div>
    </div>
</x-app-tenant>
