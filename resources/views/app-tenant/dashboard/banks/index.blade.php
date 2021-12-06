<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Bank accounts') }}</span>
        </h2>

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

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Cuenta BBVA 1256 <a href="{{route('banks.edit',1)}}" class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
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
            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Cuenta BBVA 6987 <i class="fas fa-edit text-gray-400"></i></h2>
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
                        2366987
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descripción:
                    </div>
                    <div class="flex-1">
                        BBVA 02
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
                        4523698536987
                    </div>
                </div>
            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Cuenta Santander 4585 <i class="fas fa-edit text-gray-400"></i></h2>
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
                        569523664585
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descripción:
                    </div>
                    <div class="flex-1">
                        Santander 01
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Banco:
                    </div>
                    <div class="flex-1">
                        Santander
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Número de información:
                    </div>
                    <div class="flex-1">
                        2369569
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Número de sucursal:
                    </div>
                    <div class="flex-1">
                        -
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cuenta CLABE:
                    </div>
                    <div class="flex-1">
                        856932654585
                    </div>
                </div>
            </div>


        </div>


    </div>

</x-app-tenant>
