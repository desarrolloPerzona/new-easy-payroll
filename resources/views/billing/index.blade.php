@section('title'){{__('Client Billing')}}@endsection
<x-app-client>
    <div class="container p-4 sm:p-6 lg:p-8">
        <div class="components-holder max-w-3xl mx-auto">


        {{--ADD PLAN--}}
        <!-- TODO: create plans -->

            {{--ADD PAYMENT METHOD--}}
            <div class="component-item my-2">
                <livewire:components.payment-method/>
            </div>

            {{--RETRIEVE PAYMENT METHODS--}}
            <div class="component-item my-4">
                <livewire:components.payment-method-retrive/>
            </div>


        </div>
    </div>
</x-app-client>
