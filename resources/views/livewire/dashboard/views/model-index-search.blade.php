<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif
    <div class="card">
        {{-- PAGE HEADER--}}
        <div class="card-header">
            <h2 class="uppercase text-sm text-dark text-2xl"><i class="fal fa-table"></i> {{__($titleName)}}</h2>
        </div>
        <div class="card-body">
            {{-- CREATE NEW ITEM --}}
            <div class="p-4  mb-2 text-white shadow-sm dark:bg-dark rounded">
                <a href="{{route('admin.banks.create')}}" class="btn btn-primary"> <span class="uppercase "><i class="fas fa-plus-circle"></i> {{__('New').' '.__($titleName)}}</span></a>
            </div>
            {{-- CREATE NEW ITEM --}}
            {{-- TABLE DATA--}}
            <table class="table table-striped table-responsive p-4">
                {{-- SEARCH AND ORDER--}}
                <tr class="bg-gray-600 dark:bg-dark rounded">
                    <p class="uppercase text-sm dark:text-white my-2 p-4">{{__('Search and order column')}}</p>
                    @foreach($searchColumns as $key => $title)
                        <th class="text-xs bg-red-500" colspan="1">
                            {{--SORT--}}
                            <div wire:click="sortByColumn('{{str_replace(' ','_',strtolower($key))}}')" class="text-white">
                                <span class="uppercase">{{__($key)}}</span>
                                @if ($sortColumn == str_replace(' ','_',strtolower($key)))
                                    <i class="fa fa-fw fa-sort-{{ $sortDirection == 'asc' ? 'up':'down' }} cursor-pointer"></i>
                                @else
                                    <i class="fa fa-fw fa-sort cursor-pointer" style="color:#DCDCDC"></i>
                                @endif
                            </div>
                            {{--SEARCH--}}
                            <div class="form">
                                <input id="search-item-{{$loop->iteration}}" class="form-control w-30 my-4" type="text" placeholder="{{__('Search').' '. __($key)}}" wire:model="searchColumns.{{str_replace(' ','_',strtolower($key))}}">
                            </div>
                        </th>

                    @endforeach
                </tr>
                {{-- END SEARCH AND ORDER--}}
                <tr>
                    {{-- DATA --}}
                    @foreach($model as $item)

                        @foreach($modelItems as $items)
                            <td class="text-sm  align-middle">{{$item->$items}}</td>
                        @endforeach
                        @if($viewable)
                            <td class="align-middle w-10">
                                <button class="px-2 py-1 rounded text-white bg-gray-400 hover:bg-gray-600" wire:click.prevent="view({{ $item->id }})"><i class="fas fa-eye"></i></button>
                            </td>
                        @endif
                        @if($editable)
                            <td class="align-middle w-10">
                                <button class="px-2 py-1 rounded text-white bg-yellow-500 hover:bg-yellow-600" wire:click.prevent="edit({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i></button>
                            </td>
                        @endif
                        @if($erasable)
                            <td class="align-middle w-10">
                                <button class="px-2 py-1 rounded text-white bg-red-400 hover:bg-red-600" wire:click.prevent="destroy({{ $item->id}},'{{$item->first()}}')" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"><i class="fas fa-trash"></i></button>
                            </td>
                        @endif
                </tr>
                @endforeach

            </table>
            {{ $model->links() }}
        </div>

    </div>
</div>
@push('in_page_scripts')
    <script>
        $(document).ready(function () {
            window.livewire.on('alert_remove', () => {
                setTimeout(function () {
                    $(".alert-success").fadeOut('fast');
                }, 3000); // 3 secs
            });
        });
    </script>
@endpush
@push('modals')
    <div id="editModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $modelToEdit ? 'Edit Product' : 'Add New Product' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{$modelToEdit}}
                    <form wire:submit.prevent="save">
                        @foreach($modelItems as $item)
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="input-new-item{{$loop->iteration}}" class="sr-only">{{__($item)}}</label>
                                <input type="text" class="form-control input-group-sm" id="input-new-item{{$loop->iteration}}" wire:model.defer="modelToEdit.$item" placeholder="{{__($item)}}">
                                @error('$modelToEdit->$item')
                                <div style="font-size: 11px; color: red">{{ $message }}</div> @enderror
                            </div>
                        @endforeach
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
