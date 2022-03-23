<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.header-section title="Employer register" classes="mb-3" maxSize=""/>

        {{--Create Button--}}
        <x-utilities.create-button title="New employer register" route="imss-employer-registers.create"/>

        <livewire:tenant.imms-patronal-register.show-table/>

    </div>
</x-app-tenant>

