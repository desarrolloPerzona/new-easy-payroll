<x-app-tenant>
    <div class="container mx-auto mb-6">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Working days') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('working-day-holiday.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New working day') }}
            </a>
        </div>
<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <table class="table">
                <tr>
                    <th>{{__('Working day')}}</th>
                    <th class="text-center">{{__('Type of shift')}}</th>
                    <th class="text-center">{{__('Working hours')}}</th>
                    <th colspan="3"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--J1--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">{{__('Jornada 1')}}</td>
                                <td style="width: 35%">{{__('Diurna')}}</td>
                                <td style="width: 25%">{{__('8 horas')}}</td>
                                <td style="width: 2%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1"
                                            aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('working-day-holiday.edit',1)}}">
                                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flex-2 text-left w-1/2"><label class="my-2 font-bold">Jornada 1</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label
                                            class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flex-2 text-left w-1/2"><label class="my-2 font-bold">Diurno</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Days')}}</label></div>
                                    <div class="flex-2 text-left w-1/2"><label class="my-2 font-bold">Lunes, Martes,
                                            Miercoles, Jueves, Viernes</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label
                                            class="my-2">{{__('Working hours')}}</label></div>
                                    <div class="flex-2 text-left w-1/2"><label class="my-2 font-bold">8 horas</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Meal hours')}}</label>
                                    </div>
                                    <div class="flex-2 text-left w-1/2"><label class="my-2 font-bold">14:00 a
                                            15:00</label></div>
                                </div>

                                <table class="table">
                                    <th>Días de trabajo</th>
                                    <th>Horario de entrada</th>
                                    <th>Horario de salida</th>

                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Lunes</td>
                                    <td class="p-0" style="width: 30%">9:00</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Martes</td>
                                    <td class="p-0" style="width: 30%">9:00</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Miercoles</td>
                                    <td class="p-0" style="width: 30%">9:00</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Jueves</td>
                                    <td class="p-0" style="width: 30%">9:00</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Viernes</td>
                                    <td class="p-0" style="width: 30%">9:00</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                </table>
                            </div>
                        </div>
                    </div>


                    {{--J2--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">{{__('Jornada 2')}}</td>
                                <td style="width: 35%">{{__('Nocturna')}}</td>
                                <td style="width: 25%">{{__('8 horas')}}</td>
                                <td style="width: 2%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS2"
                                            aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i
                                        class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseS2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Jornada 2</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label
                                            class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Nocturna</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Days')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Lunes, Martes,
                                            Miercoles, Jueves, Viernes</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label
                                            class="my-2">{{__('Working hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">8 horas</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Meal hours')}}</label>
                                    </div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">21:00 a
                                            22:00</label></div>
                                </div>

                                <table class="table">
                                    <th>Días de trabajo</th>
                                    <th>Horario de entrada</th>
                                    <th>Horario de salida</th>

                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Lunes</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Martes</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Miercoles</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Jueves</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Viernes</td>
                                    <td class="p-0" style="width: 30%">18:00</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{--J3--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">{{__('Jornada 3')}}</td>
                                <td style="width: 35%">{{__('Mixta')}}</td>
                                <td style="width: 25%">{{__('6 horas')}}</td>
                                <td style="width: 2%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS3"
                                            aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i
                                        class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseS3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Jornada 3</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label
                                            class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Mixta</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Days')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Lunes, Martes,
                                            Miercoles, Jueves, Viernes</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label
                                            class="my-2">{{__('Working hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">6 horas</label>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Meal hours')}}</label>
                                    </div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">6:00 a
                                            7:00</label></div>
                                </div>

                                <table class="table">
                                    <th>Días de trabajo</th>
                                    <th>Horario de entrada</th>
                                    <th>Horario de salida</th>

                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Lunes</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                    <td class="p-0" style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Martes</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                    <td class="p-0" style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Miercoles</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                    <td class="p-0" style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Jueves</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                    <td class="p-0" style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td class="p-0" style="width: 30%">Viernes</td>
                                    <td class="p-0" style="width: 30%">2:00</td>
                                    <td class="p-0" style="width: 30%">8:00</td>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--ACCORDION--}}

        </div>


        <div class="container">
            <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
                <i class="fak fa-admin-perzona mr-2"></i>
                <span style="display: inline-flex;">{{ __('Holidays') }}</span>
            </h2>


            {{--Nuevo día festivo ----------------}}

            <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition">

                <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                    <div class="accordion-header mr-4" id="headingOne">


                        <div class="flex">
                            <div class="flex-1 pb-2">{{__('New holiday')}}</div>
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
                                    <div><label class="font-bold" for="name">{{__('Name')}}</label></div>
                                    <div><input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                                                name="Name"></div>
                                </div>
                                <div class="flex my-4 m-auto">
                                    {{--Date Picker---------------}}
                                    <div class="flex-1 items-center justify-center bg-gray-200 h-full dark:bg-dark dark:text-white">
                                        {{--                                <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"/>--}}
                                        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
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
                                                               class="font-bold mb-1 text-gray-700 block dark:text-white">{{__('Select Date')}}</label
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
                                                                    <template x-for="(day, index) in DAYS" :key="index">
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
                                                                        <div style="width: 14.28%" class="px-1 mb-1">
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
                                        <label class="font-bold my-2" for="name">{{__('It works')}}</label>
                                        <div>
                                            <input type="radio" id="si" name="Si" value="Si">
                                            <label for="si">{{__('Yes')}}</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="no" name="No" value="No">
                                            <label for="no">{{__('No')}}</label>
                                        </div>
                                    </div>

                                    <div class="flex-1 text-center">
                                        <label class="font-bold my-2" for="name">{{__('Holiday schedule')}}</label>
                                        <div>
                                            <input type="radio" id="allday" name="allday" value="allday">
                                            <label for="dewey">{{__('All day')}}</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="byschedule" name="byschedule" value="byschedule">
                                            <label for="louie">{{__('By schedule')}}</label>
                                        </div>

                                    </div>
                                    <div class="flex-1 text-center">
                                        <div><label class="font-bold my-2" for="name">Horario</label></div>
                                        <div class="pt-2"><label>
                                                <select class="w-full rounded dark:bg-dark dark:text-white">
                                                    <option value="001">00:00</option>
                                                    <option value="002">01:00</option>
                                                    <option value="002">02:00</option>
                                                    <option value="002">03:00</option>
                                                    <option value="002">04:00</option>
                                                    <option value="002">05:00</option>
                                                    <option value="002">06:00</option>
                                                    <option value="002">07:00</option>
                                                    <option value="002">08:00</option>
                                                    <option value="002">09:00</option>
                                                    <option value="002">10:00</option>
                                                    <option value="002">11:00</option>
                                                    <option value="002">12:00</option>

                                                </select>
                                            </label>
                                            <label>
                                                <select class="w-full rounded dark:bg-dark dark:text-white">
                                                    <option value="001">00:00</option>
                                                    <option value="002">01:00</option>
                                                    <option value="002">02:00</option>
                                                    <option value="002">03:00</option>
                                                    <option value="002">04:00</option>
                                                    <option value="002">05:00</option>
                                                    <option value="002">06:00</option>
                                                    <option value="002">07:00</option>
                                                    <option value="002">08:00</option>
                                                    <option value="002">09:00</option>
                                                    <option value="002">10:00</option>
                                                    <option value="002">11:00</option>
                                                    <option value="002">12:00</option>

                                                </select>
                                            </label></div>
                                    </div>

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


    <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

                <div class="border-bottom-1 border-gray-400 py-3">
                    <h2>Festivos oficiales México</h2>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Enero
                        </div>
                        <div class="flex-1">
                            Viernes 1 de enero | Año Nuevo.
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Febrero
                        </div>
                        <div class="flex-1">
                            Lunes 1 de febrero | Por el 5 de febrero (Día de la Constitución mexicana).
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500 ">
                            Marzo
                        </div>
                        <div class="flex-1">
                            Lunes 15 de marzo | Por el 21 de marzo (Natalicio de Benito Juárez).
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Abril
                        </div>
                        <div class="flex-1">
                            --
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500 ">
                            Mayo
                        </div>
                        <div class="flex-1">
                            Sábado 1 de mayo | Día del Trabajo.
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Junio
                        </div>
                        <div class="flex-1">
                            --
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Julio
                        </div>
                        <div class="flex-1">
                            --
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Agosto
                        </div>
                        <div class="flex-1">
                            --
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Septiembre
                        </div>
                        <div class="flex-1">
                            Jueves 16 de septiembre | Día de la Independencia.
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Octubre
                        </div>
                        <div class="flex-1">
                            --
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Noviembre
                        </div>
                        <div class="flex-1">
                            Lunes 15 de noviembre | Por el 20 de noviembre (Día de la Revolución).
                        </div>
                    </div>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Diciembre
                        </div>
                        <div class="flex-1">
                            Sábado 25 de diciembre | Navidad
                        </div>
                    </div>

                </div>

                <div class="border-bottom-1 border-gray-400 py-3">
                    <h2>Festivos empresa <i class="fas fa-edit text-gray-400"></i></h2>
                    <div class="flex pt-2">
                        <div class="flex-1 text-gray-500">
                            Julio
                        </div>
                        <div class="flex-1">
                            Lunes 5 de Julio | Aniversario de la empresa
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>

</x-app-tenant>

