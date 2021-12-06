<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-empresa-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Employer register') }}</span>
        </h2>

        <div class="flex">
        <div class="btn-top-holder my-3 flex-1">
            <a href="{{route('employer-register.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New employer register') }}
            </a>
        </div>
            <div class="flex-1 my-3 text-right">
                <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
                <label>
                    <select class="w-full rounded dark:bg-dark dark:text-white">
                        <option value="001">Perzona</option>
                        <option value="001">DSSD</option>
                    </select>
                </label>
            </div>

        </div>
                <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <table class="table">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th class="text-center">{{__('risk premium')}}</th>
                    <th class="text-center">{{__('subdelegational key')}}</th>
                    <th class="text-center">{{__('Business')}}</th>
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

                                <td style="width: 30%">{{__('Registro CDMX')}}</td>
                                <td style="width: 30%">{{__('3')}}</td>
                                <td style="width: 30%">{{__('123658')}}</td>
                                <td style="width: 30%">Perzona</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseCDMX"
                                            aria-expanded="false" aria-controls="collapseCDMX">
                                            <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('employer-register.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseCDMX" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Registro CDMX</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('risk premium')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">3</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('subdelegational key')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">123658</label></div>
                                </div>

                                <p class="my-2 font-bold">Enviar movimientos al IMSS mediante certificado IMSS</p>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certificate')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS23695</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certified user')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS23695</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Password')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">••••••••••</label></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--MTY--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">Registro MTY</td>
                                <td style="width: 30%">3</td>
                                <td style="width: 30%">326985</td>
                                <td style="width: 30%">Perzona</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseMTY"
                                            aria-expanded="false" aria-controls="collapseCDMX">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseMTY" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Registro MTY</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('risk premium')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">1</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('subdelegational key')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">326985</label></div>
                                </div>

                                <p class="my-2 font-bold">Enviar movimientos al IMSS mediante certificado IMSS</p>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certificate')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS2536</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certified user')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS2536</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Password')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">••••••••••</label></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--GDL--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 30%">Registro GDL</td>
                                <td style="width: 30%">1</td>
                                <td style="width: 30%">523695</td>
                                <td style="width: 30%">Perzona</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseGDL"
                                            aria-expanded="false" aria-controls="collapseCDMX">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseGDL" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Registro GDL</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('risk premium')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">1</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('subdelegational key')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">523695</label></div>
                                </div>

                                <p class="my-2 font-bold">Enviar movimientos al IMSS mediante certificado IMSS</p>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certificate')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS52369</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certified user')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS52369</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Password')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">••••••••••</label></div>
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

