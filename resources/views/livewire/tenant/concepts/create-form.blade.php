<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

    <div class="form-group d-flex gap-3">
        <div class="form-group w-50">
            <label for="name" class="font-bold form-label">{{__('Perception name')}}</label>
            <input id="name" name="name" type="text" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="name" class="font-bold form-label">{{__('SAT Concept')}}</label>
            <select id="name" name="name" type="text" class="form-control">
                <option value="">{{__('Select')}}</option>
            </select>
        </div>
    </div>

    <div class="form-group d-flex gap-3">

        <div class="form-group w-1/3">
            <label for="name" class="font-bold form-label">{{__('Payment type')}}</label>
            <div class="form-group margin-b-0">
                <input type="radio" name="working" id="working" value="1" x-on:click="working('y')" checked>
                <label for="working">{{__('Yes')}}</label>
            </div>
            <div class="form-group margin-b-0">
                <input type="radio" name="working" id="working2" value="0" x-on:click="working('n')">
                <label for="working2">{{__('No')}}</label>
            </div>
        </div>

        <div class="form-group w-1/3">
            <label for="name" class="font-bold form-label">{{__('Payment type')}}</label>
            <div class="form-group margin-b-0">
                <input type="radio" name="working" id="working" value="1" x-on:click="working('y')" checked>
                <label for="working">{{__('Yes')}}</label>
            </div>
            <div class="form-group margin-b-0">
                <input type="radio" name="working" id="working2" value="0" x-on:click="working('n')">
                <label for="working2">{{__('No')}}</label>
            </div>
        </div>

        <div class="form-group w-1/3">
            <label for="name" class="font-bold form-label">{{__('Payment type')}}</label>
            <div class="form-group margin-b-0">
                <input type="radio" name="working" id="working" value="1" x-on:click="working('y')" checked>
                <label for="working">{{__('Yes')}}</label>
            </div>
            <div class="form-group margin-b-0">
                <input type="radio" name="working" id="working2" value="0" x-on:click="working('n')">
                <label for="working2">{{__('No')}}</label>
            </div>
        </div>

    </div>


    <label class="font-bold" for="name">{{__('Perception name')}}</label>
    <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
           type="text" id="name" name="Name">


    <label class="font-bold my-2" for="name">{{__('SAT Concept')}}</label>
    <label class="w-full">
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
            <option value="002">047 Alimentación</option>
            <option value="002">048 Habitación</option>

        </select>
    </label>

    <div class="flex">
        {{--Periodicidad--}}
        <div class="flex-1 w-1/3">
            <label class="font-bold mt-4 mb-2"
                   for="name">{{__('Periodicity')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Periodica</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Extraordinaria</label>
            </div>
        </div>
        {{--Tipo percepción--}}
        <div class="flex-1 w-1/3">
            <label class="font-bold mt-4 mb-2"
                   for="name">{{__('Type of perception')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Ordinario</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Extraordinario</label>
            </div>
        </div>
        {{--Tipo de pago--}}
        <div class="flex-1 w-1/3">
            <label class="font-bold mt-4 mb-2"
                   for="name">{{__('Payment type')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Ordinario</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Especie</label>
            </div>
        </div>

    </div>

    <div class="flex">

        {{--Grava ISR--}}
        <div class="flex-1 w-1/3">
            <label class="font-bold mt-4 mb-2"
                   for="name">{{__('Gravel ISR')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Si</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>No</label>
            </div>
        </div>
        {{--Grava ISN--}}
        <div class="flex-1 w-1/3">
            <label class="font-bold mt-4 mb-2"
                   for="name">{{__('Gravel ISN')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Si</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>No</label>
            </div>
        </div>
        {{--Integra IMSS--}}
        <div class="flex-1 w-1/3">
            <label class="font-bold mt-4 mb-2"
                   for="name">{{__('IMSS integrate')}}</label>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>Si</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>No</label>
            </div>
        </div>
    </div>
    <div class="flex-1 text-left py-2"><label class="font-bold"
                                              for="name">{{__('Accounting account')}}</label>
    </div>
    <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
           type="text" id="name" name="Name">
    </label>


    <div class="btn-top-holder my-3 flow-root">
        <a href="javascript: history.go(-1)" class="btn btn-dark float-right cursor-pointer">
            {{ __('Save') }}
        </a>
    </div>

</div>
