<x-app-tenant>
    <div class="container mx-auto" x-data="festiveConditionals()">

        {{-- Error Validation message--}}
        <x-forms.error-validation-message classes=""/>

        {{--Edit Header--}}
        <x-utilities.section-header title="Edit working day holiday" classes="mb-4"/>

        <livewire:tenant.working-days.holidays-edit-form :holiday="$businessFestiveDay"/>

    </div>

    @push('inline_scripts')

        <script>
            // Function to show or hide options into create festive day form
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
