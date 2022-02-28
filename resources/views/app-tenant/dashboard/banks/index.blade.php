<x-app-tenant>
    <div class="container">

        <x-forms.alert-message/>

        <x-utilities.section-header title="Bank accounts" classes="mb-3"/>

        {{--Show account table component--}}
        <livewire:tenant.banks.show-table/>

    </div>

</x-app-tenant>
