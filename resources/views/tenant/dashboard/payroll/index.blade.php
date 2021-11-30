<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Payroll') }}</span>
        </h2>

    <div class="btn-top-holder my-3">
        <a href="{{route('payroll.create',1)}}" class="btn btn-dark">
            <i class="fas fa-plus-circle"></i>
            {{ __('New Payroll') }}
        </a>
    </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

            <table class="table">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th class="text-center">{{__('Payroll period')}}</th>
                    <th class="text-center">{{__('Bank account')}}</th>
                    <th colspan="3"></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--Semanal 1--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">Grupo 1 (Semanal)</td>
                                <td style="width: 35%">Semanal</td>
                                <td style="width: 25%">BBVA 12584</td>
                                <td style="width: 1%" colspan=""></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1" aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('payroll.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Grupo 1 (Semanal)</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Scheme for payroll')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Estándar</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Business name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Cuenta 01 BBVA</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Bank account')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Semanal</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Payroll period')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">7 días</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate payroll period based on:')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Periodica</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate employment subsidy in the following way:')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">30 Días</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate income tax for Christmas bonus applying regulation')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Automatic payroll')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--Quincenal 2--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">Grupo 2 (Quincenal)</td>
                                <td style="width: 35%">Quincenal</td>
                                <td style="width: 25%">BBVA 12584</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS2" aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseS2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Grupo 2 (Quincenal)</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Scheme for payroll')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Estándar</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Business name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Cuenta 01 BBVA</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Bank account')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Quincenal</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Payroll period')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">30 días</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate payroll period based on:')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Periodica</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate employment subsidy in the following way:')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">15 Días</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate income tax for Christmas bonus applying regulation')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Automatic payroll')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--Mensual 2--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">Grupo 3 (Mensual)</td>
                                <td style="width: 35%">Mensual</td>
                                <td style="width: 25%">Santander 325698</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS3" aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseS3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Grupo 3 (Mensual)</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Scheme for payroll')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Estándar</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Business name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Cuenta Santander 325698</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Bank account')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Mensual</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Payroll period')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">30 días</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate payroll period based on:')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Periodica</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate employment subsidy in the following way:')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">30.4 Días</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Calculate income tax for Christmas bonus applying regulation')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Automatic payroll')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--ACCORDION--}}


        </div>


            </div>

</x-app-tenant>
