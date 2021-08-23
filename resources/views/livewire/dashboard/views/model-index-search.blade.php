<div>
    <div class="card">
        {{-- PAGE HEADER--}}
        <div class="card-header">
            <h2 class="uppercase text-sm text-dark text-2xl"><i class="fal fa-table"></i> {{__($modelName)}}</h2>
        </div>

        <div class="card-body">
            {{-- CREATE NEW ITEM --}}
            <div class="p-4  mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">
                    <div class="accordion-item">
                        <h2 class="accordion-header  " id="headingTwo">
                            <button class="accordion-button collapsed bg-dark dark:bg-light  text-white dark:text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="uppercase "><i class="fas fa-plus-circle"></i> {{__('New').' '.__($modelName)}}</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body">
                                <form action="" class="form">
                                    @foreach($modelTitles as $title)
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="input-new-item{{$loop->iteration}}" class="sr-only">{{__($title)}}</label>
                                            <input type="text" class="form-control input-group-sm" id="input-new-item{{$loop->iteration}}" placeholder="{{__($title)}}">
                                        </div>
                                    @endforeach
                                    <div class="form-group">
                                        <button class="btn btn-primary object-right">{{__('Send')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CREATE NEW ITEM --}}
            {{-- TABLE--}}
            <table class="table table-striped table-responsive p-4">
                {{-- SEARCH AND ORDER--}}
                <tr>
                    <p class="uppercase text-sm dark:text-white">{{__('Search and order column')}}</p>
                    @foreach($modelTitles as $title)
                        <th class="text-xs">
                            <div wire:click="sortByColumn('{{str_replace(' ','_',strtolower($title))}}')">
                                {{__($title)}}
                                @if ($sortColumn == str_replace(' ','_',strtolower($title)))
                                    <i class="fa fa-fw fa-sort-{{ $sortDirection == 'asc' ? 'up':'down' }} cursor-pointer"></i>
                                @else
                                    <i class="fa fa-fw fa-sort cursor-pointer" style="color:#DCDCDC"></i>
                                @endif
                            </div>
                            <div class="form">
                                <input id="searh-item-{{$loop->iteration}}" class="form-control my-4" type="text" placeholder="{{__('Search').' '. __($title)}}" wire:model="searchColumns.{{str_replace(' ','_',strtolower($title))}}">
                            </div>
                        </th>
                    @endforeach
                </tr>
                {{-- SEARCH AND ORDER--}}
                @foreach($model as $item)
                    <tr>
                        @foreach($modelItems as $items)
                            <td class="text-sm">{{$item->$items}}</td>
                        @endforeach
                        <td>
                            <div class="btn btn-warning my-1 text-xs-center text-white" wire:click.prevent="edit({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i></div>
                        </td>
                        <td>
                            <div class="btn btn-danger my-1 text-xs-center text-white"><i class="fas fa-trash"></i></div>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{ $model->links() }}
        </div>

    </div>
</div>
@push('in_page_scripts')
    <script>

    </script>
@endpush
@push('modals')
    <div id="editModal" class="modal" tabindex="-1">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $modelItemToEdit ? 'Edit Product' : 'Add New Product' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        hay algo???? {{$modelItemToEdit}}
                        <input wire:model="name" class="form-control"/>
                        @error('product.name')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endpush
