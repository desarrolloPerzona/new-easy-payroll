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
                <th colspan="6"></th>
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
                                <td style="width: 3%">
                                    <a href="{{route('business-working-day.edit', $workday->id)}}">
                                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </a>
                                </td>
                                <td style="width: 3%">
                                    <button wire:click="$emit('deleteMessage', {{$workday->id}})">
                                        <i class="fas fa-trash-alt text-gray-400 hover:text-red-500"></i>
                                    </button>
                                </td>
                            </table>
                        </div>
                        <div id="collapse-{{$workday->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2">
                                        <label class="my-2">{{__('Name')}}</label>
                                    </div>
                                    <div class="flex-2 text-left w-1/2">
                                        <label class="my-2 font-bold">{{$workday->name}}</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2">
                                        <label class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flex-2 text-left w-1/2">
                                        <label class="my-2 font-bold">{{ucfirst($workday->workday_type)}}</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2">
                                        <label class="my-2">{{__('Days')}}</label>
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
                                    <div class="flex-1 text-left w-1/2">
                                        <label class="my-2">{{__('Meal hours')}}</label>
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

                                {{--Table to show Workdays and schedules--}}
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
                                            <td>{{substr($workday[$day . '_from'],0 , -3) }} <small>hrs</small></td>
                                            <td>{{substr($workday[$day . '_to'],0 , -3) }} <small>hrs</small></td>
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
