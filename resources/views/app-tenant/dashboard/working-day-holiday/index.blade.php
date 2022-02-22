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

        {{--        Create message--}}
        @if (session('createMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('createMessage') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{--        Edit message--}}
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
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Working days') }}</span>
        </h2>

        {{--    New Working day Accordion--}}
        <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="workingDayAccordion"
             x-data="selectConditionals()">
            <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                {{--                Accordion header New WorkingDay--}}
                <div class="accordion-header mr-4" id="headingWorkingDay">
                    <div class="flex">
                        <div class="flex-1 pb-2">{{__('New working day')}}</div>
                        <div class="flex-2">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#workingDayCollapse"
                                    aria-expanded="false" aria-controls="workingDayCollapse">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{--                Accordion Body--}}
                <div id="workingDayCollapse" class="accordion-collapse collapse" aria-labelledby="headingWorkingDay"
                     data-bs-parent="#workingDayAccordion">
                    <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                        {{--                        Working day Form--}}
                        <form name="newForm" action="{{route('business-working-day.store')}}" method="POST"
                              class="text-black rounded">
                            @csrf
                            <div class="d-flex col-12 justify-around">
                                <div class="mb-3 pe-2 col-6">
                                    <label for="name"
                                           class="form-label font-bold">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="John Doe" required>
                                </div>
                                <div class="mb-3 ps-2 col-6">
                                    <label for="workingDaySelect"
                                           class="form-label font-bold">{{__('Type of shift')}}</label>

                                    <select name="workday_type" id="workday_type" class="form-control" required>
                                        <option value="">{{__('Select')}}</option>
                                        @foreach($workdayTypes as $type)
                                            <option value="{{$type}}">{{__(ucfirst($type))}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">

                                {{--                                Working days section--}}
                                <label class="font-bold mb-3" for="">Días de la semana</label>

                                {{--                                WorkingDays Loop--}}
                                @foreach($daysArray as $day)

                                    <div class="d-flex align-items-center">
                                        @php
                                            $day = strtolower($day);
                                        @endphp
                                        <div class="col-1">
                                            <input type="checkbox" name="{{$day}}" id="{{$day}}" value="1"
                                                   class="rounded" x-on:click="isDisabled(`{{$day}}`)">
                                        </div>

                                        <div class="col-2">
                                            {{__($day)}}
                                        </div>

                                        {{--                                    Hours in working day--}}
                                        <div class="col-3 d-flex mb-2">
                                            <select name="{{$day}}_from" id="{{$day}}_from" class="form-control mx-2"
                                                    disabled>
                                                @for($i = 0; $i < 24; $i++)
                                                    @if($i <= 9)
                                                        <option value="0{{$i}}:00">0{{$i}}:00</option>
                                                        <option value="0{{$i}}:30">0{{$i}}:30</option>
                                                    @else
                                                        <option value="{{$i}}:00">{{$i}}:00</option>
                                                        <option value="{{$i}}:30">{{$i}}:30</option>
                                                    @endif
                                                @endfor
                                            </select>
                                            <div class="d-flex align-items-end">
                                                <small>hrs</small>
                                            </div>

                                            <select name="{{$day}}_to" id="{{$day}}_to" class="form-control mx-2"
                                                    disabled>
                                                @for($i = 0; $i < 24; $i++)
                                                    @if($i <= 9)
                                                        <option value="0{{$i}}:00">0{{$i}}:00</option>
                                                        <option value="0{{$i}}:30">0{{$i}}:30</option>
                                                    @else
                                                        <option value="{{$i}}:00">{{$i}}:00</option>
                                                        <option value="{{$i}}:30">{{$i}}:30</option>
                                                    @endif
                                                @endfor
                                            </select>
                                            <div class="d-flex align-items-end">
                                                <small>hrs</small>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                                {{--                                Meal Section--}}
                                <label class="font-bold my-3" for="">Hora de comida</label>

                                <div class="d-flex align-items-center">
                                    <div class="col-1">
                                        <input name="meal_time" id="meal_time" value="1" type="checkbox"
                                               class="rounded" x-on:click="isMealTime('meal_time')">
                                    </div>
                                    <div class="col-2">
                                        {{__('Comida')}}
                                    </div>
                                    {{--                                    Hours in working day--}}
                                    <div class="col-3 d-flex mb-2">
                                        <select name="meal_time_from" id="meal_time_from" class="form-control mx-2"
                                                disabled>
                                            @for($i = 0; $i < 24; $i++)
                                                @if($i <= 9)
                                                    <option value="0{{$i}}:00">0{{$i}}:00</option>
                                                    <option value="0{{$i}}:30">0{{$i}}:30</option>
                                                @else
                                                    <option value="{{$i}}:00">{{$i}}:00</option>
                                                    <option value="{{$i}}:30">{{$i}}:30</option>
                                                @endif
                                            @endfor
                                        </select>
                                        <div class="d-flex align-items-end">
                                            <small>hrs</small>
                                        </div>

                                        <select name="meal_time_to" id="meal_time_to" class="form-control mx-2"
                                                disabled>
                                            @for($i = 0; $i < 24; $i++)
                                                @if($i <= 9)
                                                    <option value="0{{$i}}:00">0{{$i}}:00</option>
                                                    <option value="0{{$i}}:30">0{{$i}}:30</option>
                                                @else
                                                    <option value="{{$i}}:00">{{$i}}:00</option>
                                                    <option value="{{$i}}:30">{{$i}}:30</option>
                                                @endif
                                            @endfor
                                        </select>
                                        <div class="d-flex align-items-end">
                                            <small>hrs</small>
                                        </div>

                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">{{__('Save')}}</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        {{--    Working day Table--}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            @if(!count($workDays))
                <div class="col-12 text-center">
                    {{__('No records')}}
                </div>
            @else
                <table class="table">
                    <tr>
                        <th>{{__('Working day')}}</th>
                        <th class="text-center">{{__('Type of shift')}}</th>
                        <th class="text-center">{{__('Worked days')}}</th>
                        <th colspan="3"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </table>
                {{--ACCORDION--}}
                <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                    <div class="accordion" id="newItem">

                        @foreach($workDays as $workday)

                            {{--Creating array with worked days capitalizing names--}}
                            @php
                                $daysOfWork = [];
                                foreach ($daysArray as $newDay){
                                    $newDay = strtolower($newDay);
                                    if($workday[strtolower($newDay)] == 1){
                                        array_push($daysOfWork, ucfirst($newDay));
                                    }
                                }
                            @endphp

                            <div class="accordion-item">
                                <div class="accordion-header mr-4" id="headingOne">
                                    <table class="table">

                                        <td style="width: 30%">{{__($workday->name)}}</td>
                                        <td style="width: 35%">{{__($workday->workday_type)}}</td>
                                        <td style="width: 25%">{{__(count($daysOfWork))}}</td>
                                        <td style="width: 2%" colspan="3"></td>
                                        <td style="width: 3%">
                                            <button type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-{{$workday->id}}"
                                                    aria-expanded="false" aria-controls="collapseS1">
                                                <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                            </button>
                                        </td>
                                        <td style="width: 3%"><a
                                                href="{{route('business-working-day.edit', $workday->id)}}">
                                                <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                        </td>
                                        <form action="{{route('business-working-day.destroy', $workday->id)}}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td style="width: 3%">
                                                <button type="submit"
                                                        onclick="return confirm('¿Estás seguro de eliminar este registro?')">
                                                    <i class="fas fa-trash-alt text-gray-400"></i>
                                                </button>
                                            </td>
                                        </form>

                                    </table>
                                </div>
                                <div id="collapse-{{$workday->id}}" class="accordion-collapse collapse"
                                     aria-labelledby="headingOne"
                                     data-bs-parent="#newItem">
                                    <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                        <div class="flex">
                                            <div class="flex-1 text-left w-1/2"><label
                                                    class="my-2">{{__('Name')}}</label>
                                            </div>
                                            <div class="flex-2 text-left w-1/2"><label
                                                    class="my-2 font-bold">{{$workday->name}}</label>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="flex-1 text-left w-1/2"><label
                                                    class="my-2">{{__('Type of shift')}}</label></div>
                                            <div class="flex-2 text-left w-1/2"><label
                                                    class="my-2 font-bold">{{ucfirst($workday->workday_type)}}</label>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="flex-1 text-left w-1/2"><label
                                                    class="my-2">{{__('Days')}}</label>
                                            </div>
                                            <div class="flex-2 text-left w-1/2">
                                                <label class="my-2 font-bold">
                                                    {{--Function to remove comma of the last element--}}
                                                    @if(count($daysOfWork))
                                                        @foreach($daysOfWork as $key => $day)
                                                            @if(($key + 1) == count($daysOfWork))
                                                                {{__($day)}}
                                                            @else
                                                                {{__($day)}},
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        {{__('No records')}}
                                                    @endif
                                                </label>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="flex-1 text-left w-1/2"><label
                                                    class="my-2">{{__('Meal hours')}}</label>
                                            </div>
                                            <div class="flex-2 text-left w-1/2">
                                                <label class="my-2 font-bold">
                                                    @if($workday->meal_time)
                                                        {{substr($workday->meal_time_from, 0, -3)}} <small>hrs</small>
                                                        - {{ substr($workday->meal_time_to, 0, -3) }} <small>hrs</small>
                                                    @else
                                                        {{__('No records')}}
                                                    @endif
                                                </label>
                                            </div>
                                        </div>

                                        {{--                                    Table to show Workdays and schedules--}}
                                        @php
                                            $lowerWorkDays = [];
                                                foreach ($daysOfWork as $day){
                                                    array_push($lowerWorkDays, strtolower($day));
                                                }
                                        @endphp

                                        <table class="table table-striped mt-4">
                                            <thead>
                                            <th>Días de trabajo</th>
                                            <th>Horario de entrada</th>
                                            <th>Horario de salida</th>
                                            </thead>

                                            @if(!count($lowerWorkDays))
                                                <tbody>
                                                <td colspan="3" class="text-center py-4">
                                                    <b>{{__('No records')}}</b>
                                                </td>
                                                </tbody>
                                            @else
                                                @foreach($lowerWorkDays as $day)
                                                    <tbody>
                                                    <td>{{__($day)}}</td>
                                                    <td>{{substr($workday[$day . '_from'],0 , -3) }} <small>hrs</small>
                                                    </td>
                                                    <td>{{substr($workday[$day . '_to'],0 , -3) }} <small>hrs</small>
                                                    </td>
                                                    </tbody>
                                                @endforeach
                                            @endif

                                        </table>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif

        </div>

        {{--    Festive day Section--}}
        <div class="container" x-data="festiveConditionals()">

            {{--            Header--}}
            <h2 class="bg-blueSteel py-2 px-3 mb-2 mt-3 rounded">
                <i class="fak fa-admin-perzona mr-2"></i>
                <span style="display: inline-flex;">{{ __('Holidays') }}</span>
            </h2>

            {{--Nuevo día festivo ----------------}}
{{--TODO: create component--}}
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

                        <div id="collapseP1" class="accordion-collapse collapse p-0"
                             aria-labelledby="headingTwo" data-bs-parent="#newPosition">
                            <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                                <form action="{{route('business-festive-days.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-bold" for="name">{{__('Name')}}</label>
                                        <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name" name="name" required>
                                    </div>
                                    {{--TODO: MAKE COMPONENT--}}
                                    <div class="d-flex">
                                        <div class="col-3 d-flex flex-column pe-5">
                                            <label for="" class="my-2 font-bold">{{__('Date')}}</label>
                                            <input type="date" name="date" id="date" class="form-control date-height" required>
                                        </div>
                                        <div class="col-3">
                                            <label for="" class="my-2 font-bold">{{__('Se labora')}}</label>
                                            <div class="d-flex flex-column">
                                                <div>
                                                    <input type="radio" name="working" id="working" value="1"
                                                           x-on:click="working('y')" checked>
                                                    <label for="working">{{__('Yes')}}</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="working" id="working2" value="0"
                                                           x-on:click="working('n')">
                                                    <label for="working2">{{__('No')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2" id="all_day_buttons">
                                            <label for="" class="my-2 font-bold">{{__('All day')}}</label>
                                            <div class="d-flex flex-column">
                                                <div class="form-group mb-0">
                                                    <label for="schedule_all_day">{{__('Yes')}}</label>
                                                    <input type="radio" name="schedule_all_day" id="schedule_all_day" value="1" x-on:click="working('all_day')">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label for="schedule_all_day_2">{{__('No')}}</label>
                                                    <input type="radio" name="schedule_all_day" id="schedule_all_day_2" value="0" checked x-on:click="working('not_all_day')">

                                                </div>
                                            </div>
                                        </div>
                                        {{--TODO: MAKE COMPONENT --}}
                                        <div class="col-4 d-flex flex-column" id="schedule_buttons">
                                            <label for="" class="my-2 font-bold">{{__('Horario')}}</label>
                                            <div>
                                                <select name="schedule_from" id="schedule_from" class="rounded">
                                                    @for($i = 0; $i < 24; $i++)
                                                        @if($i <= 9)
                                                            <option value="0{{$i}}:00">0{{$i}}:00</option>
                                                            <option value="0{{$i}}:30">0{{$i}}:30</option>
                                                        @else
                                                            <option value="{{$i}}:00">{{$i}}:00</option>
                                                            <option value="{{$i}}:30">{{$i}}:30</option>
                                                        @endif
                                                    @endfor
                                                </select>
                                                <select name="schedule_to" id="schedule_to" class="rounded mx-3">
                                                    @for($i = 0; $i < 24; $i++)
                                                        @if($i <= 9)
                                                            <option value="0{{$i}}:00">0{{$i}}:00</option>
                                                            <option value="0{{$i}}:30">0{{$i}}:30</option>
                                                        @else
                                                            <option value="{{$i}}:00">{{$i}}:00</option>
                                                            <option value="{{$i}}:30">{{$i}}:30</option>
                                                        @endif
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
            function selectConditionals() {
                return {
                    // Function to toggle in disabled attribute in select hours button
                    isDisabled(nameButton) {
                        let buttonFrom = document.getElementById(nameButton + '_from')
                        let buttonTo = document.getElementById(nameButton + '_to')
                        buttonFrom.toggleAttribute("disabled")
                        buttonTo.toggleAttribute("disabled")
                    },
                    // Function to toggle in disabled attribute in meal select buttons
                    isMealTime(nameButton) {
                        let buttonFrom = document.getElementById(nameButton + '_from')
                        let buttonTo = document.getElementById(nameButton + '_to')
                        buttonFrom.toggleAttribute("disabled")
                        buttonTo.toggleAttribute("disabled")
                    }
                }
            }

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

