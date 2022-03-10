<x-app-tenant>
    <div class="container mx-auto" x-data="festiveConditionals()">

        {{-- Error Validation message--}}
        <x-forms.error-validation-message classes=""/>

        {{--Edit Header--}}
        <x-utilities.section-header title="Edit working day holiday" classes="mb-4"/>

        <livewire:tenant.working-days.holidays-edit-form :holiday="$businessFestiveDay"/>

    </div>

</x-app-tenant>
