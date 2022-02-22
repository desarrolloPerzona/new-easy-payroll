<x-app-tenant>
    <div class="container mx-auto mb-6">
        {{-- Validation message--}}
        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    {{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endforeach
            </div>
        @endif

        {{-- Delete message--}}
        @if (session('deleteMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('deleteMessage') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Create message --}}
        @if (session('createMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('createMessage') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Edit message --}}
        @if (session('editMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('editMessage') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{--        Create Festive day --}}
        @if (session('festiveMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('festiveMessage') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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

