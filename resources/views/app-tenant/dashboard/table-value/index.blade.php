<x-app-tenant>
    @push('inline_css')

        <style>
            #collapse-reference {
                display: none;
            }

            #collapse-retentions {
                display: none;
            }

            #collapse-subsidies {
                display: none;
            }

        </style>

    @endpush
    <div class="container">

        {{--        Values header--}}
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Table and value') }}</span>
        </h2>

        {{--        References values--}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">

            <div class="flex">
                <div class="flex-1"><h2 class="pb-3">Valores de referencia</h2></div>
                <div class="flex-2" onclick="arrowClick('reference')">
                    <div id="reference-button">
                        <i id="reference-icon" class="cursor-pointer fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </div>
            <div id="collapse-reference">
                <p class="pt-1">{{__($discount_infonavit->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $discount_infonavit->value }}
                    </div>
                </div>

                <p class="pt-1 uppercase">{{__($uma->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $uma->value }}
                    </div>
                </div>

                <p class="pt-1">{{__($minimum_salary_general->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $minimum_salary_general->value }}
                    </div>
                </div>

                <p class="pt-1">{{__($minimum_salary_border->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $minimum_salary_border->value }}
                    </div>
                </div>
            </div>
        </div>

        {{--        Periodic retentions--}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">
                    <h2 class="pb-3">Retenciones periódicas de ISR:</h2>
                </div>
                <div class="flex-2">
                    <div id="retentions-button" onclick="arrowClick('retentions')">
                        <i id="retentions-icon" class="fas fa-chevron-circle-down cursor-pointer"></i>
                    </div>
                </div>
            </div>

            <div id="collapse-retentions" x-data="data()">
                <ul class="nav nav-tabs w-full mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active tab-retention cursor-pointer bg-primary text-white" id="daily-button"
                           x-on:click="changeTab('daily')">
                            <i class="now-ui-icons objects_umbrella-13"></i> Diaria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="weekly-button"
                           x-on:click="changeTab('weekly')">
                            <i class="now-ui-icons shopping_cart-simple"></i> Semanal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="ten-days-button"
                           x-on:click="changeTab('ten-days')">
                            <i class="now-ui-icons shopping_shop"></i> Decenal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="biweekly-button"
                           x-on:click="changeTab('biweekly')">
                            <i class="now-ui-icons ui-2_settings-90"></i> Quincenal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="monthly-button"
                           x-on:click="changeTab('monthly')">
                            <i class="now-ui-icons ui-2_settings-90"></i> Mensual
                        </a>
                    </li>
                </ul>

                {{--                Daily table--}}
                <div id="daily-table" class="retentions-table">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Límite inferior')}}</th>
                            <th scope="col">{{__('Límite superior')}}</th>
                            <th scope="col">{{__('Cuota fija')}}</th>
                            <th scope="col">{{__('Excedentes %')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dailyRetentions as $dailyValues)
                            <tr>
                                <td>{{$dailyValues->lower_limit}}</td>
                                <td>{{$dailyValues->upper_limit}}</td>
                                <td>{{$dailyValues->fixed_feed}}</td>
                                <td>{{$dailyValues->percentage_excess_to_lower_limit}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                {{--                Weekly table--}}
                <div id="weekly-table" class="d-none retentions-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Límite inferior')}}</th>
                            <th scope="col">{{__('Límite superior')}}</th>
                            <th scope="col">{{__('Cuota fija')}}</th>
                            <th scope="col">{{__('Excedentes %')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($weeklyRetentions as $weeklyValues)
                            <tr>
                                <td>{{$weeklyValues->lower_limit}}</td>
                                <td>{{$weeklyValues->upper_limit}}</td>
                                <td>{{$weeklyValues->fixed_feed}}</td>
                                <td>{{$weeklyValues->percentage_excess_to_lower_limit}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--                Ten days table--}}
                <div id="ten-days-table" class="d-none retentions-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Límite inferior')}}</th>
                            <th scope="col">{{__('Límite superior')}}</th>
                            <th scope="col">{{__('Cuota fija')}}</th>
                            <th scope="col">{{__('Excedentes %')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tenDaysRetentions as $tenDaysValues)
                            <tr>
                                <td>{{$tenDaysValues->lower_limit}}</td>
                                <td>{{$tenDaysValues->upper_limit}}</td>
                                <td>{{$tenDaysValues->fixed_feed}}</td>
                                <td>{{$tenDaysValues->percentage_excess_to_lower_limit}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--                Biweekly table--}}
                <div id="biweekly-table" class="d-none retentions-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Límite inferior')}}</th>
                            <th scope="col">{{__('Límite superior')}}</th>
                            <th scope="col">{{__('Cuota fija')}}</th>
                            <th scope="col">{{__('Excedentes %')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($biweeklyRetentions as $biweeklyValues)
                            <tr>
                                <td>{{$biweeklyValues->lower_limit}}</td>
                                <td>{{$biweeklyValues->upper_limit}}</td>
                                <td>{{$biweeklyValues->fixed_feed}}</td>
                                <td>{{$biweeklyValues->percentage_excess_to_lower_limit}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--                Monthly table--}}
                <div id="monthly-table" class="d-none retentions-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Límite inferior')}}</th>
                            <th scope="col">{{__('Límite superior')}}</th>
                            <th scope="col">{{__('Cuota fija')}}</th>
                            <th scope="col">{{__('Excedentes %')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($monthlyRetentions as $monthlyValues)
                            <tr>
                                <td>{{$monthlyValues->lower_limit}}</td>
                                <td>{{$monthlyValues->upper_limit}}</td>
                                <td>{{$monthlyValues->fixed_feed}}</td>
                                <td>{{$monthlyValues->percentage_excess_to_lower_limit}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        {{--        Periodic Subsidies Table--}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1"><h2 class="pb-3">{{__('Tablas periódicas a subsidio')}}</h2></div>
                <div class="flex-2" onclick="arrowClick('subsidies')">
                    <div id="subsidies-button">
                        <i id="subsidies-icon" class="cursor-pointer fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </div>
            {{--            Subsidies Tab Tables--}}
            <div id="collapse-subsidies" x-data="subsidiesData()">

                {{--                Subsidies Tabs--}}
                <ul class="nav nav-tabs w-full mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active tab-subsidies cursor-pointer bg-primary text-white"
                           id="dailySubsidies-button"
                           x-on:click="changeTab('dailySubsidies')">
                            <i class="now-ui-icons objects_umbrella-13"></i> Diaria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-subsidies cursor-pointer" id="weeklySubsidies-button"
                           x-on:click="changeTab('weeklySubsidies')">
                            <i class="now-ui-icons shopping_cart-simple"></i> Semanal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-subsidies cursor-pointer" id="ten-daysSubsidies-button"
                           x-on:click="changeTab('ten-daysSubsidies')">
                            <i class="now-ui-icons shopping_shop"></i> Decenal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-subsidies cursor-pointer" id="biweeklySubsidies-button"
                           x-on:click="changeTab('biweeklySubsidies')">
                            <i class="now-ui-icons ui-2_settings-90"></i> Quincenal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-subsidies cursor-pointer" id="monthlySubsidies-button"
                           x-on:click="changeTab('monthlySubsidies')">
                            <i class="now-ui-icons ui-2_settings-90"></i> Mensual
                        </a>
                    </li>
                </ul>

                {{--                Daily table--}}
                <div id="dailySubsidies-table" class="subsidies-table">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Para ingresos de $')}}</th>
                            <th scope="col">{{__('Hasta ingresos de $')}}</th>
                            <th scope="col">{{__('Cantidad de subsidio para el empleo diario en $')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dailySubsidies as $dailyValues)
                            <tr>
                                <td>{{$dailyValues->income_from}}</td>
                                @if($dailyValues->income_up_to == 999999.00)
                                    <td>{{__('En adelante')}}</td>
                                @else
                                    <td>{{$dailyValues->income_up_to}}</td>
                                @endif
                                <td>{{$dailyValues->employment_subsidy}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                {{--                Weekly table--}}
                <div id="weeklySubsidies-table" class="d-none subsidies-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Para ingresos de $')}}</th>
                            <th scope="col">{{__('Hasta ingresos de $')}}</th>
                            <th scope="col">{{__('Cantidad de subsidio para el empleo diario en $')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($weeklyRetentions as $weeklyValues)
                            <tr>
                                <td>{{$weeklyValues->lower_limit}}</td>
                                <td>{{$weeklyValues->upper_limit}}</td>
                                <td>{{$weeklyValues->fixed_feed}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--                Ten days table--}}
                <div id="ten-daysSubsidies-table" class="d-none subsidies-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Para ingresos de $')}}</th>
                            <th scope="col">{{__('Hasta ingresos de $')}}</th>
                            <th scope="col">{{__('Cantidad de subsidio para el empleo diario en $')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tenDaysRetentions as $tenDaysValues)
                            <tr>
                                <td>{{$tenDaysValues->lower_limit}}</td>
                                <td>{{$tenDaysValues->upper_limit}}</td>
                                <td>{{$tenDaysValues->fixed_feed}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--                Biweekly table--}}
                <div id="biweeklySubsidies-table" class="d-none subsidies-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Para ingresos de $')}}</th>
                            <th scope="col">{{__('Hasta ingresos de $')}}</th>
                            <th scope="col">{{__('Cantidad de subsidio para el empleo diario en $')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($biweeklyRetentions as $biweeklyValues)
                            <tr>
                                <td>{{$biweeklyValues->lower_limit}}</td>
                                <td>{{$biweeklyValues->upper_limit}}</td>
                                <td>{{$biweeklyValues->fixed_feed}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--                Monthly table--}}
                <div id="monthlySubsidies-table" class="d-none subsidies-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Para ingresos de $')}}</th>
                            <th scope="col">{{__('Hasta ingresos de $')}}</th>
                            <th scope="col">{{__('Cantidad de subsidio para el empleo diario en $')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($monthlyRetentions as $monthlyValues)
                            <tr>
                                <td>{{$monthlyValues->lower_limit}}</td>
                                <td>{{$monthlyValues->upper_limit}}</td>
                                <td>{{$monthlyValues->fixed_feed}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


        {{--        Taxes tables--}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1"><h2 class="pb-3">Tablas de impuesto sobre nómina</h2></div>
                <div class="flex-2"><i class="fas fa-chevron-circle-down"></i></div>
            </div>

        </div>

    </div>

    @push('inline_scripts')
        <script>

            // Function to collapse tables with effect and changeing arrow icon
            const arrowClick = (name) => {
                $("#collapse-" + name).slideToggle(function () {
                    let arrowButton = document.getElementById(`${name}-icon`)
                    if (arrowButton.classList.contains('fa-chevron-circle-down')) {
                        arrowButton.classList.remove('fa-chevron-circle-down')
                        arrowButton.classList.add('fa-chevron-circle-up')
                    } else {
                        arrowButton.classList.remove('fa-chevron-circle-up')
                        arrowButton.classList.add('fa-chevron-circle-down')
                    }
                });
            }

            // Alpine function to change between tabs in Retentions ISR Section
            function data() {
                return {
                    changeTab(button) {
                        let retentionsButton = document.getElementById(`${button}-button`);
                        let retentionTabs = document.querySelectorAll('.tab-retention')
                        let allRetentionTables = document.querySelectorAll('.retentions-table')
                        let retentionTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if (!retentionsButton.classList.contains('active')) {
                            retentionTabs.forEach(item => {
                                item.classList.remove('active', 'bg-primary', 'text-white')
                            })
                            allRetentionTables.forEach(item => {
                                item.classList.add('d-none')
                            })
                            retentionsButton.classList.add('active', 'bg-primary', 'text-white')
                            retentionTable.classList.remove('d-none')
                        }
                    }
                }
            }

            // Alpine function to change between tabs in Subsidies Section
            function subsidiesData() {
                return {
                    changeTab(button) {
                        let subsidiesButton = document.getElementById(`${button}-button`);
                        let subsidiesTabs = document.querySelectorAll('.tab-subsidies')
                        let allSubsidiesTables = document.querySelectorAll('.subsidies-table')
                        let subsidyTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if (!subsidiesButton.classList.contains('active')) {
                            subsidiesTabs.forEach(item => {
                                item.classList.remove('active', 'bg-primary', 'text-white')
                            })
                            allSubsidiesTables.forEach(item => {
                                item.classList.add('d-none')
                            })
                            subsidiesButton.classList.add('active', 'bg-primary', 'text-white')
                            subsidyTable.classList.remove('d-none')
                        }
                    }
                }
            }

        </script>
    @endpush

</x-app-tenant>
