<x-app-tenant>
    <div class="container mx-auto">

        <x-forms.alert-message classes=""/>

        <x-utilities.header-section title="Businesses" classes="mb-3" maxSize=""/>

        {{-- Business table--}}
        <livewire:tenant.business.show-table />

    </div>

</x-app-tenant>
