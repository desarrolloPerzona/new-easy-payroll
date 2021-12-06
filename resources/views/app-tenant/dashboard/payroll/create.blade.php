<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create payroll group') }}</span>
        </h2>

<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Payroll group name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold my-2" for="name">{{__('Payroll payment scheme')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">{{__('Standard')}}</option>
                    <option value="002">{{__('Extraordinary')}}</option>

                </select>
            </label>

            <label class="font-bold my-2" for="name">{{__('Business name')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">DICC760403IN7</option>

                </select>
            </label>

            <label class="font-bold my-2" for="name">{{__('Bank account')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">Cuenta BBVA 1256</option>
                    <option value="002">Cuenta BBVA 6987</option>
                    <option value="002">Cuenta Santander 4585</option>

                </select>
            </label>

            <label class="font-bold my-2" for="name">{{__('Payroll period')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">Semanal</option>
                    <option value="002">Catorcenal</option>
                    <option value="002">Quincenal</option>
                    <option value="002">Mensual</option>

                </select>
            </label>

            <label class="font-bold my-2">{{__('Calculate payroll period based on')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">30 días</option>
                    <option value="002">30.4 días</option>

                </select>
            </label>

            <div class="flex my-4">
                <div><input type="checkbox" id="ISR" name="ISR" checked></div>
                <div class="ml-2"><label>{{__('Calculate income tax for Christmas bonus applying regulation')}}</label></div>
            </div>

            <label class="font-bold my-2" for="name">{{__('Calculate employment subsidy in the following way:')}}</label>
            <div>
                <input type="radio" id="Periodica" name="Periodica" value="Periodica" checked>
                <label for="dewey">{{__('Periodic')}}</label>
            </div>

            <div>
                <input type="radio" id="Diaria" name="Diaria" value="Diaria">
                <label for="louie">{{__('Daily')}}</label>
            </div>

            <label class="font-bold my-2" for="name">{{__('Nómina automática')}}</label>
            <div>
                <input type="radio" id="Si" name="Si" value="Si" checked>
                <label for="dewey">{{__('Yes')}}</label>
            </div>

            <div>
                <input type="radio" id="No" name="No" value="No">
                <label for="louie">{{__('No')}}</label>
            </div>


            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>


</x-app-tenant>
