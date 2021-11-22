<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Areas and positions') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('banks.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New Areas and positions') }}
            </a>
        </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Dirección <a href="{{route('areapositions.edit',1)}}" class="text-gray-400 hover:text-gray-700"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 font-bold">
                       Puesto:
                    </div>
                    <div class="flex-1 font-bold">
                        Responde a:
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                       Director
                    </div>
                    <div class="flex-1 text-gray-500">
                        --
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Sub Director
                    </div>
                    <div class="flex-1 text-gray-500">
                        Director
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                       Secretaria Dirección
                    </div>
                    <div class="flex-1 text-gray-500">
                        Director
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Supervisor general
                    </div>
                    <div class="flex-1 text-gray-500">
                        Sub Director
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Jefe de oficina
                    </div>
                    <div class="flex-1 text-gray-500">
                        Sub Director
                    </div>
                </div>

            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Marketing <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 font-bold">
                        Puesto:
                    </div>
                    <div class="flex-1 font-bold">
                        Responde a:
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Director de MKT
                    </div>
                    <div class="flex-1 text-gray-500">
                        Director
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Supervisor MKT
                    </div>
                    <div class="flex-1 text-gray-500">
                        Director de MKT
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Comunicacion y desarrollo 1
                    </div>
                    <div class="flex-1 text-gray-500">
                        Supervisor MKT
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Comunicacion y desarrollo 1
                    </div>
                    <div class="flex-1 text-gray-500">
                        Supervisor MKT
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Diseñador gráfico
                    </div>
                    <div class="flex-1 text-gray-500">
                        Supervisor MKT
                    </div>
                </div>

            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Contabilidad <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 font-bold">
                        Puesto:
                    </div>
                    <div class="flex-1 font-bold">
                        Responde a:
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Director de Contabilidad
                    </div>
                    <div class="flex-1 text-gray-500">
                        Director
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Supervisor Contabilidad
                    </div>
                    <div class="flex-1 text-gray-500">
                        Director de Contabilidad
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Contador
                    </div>
                    <div class="flex-1 text-gray-500">
                        Supervisor Contabilidad
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                       Contador
                    </div>
                    <div class="flex-1 text-gray-500">
                        Supervisor Contabilidad
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Abogado contable
                    </div>
                    <div class="flex-1 text-gray-500">
                        Supervisor Contabilidad
                    </div>
                </div>

            </div>


        </div>


    </div>

</x-app-tenant>
