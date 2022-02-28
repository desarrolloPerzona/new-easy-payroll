<x-app-tenant>
    <div class="container">

        <x-utilities.section-header title="Bank accounts" classes="mb-3"/>

        <div class="flex">
            <div class="btn-top-holder my-3 flex-1">
                <a href="{{route('banks.create',1)}}" class="btn btn-dark">
                    <i class="fas fa-plus-circle"></i>
                    {{ __('New bank account') }}
                </a>
            </div>
            <div class="flex-1 my-3 text-right">
                <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
                <label>
                    <select class="w-full rounded dark:bg-dark dark:text-white">
                        <option value="001">Perzona</option>
                        <option value="001">DSSD</option>
                    </select>
                </label>
            </div>

        </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <table class="table table-white">
                <thead>
                <tr class="colspan-2">
                    <h2 class="mb-3">Cuenta BBVA 1256
                        <a href="{{route('banks.edit',1)}}" class="text-gray-400 hover:text-gray-700">
                            <i class="fas fa-edit"></i>
                        </a>
                    </h2>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="p-0 pb-1 col-6">Empresa:</td>
                    <td class="p-0 pb-1 col-6">Perzona</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Número de cuenta:</td>
                    <td class="p-0 pb-1 col-6">2361256</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Descripción:</td>
                    <td class="p-0 pb-1 col-6">BBVA 01</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Banco:</td>
                    <td class="p-0 pb-1 col-6">BBVA</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Número de información:</td>
                    <td class="p-0 pb-1 col-6">-</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Número de sucursal:</td>
                    <td class="p-0 pb-1 col-6">2369</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Cuenta CLABE:</td>
                    <td class="p-0 pb-1 col-6">4523698531256</td>
                </tr>
                </tbody>
            </table>
            <hr>

            <table class="table table-white">
                <thead>
                <tr class="colspan-2">
                    <h2 class="mb-3">Cuenta BBVA 1256
                        <a href="{{route('banks.edit',1)}}" class="text-gray-400 hover:text-gray-700">
                            <i class="fas fa-edit"></i>
                        </a>
                    </h2>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="p-0 pb-1 col-6">Empresa:</td>
                    <td class="p-0 pb-1 col-6">Perzona</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Número de cuenta:</td>
                    <td class="p-0 pb-1 col-6">2361256</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Descripción:</td>
                    <td class="p-0 pb-1 col-6">BBVA 01</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Banco:</td>
                    <td class="p-0 pb-1 col-6">BBVA</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Número de información:</td>
                    <td class="p-0 pb-1 col-6">-</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Número de sucursal:</td>
                    <td class="p-0 pb-1 col-6">2369</td>
                </tr>
                <tr>
                    <td class="p-0 pb-1 col-6">Cuenta CLABE:</td>
                    <td class="p-0 pb-1 col-6">4523698531256</td>
                </tr>
                </tbody>
            </table>
            <hr>

            <!--
            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Cuenta BBVA 1256 <a href="{{route('banks.edit',1)}}" class="text-gray-400 hover:text-gray-700"><i
                            class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Empresa:
                    </div>
                    <div class="flex-1">
                        Perzona
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Número de cuenta:
                    </div>
                    <div class="flex-1">
                        2361256
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descripción:
                    </div>
                    <div class="flex-1">
                        BBVA 01
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Banco:
                    </div>
                    <div class="flex-1">
                        BBVA
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Número de información:
                    </div>
                    <div class="flex-1">
                        -
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Número de sucursal:
                    </div>
                    <div class="flex-1">
                        2369
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cuenta CLABE:
                    </div>
                    <div class="flex-1">
                        4523698531256
                    </div>
                </div>
            </div>-->

        </div>


    </div>

</x-app-tenant>
