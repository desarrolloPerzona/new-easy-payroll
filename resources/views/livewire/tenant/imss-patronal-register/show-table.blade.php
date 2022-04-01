<div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white mb-5">

    @if(!count($registers))
        <div class="col-12 text-center py-3">
            <b>{{__('No records')}}</b>
        </div>
    @else
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">{{__('Name')}}</th>
                <th scope="col">{{__('risk premium')}}</th>
                {{--<th scope="col">{{__('subdelegational key')}}</th>--}}
                <th scope="col">{{__('Branches')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($registers as $register)
                <tr>
                    <td>{{$register->name}}</td>
                    <td>{{$register->risk_premium . ' %'}}</td>
                    {{--<td>{{$register->imss_sub_delegation_key}}</td>--}}
                    <td>@foreach($register->branch as $branch) {{$branch->name}}@endforeach</td>
                    <td>
                        <a href="{{route('imss-employer-registers.show', $register->id)}}" class="text-decoration-none">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                        </a>
                        <a href="{{route('imss-employer-registers.edit', $register->id)}}" class="text-decoration-none">
                            <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer mx-3"></i>
                        </a>
                        <button wire:click="$emit('deleteMessage', {{$register->id}})">
                            <i class="fas fa-trash-alt text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    @endif

</div>
