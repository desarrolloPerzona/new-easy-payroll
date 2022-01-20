<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit policy') }}</span>
        </h2>

<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Policy name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="Política 1">

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
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="5">
                </div>

            </div>

            <div class="my-3">
                <input type="checkbox" id="huey" name="drone" value="huey"
                       checked>
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
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="13">
                </div>

            </div>

            <div class="my-3">
                <input type="checkbox" id="huey" name="drone" value="huey"
                       checked>
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
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="13">
                </div>

            </div>

            <div class="my-3 pb-4">
                <input type="checkbox" id="huey" name="drone" value="huey"
                       checked>
                <label class="text-gray-800 dark:text-white">{{__('Savings fund cap')}}</label>
            </div>

            <label class="font-bold my-2" for="name">{{__('New concept')}}</label>

    <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
        <div class="accordion" id="newItem">

            {{--J1--------------}}
            <div class="accordion-item">
                <div class="accordion-header mr-4" id="headingOne">
                    <table class="table">

                            <button class="mt-2 ml-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1"
                                    aria-expanded="false" aria-controls="collapseS1">
                                <div class="btn-top-holder">
                                    <div class="btn-top-holder">
                                        <a href="#}" class="btn btn-dark">
                                            {{ __('Add concept') }}
                                        </a>
                                    </div>
                                </div>
                            </button>

                    </table>
                </div>

                <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#newItem">
                    <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                      <div class="row">
                          <div class="col-md-5 pr-2 w-full">
                              <label class="w-full">
                                  <select class="rounded w-full dark:bg-dark dark:text-white">
                                      <option value="001">{{__('Perception')}}</option>
                                      <option value="002">{{__('Deduction')}}</option>

                                  </select>
                              </label>
                          </div>
                              <div class="col-md-5 pr-2 w-full">
                                  <select class="rounded w-full dark:bg-dark dark:text-white">
                                      <option value="001">004 Rembolso gastos médicos</option>
                                      <option value="002">006 Caja de ahorro</option>
                                      <option value="002">009 Contribuciones a cargo de trabajadores</option>
                                      <option value="002">011 Prima de seguro de vida</option>
                                      <option value="002">012 Seguro gastos médicos</option>
                                      <option value="002">013 Cueotas sindicales patrón</option>
                                      <option value="002">014 Subsidio incapacidades</option>
                                      <option value="002">015 Becas a trabajadores y/o hijos de trabajadores</option>
                                      <option value="002">023 Pagos por separación</option>
                                      <option value="002">025 Indemnizaciones</option>
                                      <option value="002">026 Rembolso de funeral</option>
                                      <option value="002">027 Cuotas de Seguridad Social del patrón</option>
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
                                      <option value="002">047 Alimentación </option>
                                      <option value="002">048 Habitación </option>

                                  </select>
                              </label>
                          </div>
                          <div class="col-md-2 ">
                              <i class="fas fa-plus-circle mt-3 cursor-pointer"></i>
                          </div>
                      </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-top-holder my-3 pb-4">
        <a href="{{route('concept.index')}}" class="btn btn-dark">
            {{ __('Create new concept') }}
        </a>
    </div>

            {{--Descuento faltas--}}
            <div class="my-3">
                <input type="checkbox" id="huey" name="drone" value="huey"
                       checked>
                <label class="text-gray-800 dark:text-white">{{__('Discount for absences')}}</label>
            </div>
            {{--Descuento Incapacidades--}}
            <div class="my-3">
                <input type="checkbox" id="huey" name="drone" value="huey"
                       checked>
                <label class="text-gray-800 dark:text-white">{{__('Disability discount')}}</label>
            </div>
            {{--Descuento 7o Dia--}}
            <div class="my-3">
                <input type="checkbox" id="huey" name="drone" value="huey"
                       checked>
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
