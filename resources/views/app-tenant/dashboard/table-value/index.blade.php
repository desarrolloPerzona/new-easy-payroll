<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Table and value') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1"><h2 class="pb-3">Valores de referencia</h2></div>
                <div class="flex-2">
                    <i class="fas fa-chevron-circle-up cursor-pointer" data-bs-toggle="collapse" href="#collapse_reference" role="button" aria-expanded="false" aria-controls="collapse_reference"></i>
                </div>
            </div>

            <div class="collapse" id="collapse_reference">
                <p class="pt-1">{{__($discount_infonavit->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $discount_infonavit->value }}
                    </div>
                </div>

                <p class="pt-1 uppercase">{{__($uma->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $uma->value }}
                    </div>
                </div>

                <p class="pt-1">{{__($minimum_salary_general->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $minimum_salary_general->value }}
                    </div>
                </div>

                <p class="pt-1">{{__($minimum_salary_border->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $minimum_salary_border->value }}
                    </div>
                </div>
            </div>

        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">  <h2 class="pb-3">Retenciones periódicas de ISR:</h2></div>
                <div class="flex-2"><i class="fas fa-chevron-circle-up"></i></div>
            </div>

            <ul class="nav nav-tabs w-full mb-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                        <i class="now-ui-icons objects_umbrella-13"></i> Diaria
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                        <i class="now-ui-icons shopping_cart-simple"></i> Semanal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                        <i class="now-ui-icons shopping_shop"></i> Decenal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                        <i class="now-ui-icons ui-2_settings-90"></i> Quincenal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                        <i class="now-ui-icons ui-2_settings-90"></i> Mensual
                    </a>
                </li>
            </ul>


            <div class="flex border-b-2">
                <div class="flex-1 font-bold pb-2">
                    Límite inferior
                </div>
                <div class="flex-1 font-bold">
                    Límite superior
                </div>
                <div class="flex-1 font-bold">
                    Cuota fija
                </div>
                <div class="flex-1 font-bold">
                    Excedentes %
                </div>
            </div>

            <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                <div class="flex-1">
                    0.01
                </div>
                <div class="flex-1">
                    296.85
                </div>
                <div class="flex-1">
                    0
                </div>
                <div class="flex-1">
                    1.92
                </div>
            </div>

            <div class="flex p-1">
                <div class="flex-1">
                    296,86
                </div>
                <div class="flex-1">
                    2,519.5
                </div>
                <div class="flex-1">
                    5.7
                </div>
                <div class="flex-1">
                    6.7
                </div>
            </div>

            <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                <div class="flex-1">
                    2,519,51
                </div>
                <div class="flex-1">
                    4,427.8
                </div>
                <div class="flex-1">
                    147.95
                </div>
                <div class="flex-1">
                    10.88
                </div>
            </div>

            <div class="flex p-1">
                <div class="flex-1">
                    4,427.81
                </div>
                <div class="flex-1">
                    5,147.13
                </div>
                <div class="flex-1">
                    355.57
                </div>
                <div class="flex-1">
                    16
                </div>
            </div>

            <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                <div class="flex-1">
                    5,147.14
                </div>
                <div class="flex-1">
                    6,162.52
                </div>
                <div class="flex-1">
                    470.66
                </div>
                <div class="flex-1">
                    17.92
                </div>
            </div>

            <div class="flex p-1">
                <div class="flex-1">
                    0.01
                </div>
                <div class="flex-1">
                    296.85
                </div>
                <div class="flex-1">
                    0
                </div>
                <div class="flex-1">
                    1.92
                </div>
            </div>

            <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                <div class="flex-1">
                    6,162.53
                </div>
                <div class="flex-1">
                    14,428.91
                </div>
                <div class="flex-1">
                    625.62
                </div>
                <div class="flex-1">
                    21.36
                </div>
            </div>

            <div class="flex p-1">
                <div class="flex-1">
                    14,428.92
                </div>
                <div class="flex-1">
                    19,589.68
                </div>
                <div class="flex-1">
                    1,991.12
                </div>
                <div class="flex-1">
                    23.52
                </div>
            </div>

            <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                <div class="flex-1">
                    19,589.69
                </div>
                <div class="flex-1">
                    37,399.92
                </div>
                <div class="flex-1">
                    3,675.34
                </div>
                <div class="flex-1">
                    30
                </div>
            </div>

            <div class="flex p-1">
                <div class="flex-1">
                    37,399.93
                </div>
                <div class="flex-1">
                    49,866.26
                </div>
                <div class="flex-1">
                    9,018.41
                </div>
                <div class="flex-1">
                    32
                </div>
            </div>

            <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                <div class="flex-1">
                    49,866.27
                </div>
                <div class="flex-1">
                    149,599.68
                </div>
                <div class="flex-1">
                    13,007.73
                </div>
                <div class="flex-1">
                    34
                </div>
            </div>

            <div class="flex p-1">
                <div class="flex-1">
                    149,599.69
                </div>
                <div class="flex-1">
                    En adelante
                </div>
                <div class="flex-1">
                    46,916.99
                </div>
                <div class="flex-1">
                    35
                </div>
            </div>


        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">  <h2 class="pb-3">Tablas periódicas a subsidio</h2></div>
                <div class="flex-2"><i class="fas fa-chevron-circle-down"></i></div>
            </div>

        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">  <h2 class="pb-3">Tablas de impuesto sobre nómina</h2></div>
                <div class="flex-2"><i class="fas fa-chevron-circle-down"></i></div>
            </div>

        </div>

    </div>

</x-app-tenant>
