<div>

    {{-- Error validation message--}}
    <x-forms.error-validation-message classes="mt-3"/>

    <x-utilities.section-header title="Holidays" classes="mt-3"/>

    {{--Create new holiday--}}
    <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition" x-data="festiveConditionals()">

        <div class="accordion-item bg-blueSteel py-2 ps-3 mb-2 rounded">
            <div class="accordion-header mr-4" id="headingOne">

                <div class="flex">
                    <div class="flex-1 pb-2">{{__('New holiday')}}</div>
                    <div class="flex-2">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseP1" aria-expanded="false" aria-controls="collapseP1">
                            <i class="fas fa-plus-circle mr-3"></i>
                        </button>
                    </div>
                </div>
                <div id="collapseP1" class="accordion-collapse collapse p-0" aria-labelledby="headingTwo" data-bs-parent="#newPosition">
                    <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                        {{--Form--}}
                        <form wire:submit.prevent="store">
                            <div class="form-group margin-b-0">
                                <label class="font-bold" for="name">{{__('Name')}}</label>
                                <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white form-control" type="text" wire:model.defer="name">
                            </div>
                            <div class="d-flex">
                                <div class="col-3 d-flex flex-column pe-5">
                                    <label for="" class="my-2 font-bold">{{__('Date')}}</label>
                                    <input type="date" name="date" id="date" class="form-control date-button-h" wire:model.defer="date">
                                </div>
                                <div class="col-3">
                                    <label for="" class="my-2 font-bold">{{__('Do you work')}}</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="working" id="working" value="1" x-on:click="working('y')" checked wire:model.defer="working">
                                        <label class="form-check-label" for="working">{{__('Yes')}}</label>
                                    </div>
                                    <div class="form-group margin-b-0">
                                        <input class="form-check-input" type="radio" name="working" id="working2" value="0" x-on:click="working('n')" wire:model.defer="working">
                                        <label class="form-check-label" for="working2">{{__('No')}}</label>
                                    </div>
                                </div>
                                <div class="col-2" id="all_day_buttons">
                                    <label for="" class="my-2 font-bold">{{__('All day')}}</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="schedule_all_day" id="schedule_all_day" class="form-check-input" value="1" x-on:click="working('all_day')" wire:model.defer="schedule_all_day">
                                        <label class="form-check-label" for="schedule_all_day">{{__('Yes')}}</label>
                                    </div>
                                    <div class="form-group margin-b-0">
                                        <input class="form-check-input" type="radio" name="schedule_all_day" id="schedule_all_day_2" value="0" checked x-on:click="working('not_all_day')" wire:model.defer="schedule_all_day">
                                        <label class="form-check-label" for="schedule_all_day_2">{{__('No')}}</label>
                                    </div>
                                </div>

                                {{--Hours Components--}}
                                <div class="col-4 d-flex flex-column" id="schedule_buttons">
                                    <label for="" class="my-2 font-bold">{{__('Horario')}}</label>
                                    <div class="d-flex">

                                        <x-utilities.hours-select-button id="schedule_from" name="schedule_from" classes="me-3" attribs="" livewire="schedule_from" value=""/>

                                        <x-utilities.hours-select-button id="schedule_to" name="schedule_to" classes="me-3" attribs="" livewire="schedule_to" value=""/>

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

    {{--Holiday's table--}}
    <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

        {{--Oficial Holidays--}}
        <div class=" pt-3 pb-4">

            <h2 class="mb-3">{{__('Official holidays in Mexico')}}</h2>
            {{--Loop to print each of a month from our monthsArray--}}
            @foreach($monthsArray as $month)
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        {{__($month)}}
                    </div>
                    @foreach($festiveDays as $festiveDay)
                        {{--Conditional to know if exist a festive day in row month and print it, else print empty--}}
                        @if(\Carbon\Carbon::create($festiveDay->date)->format('F') == $month)
                            <div class="flex-1">
                                {{--Function to print date with current year--}}
                                {{__(\Carbon\Carbon::create($currentYear . '-' . substr($festiveDay->date, 5, 5))->format('l')) . ', ' . substr(formatDate($festiveDay->date), 0, -4) . ' ' . $currentYear }}
                                | <b>{{$festiveDay->name}}</b>
                            </div>
                        @endif
                    @endforeach

                </div>
            @endforeach

        </div>

        <hr>

        {{--Company Holidays--}}
        <div class="mt-4 pb-2" x-data="data()">
            <h2 class="mb-3">{{__('Company holidays')}}
                <i x-on:click="isOpen()" class="fas fa-edit text-gray-400 cursor-pointer hover:text-gray-700 ms-2"></i>
            </h2>

            @if(count($festiveBusinessesDays))

                @foreach($festiveBusinessesDays as $festiveDay)
                    <div class="flex py-2">
                        <div class="flex-1 text-gray-500">
                            <div class="d-flex">
{{--                                <form class="d-none holiday-button" method="POST" action="{{route('business-festive-days.destroy', $festiveDay)}}">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
                                    <button class="d-none holiday-button" type="submit" wire:click="$emit('deleteMessage', {{$festiveDay->id}})">
                                        <i class="fas fa-trash-alt hover:text-red-500 text-gray-400 me-3"></i>
                                    </button>
{{--                                </form>--}}
                                <a href="{{route('business-festive-days.edit', $festiveDay)}}" class="d-none holiday-button">
                                    <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer me-3"></i>
                                </a>
                                {{__(\Carbon\Carbon::create($festiveDay->date)->format('F'))}}
                            </div>
                        </div>
                        <div class="flex-1">
                            {{--Function to print date with current year--}}
                            {{__(\Carbon\Carbon::create($currentYear . '-' . substr($festiveDay->date, 5, 5))->format('l')) . ', ' . substr(formatDate($festiveDay->date), 0, -4) . ' ' . $currentYear }}
                            | <b>{{$festiveDay->name}}</b> |
                            @if(!$festiveDay->working)
                                {{__('Descanso')}}
                            @elseif($festiveDay->working)
                                @if($festiveDay->schedule_all_day)
                                    {{__('Horario laboral: Regular')}}
                                @else
                                    {{__('Horario laboral: ' . substr($festiveDay->schedule_from, 0, 5) . ' - ' . substr($festiveDay->schedule_to, 0, 5))}}
                                    <small>hrs</small>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach

            @else
                <div class="w-full text-center py-4 my-2 bg-gray-100 rounded">
                    <b>{{__('No records')}}</b>
                </div>
            @endif
        </div>

    </div>

</div>

@push('inline_scripts')

    {{--Working days function--}}
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

    {{--Holidays table function--}}
    <script defer>

        function data() {
            return {
                // Function to show and hide edit and delete icons in company holidays
                isOpen() {
                    const holidayButtons = document.querySelectorAll('.holiday-button')
                    holidayButtons.forEach(button => {
                        if (button.classList.contains('d-none')) {
                            button.classList.remove('d-none')
                        } else {
                            button.classList.add('d-none')
                        }
                    })
                }
            }
        }

    </script>

@endpush
