<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Concepts') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('concept.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New concept') }}
            </a>
        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <table class="table">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th colspan="3"></th>
                    <th></th>
                    <th>{{__('SAT code')}}</th>
                    <th></th>
                    <th></th>
                    <th>{{__('Concept type')}}</th>
                </tr>

            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--C1--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">Sueldo</td>
                                <td style="width: 45%">Sueldos, salarios, rayas y jornales</td>
                                <td style="width: 35%">Ordinario</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseC1" aria-expanded="false" aria-controls="collapseC1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('policies.edit',1)}}"> <i
                                            class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseC1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('SAT Code')}}:
                                    </div>
                                    <div class="flex-1">
                                        Sueldos, salarios, rayas y jornales
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Concept type')}}:
                                    </div>
                                    <div class="flex-1">
                                        Ordinario
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISN')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Social Security')}}:
                                    </div>
                                    <div class="flex-1">
                                       No
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISR')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('IMSS integrate')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Payment type')}}:
                                    </div>
                                    <div class="flex-1">
                                        --
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--C2--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">Sueldo por vacaciones</td>
                                <td style="width: 45%">Sueldo por vacaciones</td>
                                <td style="width: 35%">Extraordinario</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseC2" aria-expanded="false" aria-controls="collapseC1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('policies.edit',1)}}"> <i
                                            class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseC2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('SAT Code')}}:
                                    </div>
                                    <div class="flex-1">
                                        Sueldo por vacaciones
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Concept type')}}:
                                    </div>
                                    <div class="flex-1">
                                        Extraordinario
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISN')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Social Security')}}:
                                    </div>
                                    <div class="flex-1">
                                        No
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISR')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('IMSS integrate')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Payment type')}}:
                                    </div>
                                    <div class="flex-1">
                                        --
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--C3--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">Vacaciones no disfrutadas</td>
                                <td style="width: 45%">Vacaciones no disfrutadas</td>
                                <td style="width: 35%">Extraordinario</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseC3" aria-expanded="false" aria-controls="collapseC1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('policies.edit',1)}}"> <i
                                            class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseC3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('SAT Code')}}:
                                    </div>
                                    <div class="flex-1">
                                        Vacaciones no disfrutadas
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Concept type')}}:
                                    </div>
                                    <div class="flex-1">
                                        Extraordinario
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISN')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Social Security')}}:
                                    </div>
                                    <div class="flex-1">
                                        No
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISR')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('IMSS integrate')}}:
                                    </div>
                                    <div class="flex-1">
                                        13%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Payment type')}}:
                                    </div>
                                    <div class="flex-1">
                                        --
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--C4--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">Vales de despensa</td>
                                <td style="width: 45%">Vales de despensa</td>
                                <td style="width: 35%">Ordinario</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseC4" aria-expanded="false" aria-controls="collapseC1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('policies.edit',1)}}"> <i
                                            class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseC4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('SAT Code')}}:
                                    </div>
                                    <div class="flex-1">
                                        Vales de despensa
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Concept type')}}:
                                    </div>
                                    <div class="flex-1">
                                        Ordinario
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISN')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Social Security')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISR')}}:
                                    </div>
                                    <div class="flex-1">
                                        Condicionado
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('IMSS integrate')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Payment type')}}:
                                    </div>
                                    <div class="flex-1">
                                        Especie
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--C5--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">Horas extras</td>
                                <td style="width: 45%">Horas extras</td>
                                <td style="width: 35%">Estraordinario</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseC5" aria-expanded="false" aria-controls="collapseC1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('policies.edit',1)}}"> <i
                                            class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></a></i>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseC5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200">

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('SAT Code')}}:
                                    </div>
                                    <div class="flex-1">
                                        Horas extras
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Concept type')}}:
                                    </div>
                                    <div class="flex-1">
                                        Extraordinario
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISN')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Social Security')}}:
                                    </div>
                                    <div class="flex-1">
                                        No
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Gravel ISR')}}:
                                    </div>
                                    <div class="flex-1">
                                        Condicionado
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('IMSS integrate')}}:
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Payment type')}}:
                                    </div>
                                    <div class="flex-1">
                                        --
                                    </div>
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
