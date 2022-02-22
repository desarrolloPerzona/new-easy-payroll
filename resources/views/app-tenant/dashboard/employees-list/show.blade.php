<x-app-tenant>

    <div class="container">

        {{--        Header User profile--}}
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">Juan Perez</span>
        </h2>

        <div class="flex mb-6">
            <div class="flex-1 w-3/12">
                <img class="px-5 m-auto" src="/assets/images/avatar/user.jpg" alt="">
            </div>
            <div class="flex-1 w-3/12">
                <h2 class="mb-4">Juan Perez</h2>
                <div class="mb-2"><i class="fa-solid fa-square-dollar fa-xl"></i> $ 35,000</div>
                <div class="mb-2"><i class="fa-solid fa-envelope fa-xl"></i> juan.perez@espresa.com</div>
                <div class="mb-2"><i class="fa-regular fa-envelope fa-xl"></i> juan.perez@personal.com</div>
            </div>
            <div class="flex-1 w-3/12">
                <div class="mb-6">&nbsp;</div>
                <div class="mb-2"><i class="fa-solid fa-square-a fa-xl"></i> Ventas</div>
                <div class="mb-2"><i class="fa-solid fa-circle-location-arrow fa-xl"></i> CDMX</div>
                <div class="mb-2"><i class="fa-solid fa-cake-candles fa-xl"></i> 03/04/1976</div>
            </div>
            <div class="flex-1 w-3/12">
                <div class="btn-top-holder my-3 flow-root">
                    <a class="btn btn-dark float-right cursor-pointer">
                        {{ __('Download PDF') }}
                    </a>
                </div>
            </div>
        </div>

        {{--        Tabs Menu--}}
        <div id="collapse-retentions" x-data="data()" class="px-2">

            {{--            Employee Tabs buttons--}}
            <ul class="nav nav-tabs w-full mb-2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active tab-retention cursor-pointer bg-primary text-white" id="personal-button"
                       x-on:click="changeTab('personal')">
                        <i class="now-ui-icons objects_umbrella-13"></i> Personal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="employee-button"
                       x-on:click="changeTab('employee')">
                        <i class="now-ui-icons shopping_cart-simple"></i> Empleo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="payment-button"
                       x-on:click="changeTab('payment')">
                        <i class="now-ui-icons shopping_shop"></i> Pago
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="events-button"
                       x-on:click="changeTab('events')">
                        <i class="now-ui-icons shopping_shop"></i> Eventos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="documents-button"
                       x-on:click="changeTab('documents')">
                        <i class="now-ui-icons shopping_shop"></i> Documentos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="kardex-button"
                       x-on:click="changeTab('kardex')">
                        <i class="now-ui-icons shopping_shop"></i> Kardex
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="notes-button" x-on:click="changeTab('notes')">
                        <i class="now-ui-icons shopping_shop"></i> Notas
                    </a>
                </li>
            </ul>

            {{--                Personal-----------------------------------------------------}}
            <div id="personal-table" class="retentions-table">
                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Información básica <i class="fa-solid fa-pen-to-square cursor-pointer"></i></h2>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Nombre</div>
                        <div class="w-1/2 font-bold">Juan</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Apellido paterno</div>
                        <div class="w-1/2 font-bold">Perez</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Apellido materno</div>
                        <div class="w-1/2 font-bold">Perez</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Genero</div>
                        <div class="w-1/2 font-bold">Masculino</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Fecha de nacimiento</div>
                        <div class="w-1/2 font-bold">03/04/1976</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">CURP</div>
                        <div class="w-1/2 font-bold">PEDJ760403HNGRE43</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">RFC</div>
                        <div class="w-1/2 font-bold">PEDJ760403IN7</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Seguro Social</div>
                        <div class="w-1/2 font-bold">1269365863</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Correo corporativo</div>
                        <div class="w-1/2 font-bold"> juan.perez@espresa.com</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Correo personal</div>
                        <div class="w-1/2 font-bold">juan.perez@personal.com</div>
                    </div>
                </div>

                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Información básica adicional <i class="fa-solid fa-pen-to-square cursor-pointer"></i></h2>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Nacionalidad</div>
                        <div class="w-1/2 font-bold">5554134695</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Teléfono</div>
                        <div class="w-1/2 font-bold">Perez</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Estado civil</div>
                        <div class="w-1/2 font-bold">Casado</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Dirección particular</div>
                        <div class="w-1/2 font-bold">Texas 105 - 303, Col. Napoles, CDMX, CP 03810</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Hijos</div>
                        <div class="w-1/2 font-bold">No</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Numero de hijos</div>
                        <div class="w-1/2 font-bold">-</div>
                    </div>

                </div>

                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Contacto de emergencia <i class="fa-solid fa-pen-to-square cursor-pointer"></i></h2>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Nombre</div>
                        <div class="w-1/2 font-bold">Alejandra</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Apellido paterno</div>
                        <div class="w-1/2 font-bold">Gutierez</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Apellido materno</div>
                        <div class="w-1/2 font-bold">Zapata</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Correo electrónico</div>
                        <div class="w-1/2 font-bold">aleshoe@hotmail.com</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Teléfono</div>
                        <div class="w-1/2 font-bold">5578247581</div>
                    </div>

                </div>

            </div>

            {{--                Empleo-------------------------------------------------------}}
            <div id="employee-table" class="retentions-table d-none">
                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Detalles del empleo <i class="fa-solid fa-pen-to-square cursor-pointer"></i></h2>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Área</div>
                        <div class="w-1/2 font-bold">MKT</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Puesto</div>
                        <div class="w-1/2 font-bold">Director</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Reporta a</div>
                        <div class="w-1/2 font-bold">Director General</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Sede</div>
                        <div class="w-1/2 font-bold">CDMX</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Fecha de antigüedad</div>
                        <div class="w-1/2 font-bold">20/04/2018</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Fecha de inicio de contrato</div>
                        <div class="w-1/2 font-bold">20/04/2018</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Politicas</div>
                        <div class="w-1/2 font-bold">Politica 1</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Tipo de contrato</div>
                        <div class="w-1/2 font-bold">Contrato permanente</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Tipo de empleado</div>
                        <div class="w-1/2 font-bold">Sueldos</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Sindicalizado</div>
                        <div class="w-1/2 font-bold">No</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Jornada</div>
                        <div class="w-1/2 font-bold">Jornada 1</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Área geográfica</div>
                        <div class="w-1/2 font-bold">Área general</div>
                    </div>

                </div>
            </div>

            {{--            Pago-------------------------------------------------------------}}
            <div id="payment-table" class="retentions-table d-none">
                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Detalle de pago <i class="fa-solid fa-pen-to-square cursor-pointer"></i></h2>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Metodo de pago</div>
                        <div class="w-1/2 font-bold">Dispersión de nómina</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Banco</div>
                        <div class="w-1/2 font-bold">Santander</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Número de cuenta</div>
                        <div class="w-1/2 font-bold">023695698</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Número de sucursal</div>
                        <div class="w-1/2 font-bold">-</div>
                    </div>

                    <div class="flex px-4 my-1">
                        <div class="w-1/2">CLABE</div>
                        <div class="w-1/2 font-bold">203169856321023</div>
                    </div>




                </div>

                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Detalle de compensación <i class="fa-solid fa-pen-to-square cursor-pointer"></i></h2>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Grupo de nómina</div>
                        <div class="w-1/2 font-bold">Grupo 2 (Quincenal)</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Tipo de compensación</div>
                        <div class="w-1/2 font-bold">Mixto</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Sueldo bruto mensual</div>
                        <div class="w-1/2 font-bold">$35,000</div>
                    </div>
                    <div class="flex px-4 my-1">
                        <div class="w-1/2">Salario base de cotización</div>
                        <div class="w-1/2 font-bold">$323.91</div>
                    </div>
                </div>

                <div class="card p-4 mb-4">

                    <div class="w-1/2 mb-2"><h2>Percepciones periódicas </h2></div>

                    <div class="flex px-4 my-1">
                        <div class="w-4/12 w-full">Sueldo por Vacaciones</div>
                        <div class="w-4/12 w-full font-bold">Extraordinario</div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-trash-can"></i></div>
                    </div>
                    <div class="flex px-4 mb-6">
                        <div class="w-4/12 w-full">Comisiones</div>
                        <div class="w-4/12 w-full font-bold">Ordinario</div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-trash-can"></i></div>
                    </div>

                    {{--        Percepcion Accordion--}}
                    <div class="accordion" id="workingDayAccordion">
                        <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                            {{--                Accordion header--}}
                            <div class="accordion-header mr-4" id="headingWorkingDay">
                                <div class="flex">
                                    <div class="flex-1">Agregar Percepción</div>
                                    <div class="flex-2">
                                        <button type="button" data-bs-toggle="collapse"
                                                data-bs-target="#workingDayCollapse"
                                                aria-expanded="false" aria-controls="workingDayCollapse">
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--                Accordion Body--}}
                            <div id="workingDayCollapse" class="accordion-collapse collapse"
                                 aria-labelledby="headingWorkingDay"
                                 data-bs-parent="#workingDayAccordion">
                                <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                                    <form action="" class="text-black rounded">
                                        <label class="font-bold" for="name">{{__('Concept name')}}</label>
                                        <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                               type="text" id="name" name="Name">


                                        <label class="font-bold my-2" for="name">{{__('SAT Concept')}}</label>
                                        <label class="w-full">
                                            <select class="rounded w-full dark:bg-dark dark:text-white">
                                                <option value="001">004 Rembolso gastos médicos</option>
                                                <option value="002">006 Caja de ahorro</option>
                                                <option value="002">009 Contribuciones a cargo de trabajadores</option>
                                                <option value="002">011 Prima de seguro de vida</option>
                                                <option value="002">012 Seguro gastos médicos</option>
                                                <option value="002">013 Cueotas sindicales patrón</option>
                                                <option value="002">014 Subsidio incapacidades</option>
                                                <option value="002">015 Becas a trabajadores y/o hijos de trabajadores
                                                </option>
                                                <option value="002">023 Pagos por separación</option>
                                                <option value="002">025 Indemnizaciones</option>
                                                <option value="002">026 Rembolso de funeral</option>
                                                <option value="002">027 Cuotas de Seguridad Social del patrón</option>
                                                <option value="002">029 Vales de despensa en efectivo</option>
                                                <option value="002">031 Vales de gasolina</option>
                                                <option value="002">032 Vales de ropa</option>
                                                <option value="002">033 Ayuda de renta</option>
                                                <option value="002">034 Ayuda de articulos escolares</option>
                                                <option value="002">035 Ayuda de adqusición de anteojos</option>
                                                <option value="002">036 Ayuda al transporte</option>
                                                <option value="002">037 Ayuda gastos funerarios</option>
                                                <option value="002">038 Otros ingresos y salarios</option>
                                                <option value="002">044 Jubilaciones y pensiones</option>
                                                <option value="002">047 Alimentación</option>
                                                <option value="002">048 Habitación</option>

                                            </select>
                                        </label>

                                        <div class="flex">
                                            {{--Periodicidad--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Periodicity')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Periodica</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Extraordinaria</label>
                                                </div>
                                            </div>
                                            {{--Tipo percepción--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Type of perception')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Ordinario</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Extraordinario</label>
                                                </div>
                                            </div>
                                            {{--Tipo de pago--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Payment type')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Ordinario</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Especie</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="flex">

                                            {{--Grava ISR--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Gravel ISR')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Si</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>No</label>
                                                </div>
                                            </div>
                                            {{--Grava ISN--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Gravel ISN')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Si</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>No</label>
                                                </div>
                                            </div>
                                            {{--Integra IMSS--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('IMSS integrate')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Si</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex my-3">
                                            <div class="flex-1 w-1/3">
                                                {{--Date Picker---------------}}
                                                <div
                                                    class="flex-1 items-center justify-center bg-gray-200 h-full dark:bg-dark dark:text-white">
                                                    <script
                                                        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                                        defer></script>

                                                    <style>
                                                        [x-cloak] {
                                                            display: none;
                                                        }
                                                    </style>

                                                    <div class="antialiased sans-serif w-full">
                                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]"
                                                             x-cloak>
                                                            <div class="container mx-auto px-4 py-2 md:py-10">
                                                                <div class="mb-5">
                                                                    <label for="datepicker"
                                                                           class="font-bold mb-1 text-gray-700 block dark:text-white">Fecha
                                                                        de inicio de percepción</label
                                                                    >
                                                                    <div class="relative">
                                                                        <input type="hidden" name="date" x-ref="date"/>
                                                                        <input
                                                                            type="text"
                                                                            readonly
                                                                            x-model="datepickerValue"
                                                                            @click="showDatepicker = !showDatepicker"
                                                                            @keydown.escape="showDatepicker = false"
                                                                            class=" w-full
                                                                    pl-4
                                                                    pr-10
                                                                    py-3
                                                                    leading-none
                                                                    rounded-lg
                                                                    shadow-sm
                                                                    focus:outline-none focus:shadow-outline
                                                                    text-gray-600
                                                                    font-medium"
                                                                            placeholder={{__('Select Date')}}
                                                                        />

                                                                        <div class="absolute top-0 right-0 px-3 py-2">
                                                                            <svg
                                                                                class="h-6 w-6 text-gray-400"
                                                                                fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor"
                                                                            >
                                                                                <path
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                                                />
                                                                            </svg>
                                                                        </div>

                                                                        <!-- <div x-text="no_of_days.length"></div>
                                                                                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                                    <div x-text="new Date(year, month).getDay()"></div> -->

                                                                        <div
                                                                            class="bg-white
                                                                    mt-12
                                                                    rounded-lg
                                                                    shadow
                                                                    p-4
                                                                    absolute
                                                                    top-0
                                                                    left-0"
                                                                            style="width: 17rem"
                                                                            x-show.transition="showDatepicker"
                                                                            @click.away="showDatepicker = false"
                                                                        >
                                                                            <div
                                                                                class="flex justify-between items-center mb-2">
                                                                                <div>
                  <span
                      x-text="MONTH_NAMES[month]"
                      class="text-lg font-bold text-gray-800"
                  ></span>
                                                                                    <span
                                                                                        x-text="year"
                                                                                        class="ml-1 text-lg text-gray-600 font-normal"
                                                                                    ></span>
                                                                                </div>
                                                                                <div>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                        :disabled="month == 0 ? true : false"
                                                                                        @click="month--; getNoOfDays()"
                                                                                    >
                                                                                        <svg
                                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor"
                                                                                        >
                                                                                            <path
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M15 19l-7-7 7-7"
                                                                                            />
                                                                                        </svg>
                                                                                    </button>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                        :disabled="month == 11 ? true : false"
                                                                                        @click="month++; getNoOfDays()"
                                                                                    >
                                                                                        <svg
                                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor"
                                                                                        >
                                                                                            <path
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M9 5l7 7-7 7"
                                                                                            />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                                                <template x-for="(day, index) in DAYS"
                                                                                          :key="index">
                                                                                    <div style="width: 14.26%"
                                                                                         class="px-1">
                                                                                        <div
                                                                                            x-text="day"
                                                                                            class="text-gray-800 font-medium text-center text-xs"
                                                                                        ></div>
                                                                                    </div>
                                                                                </template>
                                                                            </div>

                                                                            <div class="flex flex-wrap -mx-1">
                                                                                <template x-for="blankday in blankdays">
                                                                                    <div
                                                                                        style="width: 14.28%"
                                                                                        class="text-center
                                                                                border
                                                                                p-1
                                                                                border-transparent
                                                                                text-sm"
                                                                                    ></div>
                                                                                </template>
                                                                                <template
                                                                                    x-for="(date, dateIndex) in no_of_days"
                                                                                    :key="dateIndex"
                                                                                >
                                                                                    <div style="width: 14.28%"
                                                                                         class="px-1 mb-1">
                                                                                        <div
                                                                                            @click="getDateValue(date)"
                                                                                            x-text="date"
                                                                                            class="cursor-pointer
                                                                                    text-center text-sm
                                                                                    leading-none
                                                                                    rounded-full
                                                                                    leading-loose
                                                                                    transition
                                                                                    ease-in-out
                                                                                    duration-100"
                                                                                            :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                                        ></div>
                                                                                    </div>
                                                                                </template>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <script>
                                                            const MONTH_NAMES = [
                                                                "{{__('January')}}",
                                                                "{{__('February')}}",
                                                                "{{__('March')}}",
                                                                "{{__('April')}}",
                                                                "{{__('May')}}",
                                                                "{{__('June')}}",
                                                                "{{__('July')}}",
                                                                "{{__('August')}}",
                                                                "{{__('September')}}",
                                                                "{{__('October')}}",
                                                                "{{__('November')}}",
                                                                "{{__('December')}}",
                                                            ];
                                                            const DAYS = ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"];

                                                            function app() {
                                                                return {
                                                                    showDatepicker: false,
                                                                    datepickerValue: "",

                                                                    month: "",
                                                                    year: "",
                                                                    no_of_days: [],
                                                                    blankdays: [],
                                                                    days: ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"],

                                                                    initDate() {
                                                                        let today = new Date();
                                                                        this.month = today.getMonth();
                                                                        this.year = today.getFullYear();
                                                                        this.datepickerValue = new Date(
                                                                            this.year,
                                                                            this.month,
                                                                            today.getDate()
                                                                        ).toDateString();
                                                                    },

                                                                    isToday(date) {
                                                                        const today = new Date();
                                                                        const d = new Date(this.year, this.month, date);

                                                                        return today.toDateString() === d.toDateString() ? true : false;
                                                                    },

                                                                    getDateValue(date) {
                                                                        let selectedDate = new Date(this.year, this.month, date);
                                                                        this.datepickerValue = selectedDate.toDateString();

                                                                        this.$refs.date.value =
                                                                            selectedDate.getFullYear() +
                                                                            "-" +
                                                                            ("0" + selectedDate.getMonth()).slice(-2) +
                                                                            "-" +
                                                                            ("0" + selectedDate.getDate()).slice(-2);

                                                                        console.log(this.$refs.date.value);

                                                                        this.showDatepicker = false;
                                                                    },

                                                                    getNoOfDays() {
                                                                        let daysInMonth = new Date(
                                                                            this.year,
                                                                            this.month + 1,
                                                                            0
                                                                        ).getDate();

                                                                        // find where to start calendar day of week
                                                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                                                        let blankdaysArray = [];
                                                                        for (var i = 1; i <= dayOfWeek; i++) {
                                                                            blankdaysArray.push(i);
                                                                        }

                                                                        let daysArray = [];
                                                                        for (var i = 1; i <= daysInMonth; i++) {
                                                                            daysArray.push(i);
                                                                        }

                                                                        this.blankdays = blankdaysArray;
                                                                        this.no_of_days = daysArray;
                                                                    },
                                                                };
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-1 w-1/3 mx-2">
                                                <label class="font-bold" for="name">Monto total de percecpción</label>
                                                <input
                                                    class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                                    type="text" id="name" name="Name">

                                            </div>
                                            <div class="flex-1 w-1/3 mx-2">
                                                <label class="font-bold" for="name">Numero de periodos</label>
                                                <input
                                                    class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                                    type="text" id="name" name="Name">

                                            </div>
                                        </div>

                                        <div class="text-left py-2">
                                            <label class="font-bold"
                                                   for="name">{{__('Accounting account')}}</label>
                                        </div>
                                        <label class="w-full">
                                            <select class="w-full rounded dark:bg-dark dark:text-white">
                                                <option value="001">Cuenta BBVA 1256</option>
                                                <option value="002">Cuenta BBVA 6987</option>
                                                <option value="002">Cuenta Santander 4585</option>

                                            </select>
                                        </label>


                                        <div class="btn-top-holder my-3 flow-root">
                                            <a href="javascript: history.go(-1)" class="btn btn-dark float-right">
                                                {{ __('Save') }}
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-4 mb-4">
                    <div class="flex mb-2">
                        <div class="w-1/2 mb-2"><h2>Deducciones periódicas </h2></div>

                    </div>
                    <div class="flex px-4 mb-6">
                        <div class="w-4/12 w-full">Prestamo personal</div>
                        <div class="w-4/12 w-full font-bold">Extraordinario</div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="w-1/12 w-full"><i class="fa-solid fa-trash-can"></i></div>
                    </div>

                    <div class="accordion" id="workingDayAccordion">
                        <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                            {{--                Accordion header--}}
                            <div class="accordion-header mr-4" id="deduction">
                                <div class="flex">
                                    <div class="flex-1">Agregar Deducción</div>
                                    <div class="flex-2">
                                        <button type="button" data-bs-toggle="collapse"
                                                data-bs-target="#deduction"
                                                aria-expanded="false" aria-controls="deduction">
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--                Accordion Body--}}
                            <div id="workingDayCollapse" class="accordion-collapse collapse"
                                 aria-labelledby="deduction"
                                 data-bs-parent="#deduction">
                                <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                                    <form action="" class="text-black rounded">
                                        <label class="font-bold" for="name">{{__('Concept name')}}</label>
                                        <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                               type="text" id="name" name="Name">


                                        <label class="font-bold my-2" for="name">{{__('SAT Concept')}}</label>
                                        <label class="w-full">
                                            <select class="rounded w-full dark:bg-dark dark:text-white">
                                                <option value="001">004 Rembolso gastos médicos</option>
                                                <option value="002">006 Caja de ahorro</option>
                                                <option value="002">009 Contribuciones a cargo de trabajadores</option>
                                                <option value="002">011 Prima de seguro de vida</option>
                                                <option value="002">012 Seguro gastos médicos</option>
                                                <option value="002">013 Cueotas sindicales patrón</option>
                                                <option value="002">014 Subsidio incapacidades</option>
                                                <option value="002">015 Becas a trabajadores y/o hijos de trabajadores
                                                </option>
                                                <option value="002">023 Pagos por separación</option>
                                                <option value="002">025 Indemnizaciones</option>
                                                <option value="002">026 Rembolso de funeral</option>
                                                <option value="002">027 Cuotas de Seguridad Social del patrón</option>
                                                <option value="002">029 Vales de despensa en efectivo</option>
                                                <option value="002">031 Vales de gasolina</option>
                                                <option value="002">032 Vales de ropa</option>
                                                <option value="002">033 Ayuda de renta</option>
                                                <option value="002">034 Ayuda de articulos escolares</option>
                                                <option value="002">035 Ayuda de adqusición de anteojos</option>
                                                <option value="002">036 Ayuda al transporte</option>
                                                <option value="002">037 Ayuda gastos funerarios</option>
                                                <option value="002">038 Otros ingresos y salarios</option>
                                                <option value="002">044 Jubilaciones y pensiones</option>
                                                <option value="002">047 Alimentación</option>
                                                <option value="002">048 Habitación</option>

                                            </select>
                                        </label>

                                        <div class="flex">
                                            {{--Periodicidad--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Periodicity')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Periodica</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Extraordinaria</label>
                                                </div>
                                            </div>
                                            {{--Tipo percepción--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Type of deduction')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Ordinario</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Extraordinario</label>
                                                </div>
                                            </div>
                                            {{--Tipo de pago--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Payment type')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Ordinario</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Especie</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="flex">

                                            {{--Grava ISR--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Gravel ISR')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Si</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>No</label>
                                                </div>
                                            </div>
                                            {{--Grava ISN--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('Gravel ISN')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Si</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>No</label>
                                                </div>
                                            </div>
                                            {{--Integra IMSS--}}
                                            <div class="flex-1 w-1/3">
                                                <label class="font-bold mt-4 mb-2"
                                                       for="name">{{__('IMSS integrate')}}</label>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>Si</label>
                                                </div>

                                                <div class="my-2">
                                                    <input type="radio" id="id" name="name" value="value">
                                                    <label>No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex my-3">
                                            <div class="flex-1 w-1/3">
                                                {{--Date Picker---------------}}
                                                <div
                                                    class="flex-1 items-center justify-center bg-gray-200 h-full dark:bg-dark dark:text-white">
                                                    <script
                                                        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                                        defer></script>

                                                    <style>
                                                        [x-cloak] {
                                                            display: none;
                                                        }
                                                    </style>

                                                    <div class="antialiased sans-serif w-full">
                                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]"
                                                             x-cloak>
                                                            <div class="container mx-auto px-4 py-2 md:py-10">
                                                                <div class="mb-5">
                                                                    <label for="datepicker"
                                                                           class="font-bold mb-1 text-gray-700 block dark:text-white">Fecha
                                                                        de inicio de deducción</label
                                                                    >
                                                                    <div class="relative">
                                                                        <input type="hidden" name="date" x-ref="date"/>
                                                                        <input
                                                                            type="text"
                                                                            readonly
                                                                            x-model="datepickerValue"
                                                                            @click="showDatepicker = !showDatepicker"
                                                                            @keydown.escape="showDatepicker = false"
                                                                            class=" w-full
                                                                    pl-4
                                                                    pr-10
                                                                    py-3
                                                                    leading-none
                                                                    rounded-lg
                                                                    shadow-sm
                                                                    focus:outline-none focus:shadow-outline
                                                                    text-gray-600
                                                                    font-medium"
                                                                            placeholder={{__('Select Date')}}
                                                                        />

                                                                        <div class="absolute top-0 right-0 px-3 py-2">
                                                                            <svg
                                                                                class="h-6 w-6 text-gray-400"
                                                                                fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor"
                                                                            >
                                                                                <path
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                                                />
                                                                            </svg>
                                                                        </div>

                                                                        <!-- <div x-text="no_of_days.length"></div>
                                                                                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                                    <div x-text="new Date(year, month).getDay()"></div> -->

                                                                        <div
                                                                            class="bg-white
                                                                    mt-12
                                                                    rounded-lg
                                                                    shadow
                                                                    p-4
                                                                    absolute
                                                                    top-0
                                                                    left-0"
                                                                            style="width: 17rem"
                                                                            x-show.transition="showDatepicker"
                                                                            @click.away="showDatepicker = false"
                                                                        >
                                                                            <div
                                                                                class="flex justify-between items-center mb-2">
                                                                                <div>
                  <span
                      x-text="MONTH_NAMES[month]"
                      class="text-lg font-bold text-gray-800"
                  ></span>
                                                                                    <span
                                                                                        x-text="year"
                                                                                        class="ml-1 text-lg text-gray-600 font-normal"
                                                                                    ></span>
                                                                                </div>
                                                                                <div>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                        :disabled="month == 0 ? true : false"
                                                                                        @click="month--; getNoOfDays()"
                                                                                    >
                                                                                        <svg
                                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor"
                                                                                        >
                                                                                            <path
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M15 19l-7-7 7-7"
                                                                                            />
                                                                                        </svg>
                                                                                    </button>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                        :disabled="month == 11 ? true : false"
                                                                                        @click="month++; getNoOfDays()"
                                                                                    >
                                                                                        <svg
                                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor"
                                                                                        >
                                                                                            <path
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M9 5l7 7-7 7"
                                                                                            />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                                                <template x-for="(day, index) in DAYS"
                                                                                          :key="index">
                                                                                    <div style="width: 14.26%"
                                                                                         class="px-1">
                                                                                        <div
                                                                                            x-text="day"
                                                                                            class="text-gray-800 font-medium text-center text-xs"
                                                                                        ></div>
                                                                                    </div>
                                                                                </template>
                                                                            </div>

                                                                            <div class="flex flex-wrap -mx-1">
                                                                                <template x-for="blankday in blankdays">
                                                                                    <div
                                                                                        style="width: 14.28%"
                                                                                        class="text-center
                                                                                border
                                                                                p-1
                                                                                border-transparent
                                                                                text-sm"
                                                                                    ></div>
                                                                                </template>
                                                                                <template
                                                                                    x-for="(date, dateIndex) in no_of_days"
                                                                                    :key="dateIndex"
                                                                                >
                                                                                    <div style="width: 14.28%"
                                                                                         class="px-1 mb-1">
                                                                                        <div
                                                                                            @click="getDateValue(date)"
                                                                                            x-text="date"
                                                                                            class="cursor-pointer
                                                                                    text-center text-sm
                                                                                    leading-none
                                                                                    rounded-full
                                                                                    leading-loose
                                                                                    transition
                                                                                    ease-in-out
                                                                                    duration-100"
                                                                                            :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                                        ></div>
                                                                                    </div>
                                                                                </template>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <script>
                                                            const MONTH_NAMES = [
                                                                "{{__('January')}}",
                                                                "{{__('February')}}",
                                                                "{{__('March')}}",
                                                                "{{__('April')}}",
                                                                "{{__('May')}}",
                                                                "{{__('June')}}",
                                                                "{{__('July')}}",
                                                                "{{__('August')}}",
                                                                "{{__('September')}}",
                                                                "{{__('October')}}",
                                                                "{{__('November')}}",
                                                                "{{__('December')}}",
                                                            ];
                                                            const DAYS = ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"];

                                                            function app() {
                                                                return {
                                                                    showDatepicker: false,
                                                                    datepickerValue: "",

                                                                    month: "",
                                                                    year: "",
                                                                    no_of_days: [],
                                                                    blankdays: [],
                                                                    days: ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"],

                                                                    initDate() {
                                                                        let today = new Date();
                                                                        this.month = today.getMonth();
                                                                        this.year = today.getFullYear();
                                                                        this.datepickerValue = new Date(
                                                                            this.year,
                                                                            this.month,
                                                                            today.getDate()
                                                                        ).toDateString();
                                                                    },

                                                                    isToday(date) {
                                                                        const today = new Date();
                                                                        const d = new Date(this.year, this.month, date);

                                                                        return today.toDateString() === d.toDateString() ? true : false;
                                                                    },

                                                                    getDateValue(date) {
                                                                        let selectedDate = new Date(this.year, this.month, date);
                                                                        this.datepickerValue = selectedDate.toDateString();

                                                                        this.$refs.date.value =
                                                                            selectedDate.getFullYear() +
                                                                            "-" +
                                                                            ("0" + selectedDate.getMonth()).slice(-2) +
                                                                            "-" +
                                                                            ("0" + selectedDate.getDate()).slice(-2);

                                                                        console.log(this.$refs.date.value);

                                                                        this.showDatepicker = false;
                                                                    },

                                                                    getNoOfDays() {
                                                                        let daysInMonth = new Date(
                                                                            this.year,
                                                                            this.month + 1,
                                                                            0
                                                                        ).getDate();

                                                                        // find where to start calendar day of week
                                                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                                                        let blankdaysArray = [];
                                                                        for (var i = 1; i <= dayOfWeek; i++) {
                                                                            blankdaysArray.push(i);
                                                                        }

                                                                        let daysArray = [];
                                                                        for (var i = 1; i <= daysInMonth; i++) {
                                                                            daysArray.push(i);
                                                                        }

                                                                        this.blankdays = blankdaysArray;
                                                                        this.no_of_days = daysArray;
                                                                    },
                                                                };
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-1 w-1/3 mx-2">
                                                <label class="font-bold" for="name">Monto total de deducción</label>
                                                <input
                                                    class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                                    type="text" id="name" name="Name">

                                            </div>
                                            <div class="flex-1 w-1/3 mx-2">
                                                <label class="font-bold" for="name">Numero de deducción</label>
                                                <input
                                                    class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                                    type="text" id="name" name="Name">

                                            </div>
                                        </div>

                                        <div class="text-left py-2">
                                            <label class="font-bold"
                                                   for="name">{{__('Accounting account')}}</label>
                                        </div>
                                        <label class="w-full">
                                            <select class="w-full rounded dark:bg-dark dark:text-white">
                                                <option value="001">Cuenta BBVA 1256</option>
                                                <option value="002">Cuenta BBVA 6987</option>
                                                <option value="002">Cuenta Santander 4585</option>

                                            </select>
                                        </label>


                                        <div class="btn-top-holder my-3 flow-root">
                                            <a href="javascript: history.go(-1)" class="btn btn-dark float-right">
                                                {{ __('Save') }}
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{--            Eventos----------------------------------------------------------}}
            <div id="events-table" class="retentions-table d-none">

                <div class="card p-4 mb-2">
                    <h2 class="mb-2">Solicitudes pendientes</h2>
                    <div class="flex px-4 my-4">
                        <div class="w-4/12 w-full">4 días vacaciones</div>
                        <div class="w-4/12 w-full font-bold">24/05/2022 - 28/05/2022</div>
                        <div class="w-1/12 w-full cursor-pointer"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12 w-full cursor-pointer"><i class="fa-solid fa-circle-check"></i></div>
                        <div class="w-1/12 w-full cursor-pointer"><i class="fa-solid fa-circle-x"></i></div>
                    </div>

                </div>
                <div class="card p-4 mb-2">
                    <div class="flex mb-4">
                        <div class="w-1/4">
                            <h2 class="mb-2"><i class="fa-solid fa-brightness"></i> Vacaciones</h2>
                        </div>
                        <div class="w-1/4">
                            <h2 class="mb-2"><i class="fa-solid fa-truck-medical"></i> Incapacidades</h2>
                        </div>
                        <div class="w-1/4">
                            <h2 class="mb-2"><i class="fa-solid fa-timer"></i> Horas extras</h2>
                        </div>
                        <div class="w-1/4">
                            <h2 class="mb-2"><i class="fa-solid fa-calendar-day"></i> Días económicos</h2>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-1/4 ml-6">
                            <p>0 días utilizados</p>
                            <p>0 días aprobados</p>
                            <p>8 días disponibles</p>
                            <p>0 días pendientes</p>
                        </div>
                        <div class="w-1/4 ml-6">
                            <p>0 días utilizados</p>
                            <p>0 días aprobados</p>
                            <p>0 días rechazados</p>
                            <p>0 días pendientes</p>
                        </div>
                        <div class="w-1/4 ml-6">
                            <p>0 horas utilizados</p>
                            <p>0 horas aprobados</p>
                            <p>0 horas rechazados</p>
                            <p>0 horas pendientes</p>
                        </div>
                        <div class="w-1/4 ml-6">
                            <p>0 días utilizados</p>
                            <p>0 días aprobados</p>
                            <p>0 días rechazados</p>
                            <p>0 días pendientes</p>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-2">
                    <div class="flex my-1">
                        <div class="w-1/3 w-full">Pólitica</div>
                        <div class="w-1/3 w-full font-bold">Política 1</div>
                        <div class="w-1/3 w-full"></div>
                    </div>
                    <div class="flex my-1 bg-gray-200">
                        <div class="w-1/3 w-full">Beneficios</div>
                        <div class="w-1/3 w-full font-bold">Días económicos</div>
                        <div class="w-1/3 w-full">10</div>
                    </div>
                    <div class="flex my-1">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Descuento proporción séptimo día</div>
                        <div class="w-1/3 w-full">No</div>
                    </div>
                    <div class="flex my-1 bg-gray-200">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Se descuentan faltas</div>
                        <div class="w-1/3 w-full">Sí</div>
                    </div>
                    <div class="flex my-1">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Se descuentan incapacidades</div>
                        <div class="w-1/3 w-full">Si</div>
                    </div>
                    <div class="flex my-1 bg-gray-200">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Prima Vacacional al aniversario</div>
                        <div class="w-1/3 w-full">Sí</div>
                    </div>
                    <div class="flex my-1">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Días de Vacaciones</div>
                        <div class="w-1/3 w-full">18</div>
                    </div>
                    <div class="flex my-1 bg-gray-200">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Prima Vacacional</div>
                        <div class="w-1/3 w-full">0.25</div>
                    </div>
                    <div class="flex my-1">
                        <div class="w-1/3 w-full"></div>
                        <div class="w-1/3 w-full font-bold">Días de Aguinaldo</div>
                        <div class="w-1/3 w-full">15</div>
                    </div>

                </div>
            </div>

            {{--            Documents--------------------------------------------------------}}
            <div id="documents-table" class="retentions-table d-none">

                {{--        Percepcion Accordion--}}
                <div class="accordion" id="workingDayAccordion">
                    <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                        {{--                Accordion header--}}
                        <div class="accordion-header mr-4" id="headingWorkingDay">
                            <div class="flex">
                                <div class="flex-1">Subir documento</div>
                                <div class="flex-2">
                                    <button type="button" data-bs-toggle="collapse"
                                            data-bs-target="#workingDayCollapse"
                                            aria-expanded="false" aria-controls="workingDayCollapse">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{--                Accordion Body--}}
                        <div id="workingDayCollapse" class="accordion-collapse collapse"
                             aria-labelledby="headingWorkingDay"
                             data-bs-parent="#workingDayAccordion">
                            <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                                <form action="" class="text-black rounded">
                                    <label class="font-bold" for="name">Nombre</label>
                                    <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                           type="text" id="name" name="Name">
                                    <input type="file" name="logo_square_url" class="form-control">
                                    <div class="btn-top-holder my-3 flow-root">
                                        <a href="javascript: history.go(-1)" class="btn btn-dark float-right">
                                            {{ __('Upload') }}
                                        </a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-2">

                    <div class="flex items-center mb-2">
                        <div class="w-1/12"></div>
                        <div class="w-3/12 font-bold">Nombre</div>
                        <div class="w-3/12 font-bold">Fecha de subida</div>
                        <div class="w-2/12 font-bold">Tipo</div>
                        <div class="w-3/12 font-bold">Autor</div>
                        <div class="w-1/12 font-bold"></div>
                        <div class="w-1/12 font-bold"></div>
                        <div class="w-1/12 font-bold"></div>
                    </div>

                    <div class="flex items-center my-2">
                        <div class="w-1/12"><i class="fa-solid fa-file-pdf ml-3 text-gray-500"></i></div>
                        <div class="w-3/12">Acta de nacimiento <i class="fa-solid fa-pen-to-square text-gray-400 cursor-pointer"></i></div>
                        <div class="w-3/12">22/01/2021</div>
                        <div class="w-2/12">PDF</div>
                        <div class="w-3/12">Administrador</div>
                        <div class="w-1/12"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-arrow-down-to-bracket"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-trash-can"></i></div>
                    </div>

                    <div class="flex items-center my-2">
                        <div class="w-1/12"><i class="fa-solid fa-file-pdf ml-3 text-gray-500"></i></div>
                        <div class="w-3/12">CURP <i class="fa-solid fa-pen-to-square text-gray-400 cursor-pointer"></i></div>
                        <div class="w-3/12">22/01/2021</div>
                        <div class="w-2/12">PDF</div>
                        <div class="w-3/12">Administrador</div>
                        <div class="w-1/12"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-arrow-down-to-bracket"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-trash-can"></i></div>
                    </div>

                    <div class="flex items-center my-2">
                        <div class="w-1/12"><i class="fa-solid fa-file-image ml-3 text-gray-500"></i></div>
                        <div class="w-3/12">RFC <i class="fa-solid fa-pen-to-square text-gray-400 cursor-pointer"></i></div>
                        <div class="w-3/12">22/01/2021</div>
                        <div class="w-2/12">JPG</div>
                        <div class="w-3/12">Usuario</div>
                        <div class="w-1/12"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-arrow-down-to-bracket"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-trash-can"></i></div>
                    </div>

                    <div class="flex items-center my-2">
                        <div class="w-1/12"><i class="fa-solid fa-file-pdf ml-3 text-gray-500"></i></div>
                        <div class="w-3/12">Pasaporte <i class="fa-solid fa-pen-to-square text-gray-400 cursor-pointer"></i></div>
                        <div class="w-3/12">22/01/2021</div>
                        <div class="w-2/12">PDF</div>
                        <div class="w-3/12">Administrador</div>
                        <div class="w-1/12"><i class="fa-solid fa-eye"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-arrow-down-to-bracket"></i></div>
                        <div class="w-1/12"><i class="fa-solid fa-trash-can"></i></div>
                    </div>
                </div>
            </div>

            {{--            Kardex-----------------------------------------------------------}}
            <div id="kardex-table" class="retentions-table d-none">

                <div class="card p-4 mb-4">
                    <h2 class="mb-4">Movimientos del empleado</h2>

                    <div class="flex items-center mb-2">
                        <div class="w-3/12 font-bold">Fecha del movimiento</div>
                        <div class="w-2/12 font-bold">Fecha IMSS</div>
                        <div class="w-2/12 font-bold">Registro patronal</div>
                        <div class="w-4/12 font-bold">Tipo de movimiento</div>
                        <div class="w-1/12 font-bold"></div>
                    </div>

                    <div class="flex items-center my-2">
                        <div class="w-3/12">02/05/2009</div>
                        <div class="w-2/12">02/05/2009</div>
                        <div class="w-2/12">23695369</div>
                        <div class="w-4/12">Modificación salarial</div>
                        <div class="w-1/12"><i class="fa-solid fa-eye"></i></div>
                    </div>

                    <div class="flex items-center my-2">
                        <div class="w-3/12">07/04/2020</div>
                        <div class="w-2/12">10/04/2020</div>
                        <div class="w-2/12">23695369</div>
                        <div class="w-4/12">Promoción empleado</div>
                        <div class="w-1/12"><i class="fa-solid fa-eye"></i></div>
                    </div>

                </div>

            </div>

            {{--            Notas-----------------------------------------------------------}}
            <div id="notes-table" class="retentions-table d-none">

                <div class="card p-4 mb-4">
                    <h2 class="mb-4">Notas</h2>
                    <textarea name="nota" id="nota" cols="100%" rows="10"></textarea>
                    <div class="btn-top-holder my-3 flow-root">
                        <a  class="btn btn-dark float-right cursor-pointer">
                            {{ __('Save') }}
                        </a>
                    </div>

                    <div class="p-4 border border-gray-600 ">
                        <div class="flex mb-4">
                            <div class="w-5/12 font-bold">05/04/2021</div>
                            <div class="w-5/12 font-bold">Administrador</div>
                            <div class="w-1/12 cursor-pointer flow-root"><i class="fa-solid fa-pen-to-square"></i></div>
                            <div class="w-1/12 cursor-pointer flow-root"><i class="fa-solid fa-trash-can"></i></div>
                        </div>

                        <div class="flex items-center my-2">
                            <div class="w-full">El empleado tiene a consignacion una laptop Dell numero de serie DU25636936</div>

                        </div>
                    </div>


                </div>

            </div>

        </div>


    </div>

    </div>
    @push('inline_scripts')
        <script>
            // Alpine function to change between tabs
            function data() {
                return {
                    changeTab(button) {
                        let retentionsButton = document.getElementById(`${button}-button`);
                        let retentionTabs = document.querySelectorAll('.tab-retention')
                        let allRetentionTables = document.querySelectorAll('.retentions-table')
                        let retentionTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if (!retentionsButton.classList.contains('active')) {
                            retentionTabs.forEach(item => {
                                item.classList.remove('active', 'bg-primary', 'text-white')
                            })
                            allRetentionTables.forEach(item => {
                                item.classList.add('d-none')
                            })
                            retentionsButton.classList.add('active', 'bg-primary', 'text-white')
                            retentionTable.classList.remove('d-none')
                        }
                    }
                }
            }

        </script>
    @endpush
</x-app-tenant>
