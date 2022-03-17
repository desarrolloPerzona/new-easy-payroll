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
    <div id="collapse-subsidies" class="display-none" x-data="subsidiesData()">

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
                @foreach($weeklySubsidies as $weeklyValues)
                    <tr>
                        <td>{{number_format($weeklyValues->income_from, 2, '.')}}</td>
                        @if($weeklyValues->income_up_to == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($weeklyValues->income_up_to, 2, '.')}}</td>
                        @endif
                        <td>{{$weeklyValues->employment_subsidy}}</td>
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
                @foreach($tenDaysSubsidies as $tenDaysValue)
                    <tr>
                        <td>{{number_format($tenDaysValue->income_from, 2, '.')}}</td>
                        @if($tenDaysValue->income_up_to == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($tenDaysValue->income_up_to, 2, '.')}}</td>
                        @endif
                        <td>{{$tenDaysValue->employment_subsidy}}</td>
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
                @foreach($biweeklySubsidies as $biweeklyValue)
                    <tr>
                        <td>{{number_format($biweeklyValue->income_from, 2, '.')}}</td>
                        @if($biweeklyValue->income_up_to == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($biweeklyValue->income_up_to, 2, '.')}}</td>
                        @endif
                        <td>{{$biweeklyValue->employment_subsidy}}</td>
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
                @foreach($monthlySubsidies as $monthlyValue)
                    <tr>
                        <td>{{number_format($monthlyValue->income_from, 2, '.')}}</td>
                        @if($monthlyValue->income_up_to == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($monthlyValue->income_up_to, 2, '.')}}</td>
                        @endif
                        <td>{{$monthlyValue->employment_subsidy}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
