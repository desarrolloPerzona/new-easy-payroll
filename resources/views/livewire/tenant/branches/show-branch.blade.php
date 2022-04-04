<div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">

    <table class="table table-white table-striped">
        <thead>
        <tr class="colspan-2">
            <div class="d-flex justify-between">
                <h2 class="mb-4 ps-2"><b>{{$branch->name}}</b>
                    <a href="{{route('branches.edit', 1)}}"
                       class="text-gray-400 hover:text-gray-700 ms-2">
                        <i class="fas fa-edit"></i>
                    </a>
                </h2>
                <div>
                    <a href="#" wire:click="$emit('deleteMessage')">
                        <i class="fas fa-trash-alt text-gray-400 cursor-pointer hover:text-red-500"></i>
                    </a>
                </div>
            </div>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="pb-2 col-6"><b>ID:</b></td>
            <td class="col-6"></td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('Name')}}:</b></td>
            <td class="col-6"></td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('risk premium')}}:</b></td>
            <td class="col-6"></td>
        </tr>
        <tr>
            <td class="pb-2 col-6"><b>{{__('IMSS subdelegational key')}}:</b></td>
            <td class="col-6"></td>
        </tr>
        </tbody>
    </table>

    <div>
        <a href="{{ route('business.index') }}" class="btn btn-primary mt-3 ms-2 text-white">{{__('Go back')}}</a>
    </div>

</div>
