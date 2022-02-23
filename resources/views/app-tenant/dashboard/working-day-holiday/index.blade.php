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

        {{--        Main Header--}}
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded max-w-6xl m-auto">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Working days') }}</span>
        </h2>

        {{--New business working day Component--}}
        <x-tenant.working-day-holiday.create-working-day/>

        {{--    Working day Table Component--}}
        <x-tenant.working-day-holiday.working-day-table/>

        {{--            Header--}}
        <h2 class="bg-blueSteel py-2 px-3 mb-2 mt-3 rounded max-w-6xl m-auto">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Holidays') }}</span>
        </h2>

        {{--    Festive day Section--}}

        {{--New festive day Component ----------------}}
        <x-tenant.working-day-holiday.create-festive-business-day/>

        {{--Festive days table Component--}}
        <x-tenant.working-day-holiday.festive-business-days-table/>

    </div>

</x-app-tenant>

