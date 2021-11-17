<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Employer register') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New employer register') }}
            </a>
        </div>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <table class="table">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th class="text-center">{{__('risk premium')}}</th>
                    <th class="text-center">{{__('subdelegational key')}}</th>
                    <th colspan="3"></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                <tr>
                    <td>{{__('Registro CDMX')}}</td>
                    <td class="text-center">{{__('3')}}</td>
                    <td class="text-center">{{__('123658')}}</td>
                    <td colspan="3"></td>
                    <td><i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                    <td><a href="{{route('employer-register.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i></td>
                    <td><i class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>

                </tr>
                <tr>
                    <td>{{__('Registro MTY')}}</td>
                    <td class="text-center">{{__('1')}}</td>
                    <td class="text-center">{{__('326985')}}</td>
                    <td colspan="3"></td>
                    <td><i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                    <td><i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                    <td><i class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>

                </tr>
                <tr>
                    <td>{{__('Registro GDL')}}</td>
                    <td class="text-center">{{__('1')}}</td>
                    <td class="text-center">{{__('523695')}}</td>
                    <td colspan="3"></td>
                    <td><i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                    <td><i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                    <td><i class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>

                </tr>

            </table>

        </div>



    </div>
</x-app-tenant>

