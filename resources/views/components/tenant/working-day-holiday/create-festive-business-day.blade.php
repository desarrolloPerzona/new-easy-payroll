{{--Nuevo día festivo ----------------}}
<div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition" x-data="festiveConditionals()">

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

                    {{--Form--}}
                    <form action="{{route('business-festive-days.store')}}" method="POST">
                        @csrf
                        <div class="form-group margin-b-0">
                            <label class="font-bold" for="name">{{__('Name')}}</label>
                            <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white form-control" type="text" id="name" name="name" required>
                        </div>
                        <div class="d-flex">
                            <div class="col-3 d-flex flex-column pe-5">
                                <label for="" class="my-2 font-bold">{{__('Date')}}</label>
                                <input type="date" name="date" id="date" class="form-control date-button-h" required>
                            </div>
                            <div class="col-3">
                                <label for="" class="my-2 font-bold">{{__('Do you work')}}</label>
                                <div class="form-group margin-b-0">
                                    <input type="radio" name="working" id="working" value="1"
                                           x-on:click="working('y')" checked>
                                    <label for="working">{{__('Yes')}}</label>
                                </div>
                                <div class="form-group margin-b-0">
                                    <input type="radio" name="working" id="working2" value="0"
                                           x-on:click="working('n')">
                                    <label for="working2">{{__('No')}}</label>
                                </div>
                            </div>
                            <div class="col-2" id="all_day_buttons">
                                <label for="" class="my-2 font-bold">{{__('All day')}}</label>
                                <div class="form-group margin-b-0">
                                    <input type="radio" name="schedule_all_day" id="schedule_all_day" value="1" x-on:click="working('all_day')">
                                    <label for="schedule_all_day">{{__('Yes')}}</label>
                                </div>
                                <div class="form-group margin-b-0">
                                    <input type="radio" name="schedule_all_day" id="schedule_all_day_2" value="0" checked x-on:click="working('not_all_day')">
                                    <label for="schedule_all_day_2">{{__('No')}}</label>
                                </div>
                            </div>

                            {{--Hours Component--}}
                            <div class="col-4 d-flex flex-column" id="schedule_buttons">
                                <label for="" class="my-2 font-bold">{{__('Horario')}}</label>
                                <div class="d-flex">
                                    <x-utilities.hours-select-button id="schedule_from" name="schedule_from" classes="me-3" attribs=""/>
                                    <x-utilities.hours-select-button id="schedule_to" name="schedule_to" classes="" attribs=""/>
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
