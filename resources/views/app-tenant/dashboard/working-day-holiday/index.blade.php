<x-app-tenant>
    <div class="container mx-auto mb-6">

        {{-- Error validation message--}}
        <x-forms.error-validation-message/>

        {{-- Alert message (edit, create or delete record)--}}
        <x-forms.alert-message/>

        {{--Working days Section *****--}}

        {{--Working days Header--}}
        <x-utilities.section-header title="Working days" classes=""/>

        {{--New business working day Component--}}
        <x-tenant.working-day-holiday.create-working-day/>

        {{--Working day Table Component--}}
        <x-tenant.working-day-holiday.working-day-table/>

        {{--Festive day Section *****--}}

        {{--New festive day Livewire Component ----------------}}
        <livewire:tenant.working-days.holidays-table/>

        {{--Festive days table Component--}}
        <x-tenant.working-day-holiday.festive-business-days-table/>

    </div>

</x-app-tenant>

