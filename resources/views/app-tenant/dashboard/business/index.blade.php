<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.header-section title="Businesses" classes="mb-3" maxSize=""/>

        <x-utilities.create-button route="business.create" classes="" title="New business"/>

        {{-- Business table--}}
        <livewire:tenant.business.show-table />

    </div>

</x-app-tenant>
