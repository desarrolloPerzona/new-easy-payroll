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
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1" aria-expanded="false" aria-controls="collapseS1">
                                <i class="fas fa-repeat-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                            </button>
                        </td>

                        <td style="width: 3%">
                            <a href="#"></a>
                                <i class="fas fa-user-times text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                            </a>
                        </td>

                    </table>
                    <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#newItem">
                        <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">
                            <label class="font-bold my-2" for="name">{{__('Asign')}}</label>

                            <label class="w-full">
                                <select class="rounded w-full dark:bg-dark dark:text-white">
                                    <option value="001">Juan Perez</option>
                                    <option value="001">Alberto Ortiz</option>
                                    <option value="001">Cesar Muñoz</option>
                                    <option value="001">Jose Cardenas</option>
                                    <option value="001">Alexo Boy</option>

                                </select>
                            </label>
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

        {{--Prestaciones--}}
        <div class="card bg-white shadow-sm rounded p-4 mb-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <h2 class="mb-4 font-bold">{{__('Benefits')}}</h2>
            <label class="font-bold" for="name">{{__('Position name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="Director MKT">

            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Area')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Dirección</option>
                            <option value="001">Marketing</option>
                            <option value="002">Contabilidad</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
                    <label class="font-bold my-2" for="name">{{__('Job Position')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Director de MKT</option>
                            <option value="001">Supervisor MKT</option>
                            <option value="002">Comunicacion y desarrollo 1</option>
                            <option value="002">Comunicacion y desarrollo 2</option>
                            <option value="002">Diseñador gráfico</option>

                        </select>
                    </label>
                </div>
            </div>

            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Branch')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">CDMX</option>
                            <option value="001">MTY</option>
                            <option value="002">GDL</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
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

            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Working day')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Jornada 1</option>
                            <option value="001">Jornada 2</option>
                            <option value="001">Jornada 3</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
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
            </div>

            <div class="border-b-2 border-gray-400 pb-4">
            <h2 class="my-2 font-bold">{{__('Payroll')}}</h2>
            <div class="flex my-2">
                <div class="flex-1 mr-3">
                    <label class="my-2 mr-2" for="name">Sueldo bruto mensual:</label>
                    <h2 class="font-bold">$35,000</h2>
                </div>
                <div class="flex-1 mr-3">
                    <label class="my-2 mr-2" for="name">Salario base cotización:</label>
                    <h2 class="font-bold">$32,236</h2>
                </div>
            </div>
            </div>

            <div class="border-b-2 border-gray-400 pb-4">
                <h2 class="my-2 font-bold">{{__('Periodic perceptions')}}</h2>
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

            </div>
            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Branch')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">CDMX</option>
                            <option value="001">MTY</option>
                            <option value="002">GDL</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
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

            <div class="flex">
                <div class="flex-1 mr-3">
                    <label class="font-bold my-2" for="name">{{__('Working day')}}</label>

                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Jornada 1</option>
                            <option value="001">Jornada 2</option>
                            <option value="001">Jornada 3</option>

                        </select>
                    </label>
                </div>
                <div class="flex-1">
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

            <div class="btn-top-holder my-2 text-right">
                <a href="#" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>
        </div>

        {{--Periodicidad--}}
        <label class="font-bold mt-4 mb-2" for="name">{{__('Periodicity')}}</label>

        <div class="my-2">
            <input type="radio" id="id" name="name" value="value" checked>
            <label>Periodica</label>
        </div>

        <div class="my-2">
            <input type="radio" id="id" name="name" value="value">
            <label>Extraordinaria</label>
        </div>

        {{--Tipo percepción--}}
        <label class="font-bold mt-4 mb-2" for="name">{{__('Type of perception')}}</label>

        <div class="my-2">
            <input type="radio" id="id1" name="name1" value="value1" checked>
            <label>Ordinario</label>
        </div>

        <div class="my-2">
            <input type="radio" id="id2" name="name2" value="value2">
            <label>Extraordinario</label>
        </div>

        {{--Tipo de pago--}}
        <label class="font-bold mt-4 mb-2" for="name">{{__('Payment type')}}</label>

        <div class="my-2">
            <input type="radio" id="id3" name="name3" value="value3" checked>
            <label>Ordinario</label>
        </div>

        <div class="my-2">
            <input type="radio" id="id45" name="name45" value="value45">
            <label>Especie</label>
        </div>

        {{--Grava ISR--}}
        <label class="font-bold mt-4 mb-2" for="name">{{__('Gravel ISR')}}</label>

        <div class="my-2">
            <input type="radio" id="id5" name="name5" value="value5" checked>
            <label>Si</label>
        </div>

        <div class="my-2">
            <input type="radio" id="id6" name="name6" value="value6">
            <label>No</label>
        </div>

        {{--Grava ISN--}}
        <label class="font-bold mt-4 mb-2" for="name">{{__('Gravel ISN')}}</label>

        <div class="my-2">
            <input type="radio" id="id7" name="name7" value="value7" checked>
            <label>Si</label>
        </div>

        <div class="my-2">
            <input type="radio" id="id8" name="name8" value="value8">
            <label>No</label>
        </div>

        {{--Integra IMSS--}}
        <label class="font-bold mt-4 mb-2" for="name">{{__('IMSS integrate')}}</label>

        <div class="my-2">
            <input type="radio" id="id9" name="name9" value="value9" checked>
            <label>Si</label>
        </div>

        <div class="my-2">
            <input type="radio" id="id10" name="name10" value="value10">
            <label>No</label>
        </div>

        <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Accounting account')}}</label>
        </div>
        <label>
            <select class="w-full rounded dark:bg-dark dark:text-white">
                <option value="001">Cuenta BBVA 1256</option>
                <option value="002">Cuenta BBVA 6987</option>
                <option value="002">Cuenta Santander 4585</option>

            </select>
        </label>


        <div class="btn-top-holder my-2">
            <a href="javascript: history.go(-1)" class="btn btn-dark">
                {{ __('Save') }}
            </a>
        </div>

    </div>

    </div>


</x-app-tenant>
