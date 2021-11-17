<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Payroll') }}</span>
        </h2>

    <div class="btn-top-holder my-3">
        <a class="btn btn-dark">
            <i class="fas fa-plus-circle"></i>
            {{ __('New Payroll') }}
        </a>
    </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

            <div class="border-bottom-1 border-gray-400 py-3">
            <h2>Grupo 1 (Semanal) <a class="text-gray-400 hover:text-gray-700" href="{{route('payroll.edit',1)}}"><i class="fas fa-edit"></i></a></h2>
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Esquema para pago de Nómina:
                </div>
                <div class="flex-1">
                    Estandar
                </div>
            </div>
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Cuenta Bancaria:
                </div>
                <div class="flex-1">
                    Cuenta BBVA 12584
                </div>
            </div>
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Periodo de nómina:
                </div>
                <div class="flex-1">
                   Semanal
                </div>
            </div>
                <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Calcular periodo de nómina con base a:
                </div>
                <div class="flex-1">
                   30 días
                </div>
            </div>
        </div>

            <div class="border-bottom-1 border-gray-400 py-3">
            <h2>Grupo 2 (Quincenal) <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Esquema para pago de Nómina:
                </div>
                <div class="flex-1">
                    Estandar
                </div>
            </div>
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Cuenta Bancaria:
                </div>
                <div class="flex-1">
                    Cuenta BBVA 12584
                </div>
            </div>
            <div class="flex pt-2">
                <div class="flex-1 text-gray-500">
                    Periodo de nómina:
                </div>
                <div class="flex-1">
                   Semanal
                </div>
            </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Calcular periodo de nómina con base a:
                    </div>
                    <div class="flex-1">
                        30.4 días
                    </div>
                </div>
            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Grupo 3 (Mensual) <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Esquema para pago de Nómina:
                    </div>
                    <div class="flex-1">
                        Estandar
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cuenta Bancaria:
                    </div>
                    <div class="flex-1">
                        Cuenta Santander 325698
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Periodo de nómina:
                    </div>
                    <div class="flex-1">
                        Semanal
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Calcular periodo de nómina con base a:
                    </div>
                    <div class="flex-1">
                        30 días
                    </div>
                </div>
            </div>
        </div>


            </div>

</x-app-tenant>
