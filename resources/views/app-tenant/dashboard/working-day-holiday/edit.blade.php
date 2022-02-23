<x-app-tenant>
    <div class="container mx-auto">

        {{-- Error Validation message--}}
        <x-forms.error-validation-message/>

        {{--Edit Header--}}
        <x-utilities.section-header title="Edit working day holiday" classes="mb-4"/>

        {{--Form to edit a workingday--}}
        <div class="card bg-white shadow-sm rounded p-0 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white"
             x-data="selectConditionals()">

            <div class="p-3 text-dark rounded dark:bg-dark dark:text-white">

            </div>
        </div>

    </div>
</x-app-tenant>
