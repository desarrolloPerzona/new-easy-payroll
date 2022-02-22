<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

    <div class="border-bottom-1 border-gray-400 py-3">

        <h2 class="mb-3">Festivos oficiales México</h2>
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

    <div class="border-bottom-1 border-gray-400 py-3">
        <h2 class="mb-3">{{__('Festivos empresa')}} <i class="fas fa-edit text-gray-400"></i></h2>
        @foreach($festiveBusinessesDays as $festiveDay)
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    {{__(\Carbon\Carbon::create($festiveDay->date)->format('F'))}}
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
    </div>

</div>
