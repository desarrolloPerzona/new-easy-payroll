<div id="collapseP1" class="accordion-collapse collapse p-0"
     aria-labelledby="headingTwo" data-bs-parent="#newPosition">
    <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
        <form action="{{route('business-festive-days.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label class="font-bold" for="name">{{__('Name')}}</label>
                <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name" name="name" required>
            </div>
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
