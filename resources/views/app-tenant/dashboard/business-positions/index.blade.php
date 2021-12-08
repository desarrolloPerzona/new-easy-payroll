<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fas fa-sitemap mr-2"></i>
            <span style="display: inline-flex;">{{ __('Business positions') }}</span>
        </h2>


        {{-- <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

             <table class="table">
                 <tr>
                     <th style="width: 35%">{{__('Job position')}}</th>
                     <th style="width: 20%">{{__('Seat')}}</th>
                     <th style="width: 16%">{{__('Area')}}</th>
                     <th style="width: 16%">{{__('Branch')}}</th>
                     <th style="width: 3%">
                     <th style="width: 3%">
                     <th style="width: 3%">

                 </tr>

             </table>
             --}}{{--ACCORDION--}}{{--
             <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                 <div class="accordion" id="newItem">

                     --}}{{--JOB 1--------------}}{{--
                     <table class="table">
                         <td style="width: 35%">Director MKT</td>
                         <td style="width: 20%">Juan Perez</td>
                         <td style="width: 16%">Marketing</td>
                         <td style="width: 16%">CDMX</td>
                         <td style="width: 3%">
                             <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1"
                                     aria-expanded="false" aria-controls="collapseS1">
                                 <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                             </button>
                         </td>
                         <td style="width: 3%"><a href="{{route('business-positions.edit',1)}}"> <i
                                     class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                     </table>
                     <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                          data-bs-parent="#newItem">
                         <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                             <div class="border-b-2 border-gray-400">
                                 <label for="prestations" class="font-bold my-2">{{__('Benefits')}}</label>
                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Seat')}}</label></div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Juan Perez</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Area')}}</label></div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Marketing</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Job position')}}</label></div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Director de Marketing</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Branch')}}</label></div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">CDMX</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Pilicie')}}</label> </div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Politica 1</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Job position')}}</label> </div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Contrato a término indefinido</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Employee type')}}</label> </div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">One</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Working day')}}</label> </div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Jornada 1</label></div>
                             </div>

                             <div class="flex">
                                 <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Payroll')}}</label> </div>
                                 <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Grupo 2 (Quincenal)</label></div>
                             </div>
                             </div>
                             <div class="border-b-2 border-gray-400">
                                 <label for="prestations" class="font-bold my-2">{{__('Benefits')}}</label>
                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Seat')}}</label></div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Juan Perez</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Area')}}</label></div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Marketing</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Job position')}}</label></div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Director de Marketing</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Branch')}}</label></div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">CDMX</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Pilicie')}}</label> </div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Politica 1</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Job position')}}</label> </div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Contrato a término indefinido</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Employee type')}}</label> </div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">One</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Working day')}}</label> </div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Jornada 1</label></div>
                                 </div>

                                 <div class="flex">
                                     <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Payroll')}}</label> </div>
                                     <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Grupo 2 (Quincenal)</label></div>
                                 </div>
                             </div>

                         </div>
                     </div>

                     --}}{{--JOB 2--------------}}{{--
                     <table class="table">

                         <td style="width: 35%">Diseñador Grafico</td>
                         <td style="width: 20%">Alberto Ortiz</td>
                         <td style="width: 16%">Marketing</td>
                         <td style="width: 16%">CDMX</td>
                         <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                         <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>


                     </table>

                     --}}{{--JOB 3--------------}}{{--
                     <table class="table">
                         <td style="width: 35%">Director Contabilidad</td>
                         <td style="width: 20%">Cesar Muñoz</td>
                         <td style="width: 16%">Contabilidad</td>
                         <td style="width: 16%">CDMX</td>
                         <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                         <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>


                     </table>

                     --}}{{--JOB 4--------------}}{{--
                     <table class="table">

                         <td style="width: 35%">Comunicacion</td>
                         <td style="width: 20%">Jose Cardenas</td>
                         <td style="width: 16%">Marketing</td>
                         <td style="width: 16%">CDMX</td>
                         <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                         <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>


                     </table>

                     --}}{{--JOB 5--------------}}{{--
                     <table class="table">
                         <td style="width: 35%">CEO</td>
                         <td style="width: 20%">Alexo Boy</td>
                         <td style="width: 16%">Direccion</td>
                         <td style="width: 16%">CDMX</td>
                         <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                         <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>


                     </table>

                 </div>
             </div>
             --}}{{--ACCORDION--}}{{--


         </div>--}}

        {{--Nueva Area ----------------}}
        <div class="flex-1 my-3 text-right">
            <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">Perzona</option>
                    <option value="001">DSSD</option>
                </select>
            </label>
        </div>

        <div class="accordion btn-top-holder my-3 max-w-6xl m-auto" id="newPosition">

            <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded dark:bg-dark dark:text-white">
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
                        <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                            <div>
                                <div><label class="font-bold" for="name">{{__('Area name')}}</label></div>
                                <div><input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                            type="text" id="name" name="Name"></div>
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

        {{--Lista de Posiciones-------}}

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            {{--Direccion-----------}}
            <div class="border-bottom-1 border-gray-400 py-3">
                <h2 class="mb-2">Dirección <a href="{{route('area-positions.edit',1)}}"
                                              class="text-gray-400 hover:text-gray-700"><i class="fas fa-edit"></i></a>
                </h2>

                <table class="table">
                    <tr>
                        <th style="width: 26%">{{__('Job position')}}</th>
                        <th style="width: 18%">{{__('Answers')}}</th>
                        <th style="width: 18%">{{__('Seat')}}</th>
                        <th style="width: 18%">{{__('Area')}}</th>
                        <th style="width: 10%">{{__('Branch')}}</th>
                        <th style="width: 5%">
                        <th style="width: 5%">

                    </tr>

                </table>

                {{--DIR 1--------------}}
                <table class="table">
                    <td style="width: 26%">Director</td>
                    <td style="width: 18%">--</td>
                    <td style="width: 18%">Juan Perez</td>
                    <td style="width: 18%">Dirección</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1"
                                aria-expanded="false" aria-controls="collapseS1">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                        </button>
                    </td>
                    <td style="width: 5%"><a href="{{route('business-positions.edit',1)}}"> <i
                                class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                </table>
                <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#newItem">
                    <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                        <div class="border-b-2 border-gray-400">
                            <label for="prestations" class="font-bold my-2">{{__('Benefits')}}</label>
                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Seat')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Juan Perez</label>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Area')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Dirección</label>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Job position')}}</label>
                                </div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Director</label></div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Branch')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">CDMX</label></div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Pilicie')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Politica 1</label>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Job position')}}</label>
                                </div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Contrato a término
                                        indefinido</label></div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Employee type')}}</label>
                                </div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">One</label></div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Working day')}}</label>
                                </div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Jornada 1</label>
                                </div>
                            </div>
                        </div>

                        <div class="border-b-2 border-gray-400">
                            <label for="prestations" class="font-bold my-2">{{__('Perceptions')}}</label>
                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Payment method')}}</label>
                                </div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">STP</label></div>
                            </div>
                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label class="my-2">{{__('Payroll')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">Grupo 2
                                        (Quincenal)</label></div>
                            </div>


                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label
                                        class="my-2">{{__('Gross monthly salary')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">$ 65,000</label></div>
                            </div>

                            <div class="flex">
                                <div class="flex-1 text-left w-1/4"><label
                                        class="my-2">{{__('Base salary contribution')}}</label></div>
                                <div class="flrx-2 text-left w-3/4"><label class="my-2 font-bold">$2,368.23</label>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                {{--DIR 2--------------}}
                <table class="table">

                    <td style="width: 26%">Sub Director</td>
                    <td style="width: 18%">Director</td>
                    <td style="width: 18%">Alberto Ortiz</td>
                    <td style="width: 18%">Dirección</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--DIR 3--------------}}
                <table class="table">

                    <td style="width: 26%">Secretaria Dirección</td>
                    <td style="width: 18%">Director</td>
                    <td style="width: 18%">Juana Banana</td>
                    <td style="width: 18%">Dirección</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--DIR 4--------------}}
                <table class="table">

                    <td style="width: 26%">Supervisor general</td>
                    <td style="width: 18%">Sub Director</td>
                    <td style="width: 18%">Teresa Milagresa</td>
                    <td style="width: 18%">Dirección</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--DIR 5--------------}}
                <table class="table">

                    <td style="width: 26%">Jefe de oficina</td>
                    <td style="width: 18%">Sub Director</td>
                    <td style="width: 18%">Alfredo Adame</td>
                    <td style="width: 18%">Dirección</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

            </div>
            {{--Marketing-----------}}
            <div class="border-bottom-1 border-gray-400 py-3">
                <h2 class="mb-2">Marketing<i class="fas fa-edit ml-2 text-gray-400"></i></h2>

                <table class="table">
                    <tr>
                        <th style="width: 26%">{{__('Job position')}}</th>
                        <th style="width: 18%">{{__('Answers')}}</th>
                        <th style="width: 18%">{{__('Seat')}}</th>
                        <th style="width: 18%">{{__('Area')}}</th>
                        <th style="width: 10%">{{__('Branch')}}</th>
                        <th style="width: 5%">
                        <th style="width: 5%">

                    </tr>

                </table>

                {{--MKT 1--------------}}
                <table class="table font-bold text-black-50 ">

                    <td style="width: 26%">Director de MKT</td>
                    <td style="width: 18%">Marketing</td>
                    <td style="width: 18%">--</td>
                    <td style="width: 18%">Dirección</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--MKT 2--------------}}
                <table class="table">

                    <td style="width: 26%">Supervisor MKT</td>
                    <td style="width: 18%">Director de MKT</td>
                    <td style="width: 18%">Jorge Guerra</td>
                    <td style="width: 18%">Marketing</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--MKT 3--------------}}
                <table class="table">

                    <td style="width: 26%">Comunicacion y desarrollo 1</td>
                    <td style="width: 18%">Director de MKT</td>
                    <td style="width: 18%">Arturo Vidal</td>
                    <td style="width: 18%">Marketing</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--MKT 4--------------}}
                <table class="table">

                    <td style="width: 26%">Comunicacion y desarrollo 2</td>
                    <td style="width: 18%">Director de MKT</td>
                    <td style="width: 18%">Ousame Dembele</td>
                    <td style="width: 18%">Marketing</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--MKT 5--------------}}
                <table class="table">

                    <td style="width: 26%">Diseñador gráfico</td>
                    <td style="width: 18%">Director de MKT</td>
                    <td style="width: 18%">Alex Bergantiños</td>
                    <td style="width: 18%">Marketing</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

            </div>
            {{--Contabilidad-----------}}
            <div class="border-bottom-1 border-gray-400 py-3">
                <h2 class="mb-2">Contabilidad<i class="fas fa-edit ml-2 text-gray-400"></i></h2>

                <table class="table">
                    <tr>
                        <th style="width: 26%">{{__('Job position')}}</th>
                        <th style="width: 18%">{{__('Answers')}}</th>
                        <th style="width: 18%">{{__('Seat')}}</th>
                        <th style="width: 18%">{{__('Area')}}</th>
                        <th style="width: 10%">{{__('Branch')}}</th>
                        <th style="width: 5%">
                        <th style="width: 5%">

                    </tr>

                </table>

                {{--CONT 1--------------}}
                <table class="table">

                    <td style="width: 26%">Director de Contabilidad</td>
                    <td style="width: 18%">Director</td>
                    <td style="width: 18%">Arturo Cubas</td>
                    <td style="width: 18%">Contabilidad</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--CONT 2--------------}}
                <table class="table">

                    <td style="width: 26%">Supervisor Contabilidad</td>
                    <td style="width: 18%">Director de Contabilidad</td>
                    <td style="width: 18%">Alejandro Encinas</td>
                    <td style="width: 18%">Contabilidad</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--CONT 3--------------}}
                <table class="table font-bold text-black-50 ">

                    <td style="width: 26%">Contador 1</td>
                    <td style="width: 18%">Director de MKT</td>
                    <td style="width: 18%">--</td>
                    <td style="width: 18%">Contabilidad</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

                {{--CONT 4--------------}}
                <table class="table">

                    <td style="width: 26%">Contador 2</td>
                    <td style="width: 18%">Director de MKT</td>
                    <td style="width: 18%">Hector Herrera</td>
                    <td style="width: 18%">Contabilidad</td>
                    <td style="width: 10%">CDMX</td>
                    <td style="width: 5%"><i class="fas fa-eye text-gray-400"></i></td>
                    <td style="width: 5%"><i class="fas fa-edit text-gray-400"></i></td>

                </table>

            </div>
        </div>


    </div>
</x-app-tenant>



