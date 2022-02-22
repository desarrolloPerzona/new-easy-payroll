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

        {{--Component to create a workingday--}}
        <x-tenant.working-day-holiday.create-working-day/>

        {{--    Working day Table--}}
        <x-tenant.working-day-holiday.working-day-table/>

        {{--            Header--}}
        <h2 class="bg-blueSteel py-2 px-3 mb-2 mt-3 rounded max-w-6xl m-auto">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Holidays') }}</span>
        </h2>

        {{--    Festive day Section--}}

        {{--Nuevo día festivo ----------------}}
        <x-tenant.working-day-holiday.create-festive-business-day/>

        {{--Festive days table--}}
        <x-tenant.working-day-holiday.festive-business-days-table/>


    </div>

    @push('inline_scripts')
        <script>

            function festiveConditionals() {
                return {
                    working(res) {
                        if (res == 'y') {
                            document.getElementById('all_day_buttons').classList.remove('d-none')
                            document.getElementById('schedule_buttons').classList.remove('d-none')
                        } else if (res == 'n') {
                            document.getElementById('all_day_buttons').classList.add('d-none')
                            document.getElementById('schedule_buttons').classList.add('d-none')
                        } else if (res == 'all_day') {
                            document.getElementById('schedule_buttons').classList.add('d-none')
                        } else if (res == 'not_all_day') {
                            document.getElementById('schedule_buttons').classList.remove('d-none')
                        }
                    }
                }
            }

        </script>
    @endpush
</x-app-tenant>

