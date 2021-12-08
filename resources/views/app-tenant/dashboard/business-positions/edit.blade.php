<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fas fa-sitemap mr-2"></i>
            <span style="display: inline-flex;">Editar Director MKT</span>
        </h2>

        {{--Seat--}}
        <div class="card bg-white shadow-sm rounded p-4 mb-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <h2 class="mb-2 font-bold">{{__('Seat')}}</h2>

            <div class="accordion-item">
                <div class="accordion-header mr-4" id="headingOne">
                    <table class="table">

                        <td style="width: 90%">Juan Perez</td>

                        <td style="width: 3%">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1"
                                    aria-expanded="false" aria-controls="collapseS1">
                                <i class="fas fa-repeat-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                            </button>
                        </td>

                        <td style="width: 3%">
                            <a href="#"></a>
                            <i class="fas fa-user-times text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                            </a>
                        </td>

                    </table>
                    <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                         data-bs-parent="#newItem">
                        <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">
                            <label class="font-bold my-2" for="name">{{__('Assign')}}</label>

                            <label class="w-full">
                                <select class="rounded w-full dark:bg-dark dark:text-white">
                                    <option value="001">Juan Perez</option>
                                    <option value="001">Alberto Ortiz</option>
                                    <option value="001">Juana Banana</option>
                                    <option value="001">Teresa Milagresa</option>
                                    <option value="001">Alfredo Adame</option>
                                    <option value="001">Jorge Guerra</option>
                                    <option value="001">Arturo Vidal</option>
                                    <option value="001">Ousame Dembele</option>
                                    <option value="001">Alex Bergantiños</option>
                                    <option value="001">Arturo Cubas</option>
                                    <option value="001">Alejandro Encinas</option>
                                    <option value="001">Hector Herrera</option>


                                </select>
                            </label>

                            <div class="my-2 text-right" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseS1" aria-expanded="false"
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

        {{--Prestaciones--}}
        <div class="card bg-white shadow-sm rounded p-4 mb-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <h2 class="my-2 font-bold">{{__('Benefits')}}</h2>

            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Area')}}</label>

                    {{-- <label class="w-full">
                         <select class="rounded w-full dark:bg-dark dark:text-white">
                             <option value="001">Dirección</option>
                             <option value="001">Marketing</option>
                             <option value="002">Contabilidad</option>

                         </select>
                     </label>--}}
                    <label class="my-2 w-full" for="name">Direccion</label>
                </div>
                <div class="flex-1">
                    <label class="font-bold my-2" for="name">{{__('Job Position')}}</label>

                    {{-- <label class="w-full">
                         <select class="rounded w-full dark:bg-dark dark:text-white">
                             <option value="001">Director de MKT</option>
                             <option value="001">Supervisor MKT</option>
                             <option value="002">Comunicacion y desarrollo 1</option>
                             <option value="002">Comunicacion y desarrollo 2</option>
                             <option value="002">Diseñador gráfico</option>

                         </select>
                     </label>--}}
                    <label class="my-2 w-full" for="name">Director</label>
                </div>
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Branch')}}</label>

                    {{--<label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">CDMX</option>
                            <option value="001">MTY</option>
                            <option value="002">GDL</option>

                        </select>
                    </label>--}}
                    <label class="w-full" for="name">CDMX</label>
                </div>
            </div>

            <div class="flex">

                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Policie')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Política 1</option>
                            <option value="001">Política 2</option>
                            <option value="001">Política 3</option>
                            <option value="001">Política 4</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
                    <label class="font-bold my-2" for="name">{{__('Working day')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Jornada 1</option>
                            <option value="001">Jornada 2</option>
                            <option value="001">Jornada 3</option>

                        </select>
                    </label>
                </div>
            </div>

            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Type of contract')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Contrato a término indefinido</option>
                            <option value="002">Contrato a Término Fijo</option>
                            <option value="003">Contrato de Obra o labor</option>
                            <option value="004">Contrato civil por prestación de servicios</option>
                            <option value="005">Contrato de aprendizaje</option>
                            <option value="006">Contrato ocasional de trabajo</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
                    <label class="font-bold my-2" for="name">{{__('Employee type')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Select 1</option>
                            <option value="001">Select 2</option>
                            <option value="001">Select 3</option>
                            <option value="001">Select 4</option>

                        </select>
                    </label>
                </div>
            </div>


            <div class="btn-top-holder my-2 text-right">
                <a href="#" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>
        </div>

        {{--Precepciones--}}
        <div class="card bg-white shadow-sm rounded p-4 mb-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <div class="border-b-2 border-gray-400 pb-4">
                <h2 class="font-bold my-2">{{__('Perceptions')}}</h2>
                <label class="font-bold my-2" for="name">{{__('Payment method')}}</label>
                <label class="w-full">
                    <select class="rounded w-full dark:bg-dark dark:text-white">
                        <option value="001">STP</option>
                        <option value="001">Cuenta BBVA 1256</option>
                        <option value="001">Cuenta BBVA 6987</option>
                        <option value="001">Cuenta Santander 4585</option>
                        <option value="002">Cheque</option>
                        <option value="002">Efectivo</option>

                    </select>
                </label>
                <div>
                    <label class="font-bold my-2" for="name">{{__('Payroll')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Grupo 2 (Quincenal)</option>
                            <option value="001">Grupo 1 (Semanal)</option>
                            <option value="001">Grupo 3 (Mensual)</option>

                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 border-gray-400 pb-4">
                <label class="my-2 font-bold">{{__('Payroll')}}</label>
                <div class="flex my-2">
                    <div class="flex-1 mr-3">
                        <label class="my-2 mr-2" for="name">Sueldo bruto mensual:</label>
                        <input type="text" class="rounded font-bold" placeholder="$65,000">
                    </div>
                    <div class="flex-1 mr-3">
                        <label class="my-2 mr-2" for="name">Salario base cotización:</label>
                        <span class="font-bold">$ 2,368.23</span>
                    </div>
                </div>
            </div>

            <div class="pb-4">
                <label class="my-2 font-bold">{{__('Periodic perceptions')}}</label>
                <table class="table">
                    <tr>
                        <th style="width: 20%">{{__('Perception')}}</th>
                        <th style="width: 10%">{{__('Start')}}</th>
                        <th style="width: 10%">{{__('End')}}</th>
                        <th style="width: 10%">{{__('Amount')}}</th>
                        <th style="width: 10%">{{__('Number of periods')}}</th>
                        <th style="width: 10%"></th>
                    </tr>

                </table>
                <table class="table">

                    <td style="width: 20%">Ayuda articulos escolares</td>
                    <td style="width: 10%">02/03/2021</td>
                    <td style="width: 10%">02/03/2022</td>
                    <td style="width: 10%">$15,000</td>
                    <td style="width: 10%">2</td>
                    <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                    <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>
                </table>
                <table class="table">

                    <td style="width: 20%">Ayuda a la renta</td>
                    <td style="width: 10%">01/06/2021</td>
                    <td style="width: 10%">31/12/2022</td>
                    <td style="width: 10%">$7,500</td>
                    <td style="width: 10%">4</td>
                    <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                    <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>
                </table>

                {{--Nueva percepción ----------------}}

                <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition">

                    <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                        <div class="accordion-header mr-4" id="headingOne">


                            <div class="flex">
                                <div class="flex-1 pb-2">{{__('New periodic prestation')}}</div>
                                <div class="flex-2">
                                    <button type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseP1" aria-expanded="false"
                                            aria-controls="collapseP1"><i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>


                            <div id="collapseP1" class="accordion-collapse collapse"
                                 aria-labelledby="headingTwo" data-bs-parent="#newPosition">
                                <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                                    <div>
                                        <label class="font-bold my-2" for="name">{{__('SAT code')}}</label>
                                        <div>
                                            <label class="w-full">
                                                <select class="rounded w-full dark:bg-dark dark:text-white">
                                                    <option value="001">001 Sueldos, salarios, rayas y jornales</option>
                                                    <option value="001">004 Rembolso gastos médicos</option>
                                                    <option value="002">006 Caja de ahorro</option>
                                                    <option value="002">009 Contribuciones a cargo de trabajadores
                                                    </option>
                                                    <option value="002">011 Prima de seguro de vida</option>
                                                    <option value="002">012 Seguro gastos médicos</option>
                                                    <option value="002">013 Cueotas sindicales patrón</option>
                                                    <option value="002">014 Subsidio incapacidades</option>
                                                    <option value="002">015 Becas a trabajadores y/o hijos de
                                                        trabajadores
                                                    </option>
                                                    <option value="002">023 Pagos por separación</option>
                                                    <option value="002">025 Indemnizaciones</option>
                                                    <option value="002">026 Rembolso de funeral</option>
                                                    <option value="002">027 Cuotas de Seguridad Social del patrón
                                                    </option>
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
                                        </div>
                                    </div>
                                    <div class="flex my-2 m-auto">
                                        {{--Date Picker---------------}}
                                        <div
                                            class="flex-1 items-center justify-center bg-gray-200 h-full dark:bg-dark dark:text-white">
                                            {{--                                <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"/>--}}
                                            <script
                                                src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                                defer></script>

                                            <style>
                                                [x-cloak] {
                                                    display: none;
                                                }
                                            </style>

                                            <div class="antialiased sans-serif w-full">
                                                <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                                    <div class="container mx-auto px-4 py-2 md:py-10">
                                                        <div class="mb-5">
                                                            <label for="datepicker"
                                                                   class="font-bold mb-1 text-gray-700 block dark:text-white">{{__('Start date')}}</label
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
                                                                    <div class="flex justify-between items-center mb-2">
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
                                                                            <div style="width: 14.26%" class="px-1">
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


                                        <div class="flex-1 text-center">
                                            <label class="font-bold my-2" for="name">{{__('Amount')}}</label>
                                            <input type="text" placeholder="$ 0.00">
                                        </div>

                                        <div class="flex-1 text-center">
                                            <label class="font-bold my-2" for="name">{{__('Number of periods')}}</label>
                                            <input type="text" placeholder="1">

                                        </div>
                                        <div class="flex-1 text-center pt-4">
                                            <input class="mr-4" type="checkbox" checked><label class="font-bold my-2"
                                                                                               for="name">{{__('Active provision')}}</label>
                                        </div>

                                    </div>
                                    <div class="text-right" type="button" data-bs-toggle="collapse"
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

            </div>

        </div>

        {{--Deducciones--}}
        <div class="card bg-white shadow-sm rounded p-4 mb-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <div class="pb-4">
                <h2 class="font-bold my-2">{{__('Deductions')}}</h2>
                <div class="border-b-2 border-gray-400">
                    <label class="font-bold my-2" for="name">{{__('IMSS')}}</label>
                    <div class="flex my-2">
                        <div class="flex-1">
                            <label for="period" class="font-bold">{{__('Period')}}</label>
                        </div>
                        <div class="flex-1">
                            <label for="period">Quincenal</label>
                        </div>
                    </div>
                </div>
                <div class="border-b-2 border-gray-400">
                    <label class="font-bold my-2" for="name">{{__('ISR')}}</label>
                    <div class="flex my-2">
                        <div class="flex-1">
                            <label for="period" class="font-bold">{{__('Period')}}</label>
                        </div>
                        <div class="flex-1">
                            <label for="period">Quincenal</label>
                        </div>
                    </div>
                </div>

                {{--Nueva deducción ----------------}}

                <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="NewDeduction">

                    <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                        <div class="accordion-header mr-4" id="headingOne">


                            <div class="flex">
                                <div class="flex-1 pb-2">{{__('New deduction')}}</div>
                                <div class="flex-2">
                                    <button type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseD1" aria-expanded="false"
                                            aria-controls="collapseD1"><i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>


                            <div id="collapseD1" class="accordion-collapse collapse"
                                 aria-labelledby="headingTwo" data-bs-parent="#NewDeduction">
                                <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                                    <div class="my-2">
                                        <label class="font-bold my-2" for="name">{{__('SAT code')}}</label>
                                        <div>
                                            <label class="w-full">
                                                <select class="rounded w-full dark:bg-dark dark:text-white">
                                                    <option value="001">001 Sueldos, salarios, rayas y jornales</option>
                                                    <option value="001">004 Rembolso gastos médicos</option>
                                                    <option value="002">006 Caja de ahorro</option>
                                                    <option value="002">009 Contribuciones a cargo de trabajadores
                                                    </option>
                                                    <option value="002">011 Prima de seguro de vida</option>
                                                    <option value="002">012 Seguro gastos médicos</option>
                                                    <option value="002">013 Cueotas sindicales patrón</option>
                                                    <option value="002">014 Subsidio incapacidades</option>
                                                    <option value="002">015 Becas a trabajadores y/o hijos de
                                                        trabajadores
                                                    </option>
                                                    <option value="002">023 Pagos por separación</option>
                                                    <option value="002">025 Indemnizaciones</option>
                                                    <option value="002">026 Rembolso de funeral</option>
                                                    <option value="002">027 Cuotas de Seguridad Social del patrón
                                                    </option>
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
                                        </div>
                                    </div>

                                    <div class="my-2">
                                        <label class="font-bold my-2" for="name">{{__('Period')}}</label>
                                        <div>
                                            <label class="w-full">
                                                <select class="rounded w-full dark:bg-dark dark:text-white">
                                                    <option value="001">Diario</option>
                                                    <option value="001">Semanal</option>
                                                    <option value="002">Decenal</option>
                                                    <option value="002">Quincenal</option>
                                                    <option value="002">Mensual</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="my-2 text-right" type="button" data-bs-toggle="collapse"
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
            </div>
        </div>

    </div>

</x-app-tenant>
