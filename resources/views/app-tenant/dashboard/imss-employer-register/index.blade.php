<x-app-tenant>
    <div class="container mx-auto">

        <x-forms.alert-message classes=""/>

        <x-utilities.header-section title="Employer register" classes="mb-3" maxSize=""/>

        {{--Create Button--}}
        <x-utilities.create-button title="New employer register" route="imss-employer-registers.create" classes=""/>

        <livewire:tenant.imms-patronal-register.show-table/>

    </div>
</x-app-tenant>
