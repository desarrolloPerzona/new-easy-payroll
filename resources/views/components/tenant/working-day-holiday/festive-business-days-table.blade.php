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
                            <form class="d-none holiday-button" method="POST"
                                  action="{{route('business-festive-days.destroy', $festiveDay)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('¿Estás seguro de eliminar este registro?')">
                                    <i class="fas fa-trash-alt hover:text-red-500 text-gray-400 me-3"></i>
                                </button>
                            </form>
                            <a class="d-none holiday-button"><i
                                    class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer me-3"></i></a>
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
