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
                                <a href="{{route('business.edit', $business->id)}}"
                                   class="text-decoration-none">
                                    <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                </a>
                                @if($business->id === 1)
                                    <a href="#" class="tool-tip" data-tippy-content="{{__('You cannot delete the main business')}}" data-tippy-duration="0">
                                        <i class="fas fa-trash-alt text-gray-200"></i>
                                    </a>
                                @else
                                    <a wire:click="$emit('deleteMessage', {{$business->id}})">
                                        <i class="fas fa-trash-alt text-gray-400 hover:text-red-500 cursor-pointer"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{--Body info accordion--}}
                    {{----------------------------BRANCHES SECTION-----------------}}
                    <div id="collapse-{{$business->id}}" class="accordion-collapse collapse"
                         aria-labelledby="headingOne" data-bs-parent="#newItem">
                        <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                            <div class="btn-top-holder my-3 flex-1">
                                <a href="{{route('branches.create', 2)}}" class="btn btn-dark float-right">
                                    <i class="fas fa-plus-circle"></i>
                                    {{ __('New branch') }}
                                </a>
                            </div>


                            <table class="table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Municipality')}}</th>
                                    <th colspan="2">{{__('State')}}</th>
                                </tr>
                                </thead>
                                @if(!count($business->branches))
                                    <tbody>
                                    <td colspan="3" class="text-center py-4">
                                        <b>{{__('No records')}}</b>
                                    </td>
                                    </tbody>
                                @else
                                    <tbody>
                                    @foreach($business->branches as $key => $branch)
                                    <tr>
                                        <td>{{$branch->name}}</td>

                                        @if($branch->municipality)
                                            <td>{{$branch->municipality}}</td>
                                        @else
                                            <td>{{__('No records')}}</td>
                                        @endif

                                        @if($branch->state)
                                            <td>{{$branch->state}}</td>
                                        @else
                                            <td>{{__('No records')}}</td>
                                        @endif

                                        <td class="d-flex gap-3 justify-content-end pe-4">
                                            <a href="{{route('business.edit', $branch->id)}}" class="text-decoration-none">
                                                <i class="fas fa-eye text-gray-600 hover:text-gray-700 cursor-pointer"></i>
                                            </a>
                                            <a href="{{route('branches.edit', $branch->id)}}"
                                               class="text-decoration-none">
                                                <i class="fas fa-edit text-gray-600 hover:text-gray-700 cursor-pointer"></i>
                                            </a>

                                            @if($key !== 0)
                                                <a wire:click="$emit('deleteMessageSecond', {{$branch->id}})">
                                                    <i class="fas fa-trash-alt text-gray-700 hover:text-red-500 cursor-pointer"></i>
                                                </a>
                                            @else
                                                <a href="#" class="tool-tip" data-tippy-content="{{__('You cannot delete the main branch')}}" data-tippy-duration="0">
                                                    <i class="fas fa-trash-alt text-gray-400"></i>
                                                </a>
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach
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

@push('inline_scripts')
    <script>
        // Second delete message
        Livewire.on('deleteMessageSecond', recordId => {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Emit the delete event to catch it in our component
                    Livewire.emit('deleteSecond', recordId);

                    Swal.fire(
                        'Eliminado!',
                        'El registro ha sido eliminado.',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
