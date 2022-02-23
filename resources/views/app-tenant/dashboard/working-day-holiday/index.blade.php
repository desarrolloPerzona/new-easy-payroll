<x-app-tenant>

    <div class="container mx-auto mb-6">
        {{-- Error validation message--}}
        <x-forms.error-validation-message/>

        {{-- Delete message--}}
        <x-forms.alert-message message="delete"/>

        {{-- Create message --}}
        <x-forms.alert-message message="create"/>

        {{-- Edit message --}}
        <x-forms.alert-message message="edit"/>

        {{--Working days Section *****--}}

        {{--Working days Header--}}
        <x-utilities.section-header title="Working days" classes=""/>

        {{--New business working day Component--}}
        <x-tenant.working-day-holiday.create-working-day/>

        {{--Working day Table Component--}}
        <x-tenant.working-day-holiday.working-day-table/>

        {{--Festive days Header--}}
        <x-utilities.section-header title="Holidays" classes="mt-3"/>

        {{--Festive day Section *****--}}

        {{--New festive day Component ----------------}}
        <x-tenant.working-day-holiday.create-festive-business-day/>

        {{--Festive days table Component--}}
        <x-tenant.working-day-holiday.festive-business-days-table/>

    </div>

</x-app-tenant>

