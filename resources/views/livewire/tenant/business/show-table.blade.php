<div class="card bg-white dark:bg-gray-600 dark:text-white shadow-sm rounded p-4  my-2 mx-auto">

    @if(!count($businesses))
        <div class="col-12 text-center">
            {{__('No records')}}
        </div>
    @else

        {{--Titles header--}}
        <div class="col-12 d-flex p-3">
            <div class="col-4"><b>{{__('Name')}}</b></div>
            <div class="col-4"><b>{{__('Branches')}}</b></div>
            <div class="col-2"><b>Nada</b></div>
        </div>


        <div class="accordion" id="newItem">

            @foreach($businesses as $business)

                <div class="accordion-item">

                    {{--Header Accordion--}}
                    <div class="accordion-header" id="headingOne">
                        <div class="col-12 d-flex p-3">
                            <div class="col-4">{{$business->name}}</div>
                            <div class="col-4">{{count($business->branches)}}
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{$business->id}}"
                                        aria-expanded="false" aria-controls="collapseS1">
                                    <i class="fa-solid fa-arrow-down-short-wide ms-4 text-gray-400 hover:text-gray-800"></i>
                                </button>
                            </div>
                            <div class="col-2">Primera</div>
                            <div class="col-2 gap-3 d-flex justify-content-end">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{$business->id}}"
                                        aria-expanded="false" aria-controls="collapseS1">
                                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                </button>
                                <a href="{{route('business-working-day.edit', $business->id)}}"
                                   class="text-decoration-none">
                                    <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                </a>
                                <button
                                    wire:click="$emit('deleteMessageSecond', {{$business->id}})">
                                    <i class="fas fa-trash-alt text-gray-400 hover:text-red-500"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{--Body info accordion--}}
                    <div id="collapse-{{$business->id}}" class="accordion-collapse collapse"
                         aria-labelledby="headingOne" data-bs-parent="#newItem">
                        <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                            <div class="flex">
                                <div class="flex-1 text-left w-1/2">
                                    <label class="my-2">{{__('Name')}}</label>
                                </div>
                                <div class="flex-2 text-left w-1/2">
                                    <label class="my-2 font-bold">{{$business->name}}</label>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/2">
                                    <label class="my-2">{{__('Type of shift')}}</label></div>
                                <div class="flex-2 text-left w-1/2">
                                    <label class="my-2 font-bold">{{ucfirst($business->name)}}</label>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/2">
                                    <label class="my-2">{{__('Days')}}</label>
                                </div>
                                <div class="flex-2 text-left w-1/2">
                                    <label class="my-2 font-bold">

                                    </label>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/2">
                                    <label class="my-2">{{__('Meal hours')}}</label>
                                </div>

                            </div>

                            <table class="table table-striped mt-4">
                                <thead>
                                <th>Días de trabajo</th>
                                <th>Horario de entrada</th>
                                <th>Horario de salida</th>
                                </thead>

                                @if(!count($businesses))
                                    <tbody>
                                    <td colspan="3" class="text-center py-4">
                                        <b>{{__('No records')}}</b>
                                    </td>
                                    </tbody>
                                @else

                                @endif

                            </table>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    @endif

    {{--    @foreach($businesses as $business)--}}
    {{--        <div class="mb-2 bg-blueSteel text-white shadow-sm dark:bg-gray-700 rounded">--}}
    {{--            <table class="table my-0">--}}
    {{--                <tr>--}}
    {{--                    <td class="text-white uppercase">--}}
    {{--                        {{$business->name}}--}}
    {{--                    </td>--}}
    {{--                    <td class="text-white">--}}
    {{--                        {{formatDate($business->created_at)}}--}}
    {{--                    </td>--}}
    {{--                    <td class="text-white">--}}
    {{--                        @if(!$business->business_name)--}}
    {{--                            <span class="text-warning"> {{__('You must fill out data')}}</span>--}}
    {{--                        @endif--}}
    {{--                    </td>--}}
    {{--                    <td class="flex flex-row-reverse">--}}
    {{--                        @if($business->id === 1)--}}
    {{--                        @else--}}
    {{--                            <form action="{{ route('business.destroy',$business->id) }}" method="POST">--}}
    {{--                                @csrf--}}
    {{--                                @method('DELETE')--}}
    {{--                                <button onclick="return confirm('¿Desea eliminar este registro?')" class="mx-2 tool-tip" data-tippy-content="{{__('Disable Business, all your current employees will be disabled')}}" data-tippy-duration="0"><i class="fad fa-unlink text-danger"></i></button>--}}
    {{--                            </form>--}}
    {{--                        @endif--}}
    {{--                        <a href="{{route('business.edit', $business->id)}}" class="no-underline">--}}
    {{--                            <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer mx-2" ></i>--}}
    {{--                        </a>--}}
    {{--                        <a href="{{route('business.show', $business->id)}}" class="no-underline">--}}
    {{--                            <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer mx-2"></i>--}}
    {{--                        </a>--}}
    {{--                    </td>--}}
    {{--                </tr>--}}
    {{--            </table>--}}
    {{--        </div>--}}
    {{--    @endforeach--}}
</div>
