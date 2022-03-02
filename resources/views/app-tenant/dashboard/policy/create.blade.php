<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create policy') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Policy name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold my-2" for="name">{{__('Benefits table')}}</label>

            <label class="w-full my-2">
                <select class="rounded w-full dark:bg-dark dark:text-white">
                    <option value="001">Estandar</option>
                    <option value="002">Ejecutivos</option>
                    <option value="002">Directores</option>

                </select>
            </label>

            {{--Vales despensa--}}
            <label class="font-bold my-2" for="name">{{__('Grocery coupon')}}</label>
            <div class="flex">

                <div class="felx-1 mt-2 mr-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">{{__('Percentage')}}</option>
                            <option value="002">{{__('Nominal')}}</option>

                        </select>
                    </label>
                </div>
                <div class="flex-2 w-full">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name">
                </div>

            </div>

            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800 dark:text-white">{{__('Top of pantry vouchers')}}</label>
            </div>

            {{--Vales Restaurante--}}
            <label class="font-bold my-2" for="name">{{__('Restaurant voucher')}}</label>
            <div class="flex">

                <div class="felx-1 mt-2 mr-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">{{__('Percentage')}}</option>
                            <option value="002">{{__('Nominal')}}</option>

                        </select>
                    </label>
                </div>
                <div class="flex-2 w-full">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name">
                </div>

            </div>

            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800 dark:text-white">{{__('Restaurant voucher cap')}}</label>
            </div>

            {{--Fondo de ahorro--}}
            <label class="font-bold my-2" for="name">{{__('Saving Fund')}}</label>
            <div class="flex">

                <div class="felx-1 mt-2 mr-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">{{__('Percentage')}}</option>
                            <option value="002">{{__('Nominal')}}</option>

                        </select>
                    </label>
                </div>
                <div class="flex-2 w-full">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name">
                </div>

            </div>

            <div class="my-3 pb-2">
                <input type="checkbox" id="id" name="drone" value="id"
                >
                <label class="text-gray-800 dark:text-white">{{__('Savings fund cap')}}</label>
            </div>

            <div class="accordion my-3" id="newPerception">

                <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                    <div class="accordion-header mr-4" id="headingOne">

                        <div class="flex">
                            <div class="flex-1 pb-2">{{__('New perception')}}</div>
                            <div class="flex-2">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseP1" aria-expanded="false"
                                        aria-controls="collapseP1"><i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>


                        <div id="collapseP1" class="accordion-collapse collapse"
                             aria-labelledby="headingTwo" data-bs-parent="#newPerception">
                            <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">


                                    <div class="my-2 p-0 w-full">
                                        <label class="w-full">
                                            <select class="rounded w-full dark:bg-dark dark:text-white">
                                                <option value="001">Sueldo</option>
                                                <option value="001">Sueldo por vacaciones</option>
                                                <option value="001">Vacaciones no disfrutadas</option>
                                                <option value="002">Secretaria Dirección</option>
                                                <option value="002">Supervisor general</option>
                                                <option value="002">Horas extras</option>

                                            </select>
                                        </label>
                                    </div>


                                <div type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseP1" aria-expanded="false"
                                     aria-controls="collapseP1" class="text-right">
                                    <a href="#" class="btn btn-dark ">
                                        <i class="fas fa-plus-circle"></i>
                                        {{ __('Add') }}
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>

            <div class="accordion my-3" id="newDeduction">

                <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                    <div class="accordion-header mr-4" id="headingOne">

                        <div class="flex">
                            <div class="flex-1 pb-2">{{__('New deduction')}}</div>
                            <div class="flex-2">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseP2" aria-expanded="false"
                                        aria-controls="collapseP1"><i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>


                        <div id="collapseP2" class="accordion-collapse collapse"
                             aria-labelledby="headingTwo" data-bs-parent="#newDeduction">
                            <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">


                                <div class="my-2 p-0 w-full">
                                    <label class="w-full">
                                        <select class="rounded w-full dark:bg-dark dark:text-white">
                                            <option value="001">IMSS</option>
                                            <option value="001">ISR</option>
                                            <option value="001">Infonavit</option>
                                            <option value="002">Infonacot</option>


                                        </select>
                                    </label>
                                </div>


                                <div type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseP1" aria-expanded="false"
                                     aria-controls="collapseP1" class="text-right">
                                    <a href="#" class="btn btn-dark ">
                                        <i class="fas fa-plus-circle"></i>
                                        {{ __('Add') }}
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>

            {{--Descuento faltas--}}
            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800 dark:text-white">{{__('Discount for absences')}}</label>
            </div>
            {{--Descuento Incapacidades--}}
            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800 dark:text-white">{{__('Disability discount')}}</label>
            </div>
            {{--Descuento 7o Dia--}}
            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800 dark:text-white">{{__('Discount proportion 7th day')}}</label>
            </div>

            {{--DCalculo base--}}
            <label class="font-bold my-2" for="name">{{__('Calculation based on:')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>{{__('Seniority date')}}</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>{{__('Contract start date')}}</label>
            </div>


            <div class="btn-top-holder my-3 text-right">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>
</x-app-tenant>
