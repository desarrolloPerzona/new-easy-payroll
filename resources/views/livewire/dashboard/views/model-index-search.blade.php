<div class="w-75 sm:w-full mx-auto">
    <div class="card">
        <div class="card-header">
            <h2>{{__($modelName)}}</h2>
        </div>
        <div class="card-body">
            <div class=" p-4 my-4 bg-primary text-white shadow-sm dark:bg-dark rounded">
                <h2 class="my-2"> {{__('New').' '.__($modelName)}}</h2>
                <form action="" class="row">
                    @foreach($modelTitles as $title)
                        <div class="form-group col">
                            <label for="">
                                <input class="form-control" type="text" placeholder="{{__($title)}}">
                            </label>
                        </div>
                    @endforeach
                    <div class="col">
                        <button class="btn btn-success">{{__('Send')}}</button>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <tr>
                    @foreach($modelTitles as $title)
                        <th class="w-25">
                            <div wire:click="sortByColumn('{{str_replace(' ','_',strtolower($title))}}')">
                                {{__($title)}}
                                @if ($sortColumn == str_replace(' ','_',strtolower($title)))
                                    <i class="fa fa-fw fa-sort-{{ $sortDirection == 'asc' ? 'up':'down' }} cursor-pointer"></i>
                                @else
                                    <i class="fa fa-fw fa-sort cursor-pointer" style="color:#DCDCDC"></i>
                                @endif
                            </div>
                            <div class="form">
                                <input class="form-control" type="text" placeholder="{{__('Search').' '. __($title)}}" wire:model="searchColumns.{{str_replace(' ','_',strtolower($title))}}">
                            </div>
                        </th>

                    @endforeach
                    <th></th>
                </tr>
                @foreach($model as $title)
                    <tr>
                        @foreach($modelItems as $items)
                            <td>{{$title->$items}}</td>
                        @endforeach
                        <td>
                            {{--                            <div class="btn btn-primary my-1"><i class="fas fa-eye"></i></div>--}}

                            <div class="btn btn-warning my-1"><i class="fas fa-edit"></i></div>

                            <div class="btn btn-danger my-1"><i class="fas fa-trash"></i></div>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $model->links() }}
        </div>
    </div>
</div>
