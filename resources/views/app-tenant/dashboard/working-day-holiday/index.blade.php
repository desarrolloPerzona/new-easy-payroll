<x-app-tenant>

    <div class="container mx-auto mb-6">

        {{-- Alert message (edit, create or delete record)--}}
        <x-forms.alert-message classes=""/>

        {{--Working days Section *****--}}

        {{--Working days Header--}}
        <x-utilities.section-header title="Working days" classes=""/>

        {{--New business working day Component--}}
        <livewire:tenant.working-days.working-days-create-form/>

        {{--Working day Table Component--}}
        <livewire:tenant.working-days.working-days-table/>

        {{--Festive day Section *****--}}

        {{--Create a new holiday--}}
        <livewire:tenant.working-days.holidays-create-form/>

        {{--New festive day Livewire Component ----------------}}
        <livewire:tenant.working-days.holidays-table/>

    </div>

</x-app-tenant>

