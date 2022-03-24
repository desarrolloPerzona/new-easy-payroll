<div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">
{{--    <div class="bg-blueSteel rounded text-center py-2 mb-4">--}}
{{--        <h2>{{$name}}</h2>--}}
{{--    </div>--}}

    <table class="table table-white table-striped">
        <thead>
        <tr class="colspan-2">
            <div class="d-flex justify-between">
                <h2 class="mb-3 ps-2"><b>{{__($register->name)}}</b>
                    <a href="{{route('imss-employer-registers.edit', $register->id)}}"
                       class="text-gray-400 hover:text-gray-700 ms-2">
                        <i class="fas fa-edit"></i>
                    </a>
                </h2>
                <div>
                    <a href="#">
                        <i class="fas fa-trash-alt text-gray-400 cursor-pointer hover:text-red-500"></i>
                    </a>
                </div>
            </div>

        </tr>

        </thead>
        <tbody>
        <tr>
            <td class="pb-2 col-6">ID:</td>
            <td class="col-6">{{$register->id}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6">{{__('Name')}}</td>
            <td class="col-6">{{$register->name}}</td>
        </tr>
        <tr>
            <td class="pb-2 col-6">{{__('risk premium')}}</td>
            <td class="col-6">{{$register->risk_premium}}</td>
        </tr>

        <tr>
            <td class="pb-2 col-6">{{__('IMSS subdelegational key')}}</td>
            <td class="col-6">{{$register->imss_sub_delegation_key}}</td>
        </tr>

        </tbody>
    </table>
</div>
