<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Areas and positions') }}</span>
        </h2>

        {{--Nueva puesto ----------------}}

        <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition">

            <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                <div class="accordion-header mr-4" id="headingOne">


                    <div class="flex">
                        <div class="flex-1 pb-2">{{__('New Area')}}</div>
                        <div class="flex-2">
                            <button type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseP1" aria-expanded="false"
                                    aria-controls="collapseP1"><i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>


                    <div id="collapseP1" class="accordion-collapse collapse"
                         aria-labelledby="headingTwo" data-bs-parent="#newPosition">
                        <div class="accordion-body text-dark bg-gray-100 rounded">
                            <div>
                            <div><label class="font-bold" for="name">{{__('Area name')}}</label></div>
                            <div><input class="text-gray-800 rounded my-2 w-full" type="text" id="name" name="Name"></div>
                        </div>

                            <div type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseP1" aria-expanded="false"
                                 aria-controls="collapseP1">
                                <a href="#" class="btn btn-dark">
                                    <i class="fas fa-plus-circle"></i>
                                    {{ __('Save') }}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>


        </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Dirección <a href="{{route('area-positions.edit',1)}}" class="text-gray-400 hover:text-gray-700"><i class="fas fa-edit"></i></a></h2>
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
