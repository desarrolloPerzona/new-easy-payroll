{{--    New Working day Accordion--}}
<div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="workingDayAccordion"
     x-data="selectConditionals()">
    <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
        {{-- Accordion header New WorkingDay --}}
        <div class="accordion-header mr-4" id="headingWorkingDay">
            <div class="flex">
                <div class="flex-1 pb-2">{{__('New working day')}}</div>
                <div class="flex-2">
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#workingDayCollapse" aria-expanded="false" aria-controls="workingDayCollapse">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
        {{-- Accordion Body --}}
        <div id="workingDayCollapse" class="accordion-collapse collapse" aria-labelledby="headingWorkingDay" data-bs-parent="#workingDayAccordion">
            <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                {{--Working day Form--}}
                <form name="newForm" action="{{route('business-working-day.store')}}" method="POST" class="text-black rounded">
                    @csrf
                    <div class="d-flex col-12 justify-around">
                        <div class="mb-3 pe-2 col-6">
                            <label for="name" class="form-label font-bold">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                        </div>

                        <div class="mb-3 ps-2 col-6">
                            <label for="workingDaySelect" class="form-label font-bold">{{__('Type of shift')}}</label>
                            <select name="workday_type" id="workday_type" class="form-control" required>
                                <option value="">{{__('Select')}}</option>
                                @foreach($workdayTypes as $type)
                                    <option value="{{$type}}">{{__(ucfirst($type))}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="mb-3">

                        {{--Working days section--}}
                        <label class="font-bold mb-3" for="">Días de la semana</label>

                        {{--WorkingDays Loop--}}
                        @foreach($daysArray as $day)

                            <div class="d-flex align-items-center">
                                @php
                                    $day = strtolower($day);
                                @endphp
                                <div class="col-1">
                                    <input type="checkbox" name="{{$day}}" id="{{$day}}" value="1" class="rounded" x-on:click="isDisabled(`{{$day}}`)">
                                </div>

                                <div class="col-2">
                                    {{__($day)}}
                                </div>

                                {{--Hours in working day--}}
                                <div class="col-3 d-flex mb-2">

                                    {{--Hours select component--}}
                                    <x-utilities.hours-select-button id="{{$day}}_from" name="{{$day}}_from" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>

                                    <div class="d-flex align-items-end">
                                        <small>hrs</small>
                                    </div>

                                    <x-utilities.hours-select-button id="{{$day}}_to" name="{{$day}}_to" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>

                                    <div class="d-flex align-items-end">
                                        <small>hrs</small>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                        {{--Meal Section--}}
                        <label class="font-bold my-3" for="">Hora de comida</label>

                        <div class="d-flex align-items-center">
                            <div class="col-1">
                                <input name="meal_time" id="meal_time" value="1" type="checkbox"
                                       class="rounded" x-on:click="isMealTime('meal_time')">
                            </div>
                            <div class="col-2">
                                {{__('Comida')}}
                            </div>

                            {{--Hours in working day--}}
                            <div class="col-3 d-flex mb-2">

                                <x-utilities.hours-select-button id="meal_time_from" name="meal_time_from" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>

                                <div class="d-flex align-items-end">
                                    <small>hrs</small>
                                </div>

                                <x-utilities.hours-select-button id="meal_time_to" name="meal_time_to" classes="form-control mx-2" attribs="disabled" value="" livewire=""/>

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

{{--Function to toggle in disabled attribute in select hours button--}}
<script defer>
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
</script>
