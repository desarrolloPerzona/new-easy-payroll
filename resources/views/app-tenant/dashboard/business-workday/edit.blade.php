<x-app-tenant>
    <div class="container mx-auto">

        {{--        Header--}}
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit working day') }}</span>
        </h2>

        {{--        Form to edit a workingday--}}
        <div class="card bg-white shadow-sm rounded p-0 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white"
             x-data="selectConditionals()">

            <div class="accordion-body text-dark rounded dark:bg-dark dark:text-white">

                {{--                        Working day Form--}}
                <form name="newForm" action="{{route('business-working-day.store')}}" method="POST"
                      class="text-black rounded">
                    @csrf
                    <div class="d-flex col-12 justify-around">
                        <div class="mb-3 pe-2 col-6">
                            <label for="name"
                                   class="form-label font-bold">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{$businessWorkday->name}}" required>
                        </div>
                        <div class="mb-3 ps-2 col-6">

                            <label for="workingDaySelect" class="form-label font-bold">{{__('Type of shift')}}</label>

                            <select name="workday_type" id="workday_type" class="form-control" required>
                                <option
                                    value="{{$businessWorkday->workday_type}}">{{ucfirst($businessWorkday->workday_type)}}</option>

                                {{--Loop to remove type option that contains our workday--}}
                                @for($i = 0; $i < count($workdayTypes); $i++)
                                    @if($workdayTypes[$i] != $businessWorkday->workday_type)
                                        <option value="$workdayTypes[$i]">{{__(ucfirst($workdayTypes[$i]))}}</option>
                                    @endif
                                @endfor
                            </select>

                        </div>
                    </div>

                    <div class="mb-3">

                        {{--                                Working days section--}}
                        <label class="font-bold mb-3" for="">Días de la semana</label>

                        {{--                                WorkingDays Loop--}}
                        @foreach($daysArray as $day)

                            <div class="d-flex align-items-center py-3">
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
                                @if($businessWorkday[$day])
                                    <div class="col-3 d-flex">
                                        @if($businessWorkday[$day . '_from'])

                                            <div class="d-flex align-items-end">
                                                {{__(substr($businessWorkday[$day . '_from'], 0, -3))}}
                                                <small class="ms-1">hrs</small>
                                            </div>
                                            <div class="mx-3">
                                                |
                                            </div>
                                            <div class="d-flex align-items-end">
                                                {{__(substr($businessWorkday[$day . '_to'], 0, -3))}}
                                                <small class="ms-1">hrs</small>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    -
                                @endif

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
                    // isMealTime(nameButton) {
                    //     let buttonFrom = document.getElementById(nameButton + '_from')
                    //     let buttonTo = document.getElementById(nameButton + '_to')
                    //     buttonFrom.toggleAttribute("disabled")
                    //     buttonTo.toggleAttribute("disabled")
                    // }
                }
            }
        </script>
    @endpush
</x-app-tenant>
