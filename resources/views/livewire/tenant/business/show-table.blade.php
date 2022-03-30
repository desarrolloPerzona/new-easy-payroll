<div class="card bg-white dark:bg-gray-600 dark:text-white shadow-sm rounded p-4 my-2 mx-auto">

    @if(!count($businesses))
        <div class="col-12 text-center">
            {{__('No records')}}
        </div>
    @else

        {{--Titles header--}}
        <div class="col-12 d-flex p-3">
            <div class="col-4"><b>{{__('Name')}}</b></div>
            <div class="col-4"><b>{{__('Branches')}}</b></div>
            <div class="col-2"><b>{{__('Created at')}}</b></div>
        </div>

        <div class="accordion" id="newItem">
            @foreach($businesses as $business)
                <div class="accordion-item">

                    {{--Header Accordion--}}
                    <div class="accordion-header" id="headingOne">
                        <div class="col-12 d-flex p-3">
                            <div class="col-4">{{$business->name}}</div>
                            <div class="col-4">{{count($business->branches)}}
                                <button type="button" data-bs-toggle="collapse" class="tool-tip"
                                        data-bs-target="#collapse-{{$business->id}}"
                                        aria-expanded="false" aria-controls="collapseS1"
                                        data-tippy-content="{{__('Show branches')}}" data-tippy-duration="0">
                                    <i class="fa-solid fa-arrow-down-short-wide ms-4 text-gray-400 hover:text-gray-800"></i>
                                </button>
                            </div>
                            <div class="col-2">{{formatDate($business->created_at)}}</div>
                            <div class="col-2 gap-3 d-flex justify-content-end pe-3">
                                <a href="{{route('business.edit', $business->id)}}">
                                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                </a>
                                <a href="{{route('business-working-day.edit', $business->id)}}"
                                   class="text-decoration-none">
                                    <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                </a>
                                @if($business->id === 1)
                                    <a href="#" class="tool-tip" data-tippy-content="{{__('You cannot delete the main business')}}" data-tippy-duration="0">
                                        <i class="fas fa-trash-alt text-gray-200"></i>
                                    </a>
                                @else
                                    <a wire:click="$emit('deleteMessageSecond', {{$business->id}})">
                                        <i class="fas fa-trash-alt text-gray-400 hover:text-red-500 cursor-pointer"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{--Body info accordion--}}
                    <div id="collapse-{{$business->id}}" class="accordion-collapse collapse"
                         aria-labelledby="headingOne" data-bs-parent="#newItem">
                        <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                            <table class="table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Municipality')}}</th>
                                    <th colspan="2">{{__('State')}}</th>
                                </tr>
                                </thead>
                                @if(!count($businesses))
                                    <tbody>
                                    <td colspan="3" class="text-center py-4">
                                        <b>{{__('No records')}}</b>
                                    </td>
                                    </tbody>
                                @else
                                    <tbody>
                                    <tr>
                                        <td>{{$business->name}}</td>

                                        @if($business->municipality)
                                            <td>{{$business->municipality}}</td>
                                        @else
                                            <td>{{__('No records')}}</td>
                                        @endif

                                        @if($business->state)
                                            <td>{{$business->state}}</td>
                                        @else
                                            <td>{{__('No records')}}</td>
                                        @endif

                                        <td class="d-flex gap-3 justify-content-end pe-4">
                                            <a href="{{route('business.edit', $business->id)}}" class="text-decoration-none">
                                                <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                            </a>
                                            <a href="{{route('business-working-day.edit', $business->id)}}"
                                               class="text-decoration-none">
                                                <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                            </a>
                                            <a wire:click="$emit('deleteMessageSecond', {{$business->id}})">
                                                <i class="fas fa-trash-alt text-gray-400 hover:text-red-500 cursor-pointer"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endif
                            </table>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endif

</div>
