<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Business') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('employer-register.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New business') }}
            </a>
        </div>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <table class="table">
                <tr>
                <tr>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Created at')}}</th>
                    <th colspan="3"></th>
                </tr>

            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 45%">PerZona</td>
                                <td style="width: 50%">12/04/2020</td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1"
                                            aria-expanded="false" aria-controls="collapseB1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('business.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseB1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">
                                <h2 class="py-3">{{__('Business')}}</h2>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Perzona</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Logo')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><img src="assets/images/logo.jpg" alt=""></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Industry')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">RRHH</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Fiscal regime')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Persona Moral</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Business name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Perzona S.A de C.V.</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('RFC')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">PERZ02369856</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Direction')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Bosques de Tamarindos. 135 piso 2, Col. Aguabrava</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('State')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">CDMX</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('ZIP Code')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">03695</label></div>
                                </div>

                                <h2 class="py-3">{{__('Accounts')}}</h2>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('STP account')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">03695</label></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">Cuenta BBVA 1256</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">4523698531256</label></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">Cuenta BBVA 6987</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">4523698536987</label></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">Cuenta Santander 4585</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">856932654585</label></div>
                                </div>

                                <h2 class="py-3">{{__('Tax data')}}</h2>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Digital Seal Certificate')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">docuemnt.cer</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Digital private certificate key')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">document.key</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Password for digital seal certificate')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">••••••••••</label></div>
                                </div>
                                <div class="py-3"></div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Automatic moving average calculation')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Automatic STP payment')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">Si</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS worker integrated IMSS employer to salary')}}</label></div>
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


