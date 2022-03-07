<x-app-tenant>
    <div class="container mx-auto" x-data="festiveConditionals()">

        {{-- Error Validation message--}}
        <x-forms.error-validation-message classes=""/>

        {{--Edit Header--}}
        <x-utilities.section-header title="Edit working day holiday" classes="mb-4"/>

        {{--Form to edit a workingday--}}
        <div class="card bg-white shadow-sm rounded p-0 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white"
             x-data="selectConditionals()">

            <div class="p-3 text-dark rounded dark:bg-dark dark:text-white">
                <form action="{{route('business-festive-days.update', $businessFestiveDay)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label font-bold">{{__('Name')}}</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$businessFestiveDay->name}}">
                    </div>
                    <div class="d-flex">
                        <div class="col-3 d-flex flex-column pe-5">
                            <label for="date" class="my-2 font-bold">{{__('Date')}}</label>
                            <input type="date" name="date" id="date" class="form-control date-button-h" value="{{$businessFestiveDay->date}}" required>
                        </div>
                        <div class="col-3">
                            <label for="" class="my-2 font-bold">{{__('Do you work')}}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="working" id="working" value="1" x-on:click="working('y')" @if($businessFestiveDay->working == 1) checked @endif>
                                <label class="form-check-label" for="working">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="working" id="working2" value="0" x-on:click="working('n')" @if($businessFestiveDay->working != 1) checked @endif>
                                <label class="form-check-label" for="working2">{{__('No')}}</label>
                            </div>
                        </div>
                        <div class="col-2 @if($businessFestiveDay->working != 1) d-none @endif" id="all_day_buttons">
                            <label for="" class="my-2 font-bold">{{__('All day')}}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="schedule_all_day" id="schedule_all_day" value="1" x-on:click="working('all_day')" @if($businessFestiveDay->schedule_all_day == 1) checked @endif>
                                <label class="form-check-label" for="schedule_all_day">{{__('Yes')}}</label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="schedule_all_day" id="schedule_all_day_2" value="0" x-on:click="working('not_all_day')" @if($businessFestiveDay->schedule_all_day != 1) checked @endif>
                                <label class="form-check-label" for="schedule_all_day_2">{{__('No')}}</label>
                            </div>
                        </div>

                        {{--Hours Component--}}
                        <div class="col-4 d-flex flex-column @if($businessFestiveDay->schedule_all_day == 1) d-none @endif @if($businessFestiveDay->working != 1) d-none @endif" id="schedule_buttons">
                            <label for="" class="my-2 font-bold">{{__('Horario')}}</label>
                            <div class="d-flex">

                                <x-utilities.hours-select-button id="schedule_from" name="schedule_from" classes="me-3" attribs="" value="{{$businessFestiveDay->schedule_from}}" livewire=""/>
                                <x-utilities.hours-select-button id="schedule_to" name="schedule_to" classes="" attribs="" value="{{$businessFestiveDay->schedule_to}}" livewire=""/>

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
