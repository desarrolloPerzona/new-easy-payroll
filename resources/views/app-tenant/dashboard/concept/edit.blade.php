<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit concept') }}</span>
        </h2>

<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Concept name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="Sueldo">


            <label class="font-bold my-2" for="name">{{__('SAT Concept')}}</label>

            <label class="w-full">
                <select class="rounded w-full dark:bg-dark dark:text-white">
                    <option value="001">001 Sueldos, salarios, rayas y jornales</option>
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

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Accounting account')}}</label></div>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">Cuenta BBVA 1256</option>
                    <option value="002">Cuenta BBVA 6987</option>
                    <option value="002">Cuenta Santander 4585</option>

                </select>
            </label>



            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>
</x-app-tenant>
