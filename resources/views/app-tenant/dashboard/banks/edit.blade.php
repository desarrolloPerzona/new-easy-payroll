<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.section-header title="Edit bank accounts" classes="mb-3"/>
        <livewire:tenant.banks.edit-table :userId="$bankAccount"/>

    </div>
</x-app-tenant>
