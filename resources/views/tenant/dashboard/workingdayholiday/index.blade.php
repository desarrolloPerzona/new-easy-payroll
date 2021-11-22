<x-app-tenant>
    <div class="container mx-auto mb-6">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Working days') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('employer-register.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New working day') }}
            </a>
        </div>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

            <table class="table">
                <tr>
                    <th >{{__('Working day')}}</th>
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

                    {{--CDMX--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">{{__('Jornada 1')}}</td>
                                <td style="width: 35%">{{__('Diurna')}}</td>
                                <td style="width: 25%">{{__('8 horas')}}</td>
                                <td style="width: 2%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseJ1" aria-expanded="false" aria-controls="collapseJ1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('workingdayholiday.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseJ1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Jornada 1</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Diurno</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Days')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Lunes, Martes, Miercoles, Jueves, Viernes</label></div>
                                </div>

                               <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Working hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">8 horas</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Meal hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">14:00 a 15:00</label></div>
                                </div>

                                <table class="table">
                                    <th>Días de trabajo</th>
                                    <th>Horario de entrada</th>
                                    <th>Horario de salida</th>

                                </table>
                                <table class="table">
                                    <td style="width: 30%">Lunes</td>
                                    <td style="width: 30%">9:00</td>
                                    <td style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Martes</td>
                                    <td style="width: 30%">9:00</td>
                                    <td style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Miercoles</td>
                                    <td style="width: 30%">9:00</td>
                                    <td style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Jueves</td>
                                    <td style="width: 30%">9:00</td>
                                    <td style="width: 30%">18:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Viernes</td>
                                    <td style="width: 30%">9:00</td>
                                    <td style="width: 30%">18:00</td>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>

                    {{--MTY--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">{{__('Jornada 2')}}</td>
                                <td style="width: 35%">{{__('Nocturna')}}</td>
                                <td style="width: 25%">{{__('8 horas')}}</td>
                                <td style="width: 2%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseJ2" aria-expanded="false" aria-controls="collapseJ2">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('employer-register.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseJ2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Jornada 2</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Nocturna</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Days')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Lunes, Martes, Miercoles, Jueves, Viernes</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Working hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">8 horas</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Meal hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">21:00 a 22:00</label></div>
                                </div>

                                <table class="table">
                                    <th>Días de trabajo</th>
                                    <th>Horario de entrada</th>
                                    <th>Horario de salida</th>

                                </table>
                                <table class="table">
                                    <td style="width: 30%">Lunes</td>
                                    <td style="width: 30%">18:00</td>
                                    <td style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Martes</td>
                                    <td style="width: 30%">18:00</td>
                                    <td style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Miercoles</td>
                                    <td style="width: 30%">18:00</td>
                                    <td style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Jueves</td>
                                    <td style="width: 30%">18:00</td>
                                    <td style="width: 30%">2:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Viernes</td>
                                    <td style="width: 30%">18:00</td>
                                    <td style="width: 30%">2:00</td>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{--GDL--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">{{__('Jornada 3')}}</td>
                                <td style="width: 35%">{{__('Mixta')}}</td>
                                <td style="width: 25%">{{__('6 horas')}}</td>
                                <td style="width: 2%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseJ3" aria-expanded="false" aria-controls="collapseJ3">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('employer-register.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseJ3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Jornada 3</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Type of shift')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Mixta</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Days')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Lunes, Martes, Miercoles, Jueves, Viernes</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Working hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">6 horas</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Meal hours')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">6:00 a 7:00</label></div>
                                </div>

                                <table class="table">
                                    <th>Días de trabajo</th>
                                    <th>Horario de entrada</th>
                                    <th>Horario de salida</th>

                                </table>
                                <table class="table">
                                    <td style="width: 30%">Lunes</td>
                                    <td style="width: 30%">2:00</td>
                                    <td style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Martes</td>
                                    <td style="width: 30%">2:00</td>
                                    <td style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Miercoles</td>
                                    <td style="width: 30%">2:00</td>
                                    <td style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Jueves</td>
                                    <td style="width: 30%">2:00</td>
                                    <td style="width: 30%">8:00</td>
                                </table>
                                <table class="table">
                                    <td style="width: 30%">Viernes</td>
                                    <td style="width: 30%">2:00</td>
                                    <td style="width: 30%">8:00</td>
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
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Holidays') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('policies.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New holiday') }}
            </a>
        </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

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

