<div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">

    <table class="table table-white table-striped">
        <thead>
        <tr class="colspan-2">
            <div class="d-flex justify-between">
                <h2 class="mb-4 ps-2"><b>{{$branch->name}}</b>
                    <a href="{{route('branches.edit', $branch->id)}}"
                       class="text-gray-400 hover:text-gray-700 ms-2">
                        <i class="fas fa-edit"></i>
                    </a>
                </h2>
                @if($branches[0]->name != $branch->name)
                <div>
                    <a href="#" wire:click="$emit('deleteMessage', {{$branch->id}})">
                        <i class="fas fa-trash-alt text-gray-400 cursor-pointer hover:text-red-500"></i>
                    </a>
                </div>
                @else
                    <a href="#" class="tool-tip" data-tippy-content="{{__('You cannot delete the main branch')}}" data-tippy-duration="0">
                        <i class="fas fa-trash-alt text-gray-200"></i>
                    </a>
                @endif
            </div>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="pb-2 col-6"><b>{{__('Name')}}:</b></td>
            <td class="col-6">{{$branch->name}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('Description')}}:</b></td>
            <td class="col-6">{{$branch->description}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('Street')}}:</b></td>
            <td class="col-6">{{$branch->street}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('ZIP Code')}}:</b></td>
            <td class="col-6">{{$branch->zip_code}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('Borough')}}:</b></td>
            <td class="col-6">{{$branch->borough}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('Municipality')}}:</b></td>
            <td class="col-6">{{$branch->municipality}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('State')}}:</b></td>
            <td class="col-6">{{$branch->state}}</td>
        </tr>
        </tbody>
    </table>

    <div>
        <a href="{{ route('business.index') }}" class="btn btn-primary mt-3 ms-2 text-white">{{__('Go back')}}</a>
    </div>

</div>
