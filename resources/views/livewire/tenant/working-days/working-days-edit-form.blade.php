<div class="container mx-auto">

    {{-- Error Validation message--}}
    <x-forms.error-validation-message classes=""/>

    {{-- Alert Message--}}
    <x-forms.alert-message classes=""/>

    {{--Edit Header--}}
    <x-utilities.section-header title="Edit working day" classes="mb-4"/>

    {{--Form to edit a workingday--}}
    <div class="card bg-white shadow-sm rounded p-0 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white"
         x-data="selectConditionals()">

        <div class="accordion-body text-dark rounded dark:bg-dark dark:text-white">

            {{--Working day Form--}}
            <form action="{{route('business-working-day.update', $businessWorkday->id)}}" method="POST"
                  class="text-black rounded">
                @csrf
                @method('PATCH')
                <div class="d-flex col-12 justify-around">
                    <div class="mb-3 pe-2 col-6">
                        <label for="name" class="form-label font-bold">{{__('Name')}}</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$businessWorkday->name}}" required>
                    </div>
                    <div class="mb-3 ps-2 col-6">

                        <label for="workingDaySelect" class="form-label font-bold">{{__('Type of shift')}}</label>

                        <select name="workday_type" id="workday_type" class="form-control" required>
                            <option value="{{$businessWorkday->workday_type}}">
                                {{ucfirst($businessWorkday->workday_type)}}
                            </option>
                            {{--Loop to remove type option that contains our workday--}}
                            @for($i = 0; $i < count($workdayTypes); $i++)
                                @if($workdayTypes[$i] != $businessWorkday->workday_type)
                                    <option value="{{$workdayTypes[$i]}}">
                                        {{__(ucfirst($workdayTypes[$i]))}}
                                    </option>
                                @endif
                            @endfor
                        </select>

                    </div>
                </div>

                <div class="mb-3">

                    {{--Working days section--}}
                    <label class="font-bold mb-3" for="">Días de la semana</label>

                    {{--WorkingDays Loop--}}
                    @foreach($daysArray as $day)

                        <div class="d-flex align-items-center py-3">
                            @php
                                $day = strtolower($day);
                            @endphp
                            <div class="col-1">
                                <input type="checkbox" name="{{$day}}" id="{{$day}}" value="1" class="rounded" x-on:click="isDisabled(`{{$day}}`)">
                            </div>

                            <div class="col-2">
                                {{__($day)}}
                            </div>

                            {{--                                    Hours in working day--}}
                            @if($businessWorkday[$day])

                                @if($businessWorkday[$day . '_from'])

                                    {{--Hours detail section--}}
                                    <div class="col-3 d-flex" id="hours-{{$day}}">
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

                                        {{--Trash button--}}
                                        <div class="ms-3">
                                            <td style="width: 3%">
                                                <a href="{{route('deleteWorkdayHour', [$businessWorkday->id, $day])}}">
                                                    <i class="fas fa-trash-alt text-gray-400"></i>
                                                </a>
                                            </td>
                                        </div>
                                    </div>

                                    {{--Select section--}}
                                    <div class="col-3 d-flex mb-2 d-none" id="select-{{$day}}">

                                        <x-utilities.hours-select-button id="{{$day}}_from" name="{{$day}}_from" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>

                                        <div class="d-flex align-items-end">
                                            <small>hrs</small>
                                        </div>

                                        <x-utilities.hours-select-button id="{{$day}}_to" name="{{$day}}_to" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>
                                        <div class="d-flex align-items-end">
                                            <small>hrs</small>
                                        </div>

                                    </div>

                                @endif

                            @else
                                <p class="m-0" id="hours-{{$day}}">-</p>

                                {{--Select section--}}
                                <div class="col-3 d-flex mb-2 d-none" id="select-{{$day}}">

                                    <x-utilities.hours-select-button id="{{$day}}_from" name="{{$day}}_from" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>
                                    <div class="d-flex align-items-end">
                                        <small>hrs</small>
                                    </div>

                                    <x-utilities.hours-select-button id="{{$day}}_to" name="{{$day}}_to" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>
                                    <div class="d-flex align-items-end">
                                        <small>hrs</small>
                                    </div>

                                </div>
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

                        {{--Hours in Meal day--}}
                        @if($businessWorkday->meal_time)

                            {{--Hours detail section--}}
                            <div class="col-3 d-flex" id="hours-meal_time">
                                <div class="d-flex align-items-end">
                                    {{__(substr($businessWorkday->meal_time_from, 0, -3))}}
                                    <small class="ms-1">hrs</small>
                                </div>
                                <div class="mx-3">
                                    |
                                </div>
                                <div class="d-flex align-items-end">
                                    {{__(substr($businessWorkday->meal_time_to, 0, -3))}}
                                    <small class="ms-1">hrs</small>
                                </div>

                                {{--Trash button meal_time--}}
                                <div class="ms-3">
                                    <td style="width: 3%">
                                        <a href="{{route('deleteHour', $businessWorkday->id)}}">
                                            <i class="fas fa-trash-alt text-gray-400"></i>
                                        </a>
                                    </td>
                                </div>

                            </div>

                            {{--Select section--}}
                            <div class="col-3 d-flex mb-2 d-none" id="select-meal_time">
                                <x-utilities.hours-select-button id="meal_time_from" name="meal_time_from" classes="form-control mx-2" attribs="" value="" livewire=""/>
                                <div class="d-flex align-items-end">
                                    <small>hrs</small>
                                </div>

                                <x-utilities.hours-select-button id="meal_time_to" name="meal_time_to" classes="form-control mx-2" attribs="" value="" livewire=""/>
                                <div class="d-flex align-items-end">
                                    <small>hrs</small>
                                </div>
                            </div>

                        @else
                            <p class="m-0" id="hours-meal_time">-</p>

                            {{--                                Select section--}}
                            <div class="col-3 d-flex mb-2 d-none" id="select-meal_time">

                                <x-utilities.hours-select-button id="meal_time_from" name="meal_time_from" classes="form-control mx-2" attribs="" value="" livewire=""/>
                                <div class="d-flex align-items-end">
                                    <small>hrs</small>
                                </div>

                                <x-utilities.hours-select-button id="meal_time_to" name="meal_time_to" classes="form-control mx-2" attribs="" value="" livewire=""/>
                                <div class="d-flex align-items-end">
                                    <small>hrs</small>
                                </div>

                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <button class="btn btn-primary" type="submit">{{__('Save')}}</button>
                        <a href="{{ route('working-day-holiday.index') }}" class="btn btn-danger ms-2 text-white">{{__('Go back')}}</a>
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
                // Function to show and hide select inputs depending of checkbox WORKDAY
                isDisabled(nameButton) {
                    let buttonFrom = document.getElementById(nameButton + '_from')
                    let buttonTo = document.getElementById(nameButton + '_to')
                    buttonFrom.toggleAttribute("disabled")
                    buttonTo.toggleAttribute("disabled")

                    let selectSection = document.getElementById('select-' + nameButton)
                    let hoursSection = document.getElementById('hours-' + nameButton)

                    if (selectSection.classList.contains('d-none')) {
                        selectSection.classList.remove('d-none')
                        hoursSection.classList.add('d-none')
                    } else {
                        selectSection.classList.add('d-none')
                        hoursSection.classList.remove('d-none')
                    }
                },
                // Function to show and hide select inputs according to checkbox MEAL TIME
                isMealTime(nameButton) {
                    let mealSelect = document.getElementById('select-' + nameButton)
                    let mealHours = document.getElementById('hours-' + nameButton)

                    if (mealSelect.classList.contains('d-none')) {
                        mealSelect.classList.remove('d-none')
                        mealHours.classList.add('d-none')
                    } else {
                        mealSelect.classList.add('d-none')
                        mealHours.classList.remove('d-none')
                    }
                }
            }
        }
    </script>
@endpush
