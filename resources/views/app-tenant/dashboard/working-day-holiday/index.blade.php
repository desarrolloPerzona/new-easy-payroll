<x-app-tenant>
    @push('inline_css')
        <style>
            .date-height {
                height: 42px !important;
            }
        </style>
    @endpush
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
        <div  x-data="festiveConditionals()">
            {{--Nuevo día festivo ----------------}}
            <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition">

                <div class="accordion-item bg-blueSteel py-2 ps-3 mb-2 rounded">
                    <div class="accordion-header mr-4" id="headingOne">

                        <div class="flex">
                            <div class="flex-1 pb-2">{{__('New holiday')}}</div>
                            <div class="flex-2">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseP1" aria-expanded="false"
                                        aria-controls="collapseP1"><i class="fas fa-plus-circle mr-3"></i>
                                </button>
                            </div>
                        </div>
                        @include('app-tenant.dashboard.working-day-holiday.new-working-date')
                    </div>

                </div>

            </div>

            {{--            Festive days table--}}
            <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

                <div class="border-bottom-1 border-gray-400 py-3">

                    <h2 class="mb-3">Festivos oficiales México</h2>
                    {{--                    Loop to print each of a month from our monthsArray--}}
                    @foreach($monthsArray as $month)
                        <div class="flex pt-2">
                            <div class="flex-1 text-gray-500">
                                {{__($month)}}
                            </div>
                            @foreach($festiveDays as $festiveDay)
                                {{--                            Conditional to know if exist a festive day in row month and print it, else print empty--}}
                                @if(\Carbon\Carbon::create($festiveDay->date)->format('F') == $month)
                                    <div class="flex-1">
                                        {{--                                        Function to print date with current year--}}
                                        {{__(\Carbon\Carbon::create($currentYear . '-' . substr($festiveDay->date, 5, 5))->format('l')) . ', ' . substr(formatDate($festiveDay->date), 0, -4) . ' ' . $currentYear }}
                                        | <b>{{$festiveDay->name}}</b>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    @endforeach

                </div>

                <div class="border-bottom-1 border-gray-400 py-3">
                    <h2>{{__('Festivos empresa')}} <i class="fas fa-edit text-gray-400"></i></h2>
                    @foreach($festiveBusinessesDays as $festiveDay)
                        <div class="flex pt-2">
                            <div class="flex-1 text-gray-500">
                                {{__(\Carbon\Carbon::create($festiveDay->date)->format('F'))}}
                            </div>
                            <div class="flex-1">
                                {{--                                        Function to print date with current year--}}
                                {{__(\Carbon\Carbon::create($currentYear . '-' . substr($festiveDay->date, 5, 5))->format('l')) . ', ' . substr(formatDate($festiveDay->date), 0, -4) . ' ' . $currentYear }}
                                | <b>{{$festiveDay->name}}</b> |
                                @if(!$festiveDay->working)
                                    {{__('Descanso')}}
                                @elseif($festiveDay->working)
                                    @if($festiveDay->schedule_all_day)
                                        {{__('Horario laboral: Regular')}}
                                    @else
                                        {{__('Horario laboral: ' . substr($festiveDay->schedule_from, 0, 5) . ' - ' . substr($festiveDay->schedule_to, 0, 5))}} <small>hrs</small>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

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

