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

    <div id="collapse-retentions" class="display-none" x-data="data()">
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
                    <th scope="col">{{__('Límite inferior $')}}</th>
                    <th scope="col">{{__('Límite superior $')}}</th>
                    <th scope="col">{{__('Cuota fija $')}}</th>
                    <th scope="col">{{__('Excedentes %')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dailyRetentions as $dailyValues)
                    <tr>
                        <td>{{number_format($dailyValues->lower_limit, 2, '.')}}</td>
                        @if($dailyValues->upper_limit == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($dailyValues->upper_limit, 2, '.')}}</td>
                        @endif
                        <td>{{ number_format($dailyValues->fixed_feed, 2, '.')}}</td>
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
                    <th scope="col">{{__('Límite inferior $')}}</th>
                    <th scope="col">{{__('Límite superior $')}}</th>
                    <th scope="col">{{__('Cuota fija $')}}</th>
                    <th scope="col">{{__('Excedentes %')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($weeklyRetentions as $weeklyValues)
                    <tr>
                        <td>{{number_format($weeklyValues->lower_limit, 2, '.')}}</td>
                        @if($weeklyValues->upper_limit == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($weeklyValues->upper_limit, 2, '.')}}</td>
                        @endif
                        <td>{{number_format($weeklyValues->fixed_feed, 2, '.')}}</td>
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
                    <th scope="col">{{__('Límite inferior $')}}</th>
                    <th scope="col">{{__('Límite superior $')}}</th>
                    <th scope="col">{{__('Cuota fija $')}}</th>
                    <th scope="col">{{__('Excedentes %')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tenDaysRetentions as $tenDaysValues)
                    <tr>
                        <td>{{number_format($tenDaysValues->lower_limit, 2, '.')}}</td>
                        @if($tenDaysValues->upper_limit == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($tenDaysValues->upper_limit, 2, '.')}}</td>
                        @endif
                        <td>{{number_format($tenDaysValues->fixed_feed, 2, '.')}}</td>
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
                    <th scope="col">{{__('Límite inferior $')}}</th>
                    <th scope="col">{{__('Límite superior $')}}</th>
                    <th scope="col">{{__('Cuota fija $')}}</th>
                    <th scope="col">{{__('Excedentes %')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($biweeklyRetentions as $biweeklyValues)
                    <tr>
                        <td>{{number_format($biweeklyValues->lower_limit, 2, '.')}}</td>
                        @if($biweeklyValues->upper_limit == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{number_format($biweeklyValues->upper_limit, 2, '.')}}</td>
                        @endif
                        <td>{{number_format($biweeklyValues->fixed_feed, 2, '.')}}</td>
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
                    <th scope="col">{{__('Límite inferior $')}}</th>
                    <th scope="col">{{__('Límite superior $')}}</th>
                    <th scope="col">{{__('Cuota fija $')}}</th>
                    <th scope="col">{{__('Excedentes %')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($monthlyRetentions as $monthlyValues)
                    <tr>
                        <td>{{number_format($monthlyValues->lower_limit, 2, '.')}}</td>
                        @if($monthlyValues->upper_limit == 999999.00)
                            <td>{{__('En adelante')}}</td>
                        @else
                            <td>{{ number_format($monthlyValues->upper_limit, 2, '.')}}</td>
                        @endif
                        <td>{{ number_format($monthlyValues->fixed_feed, 2, '.')}}</td>
                        <td>{{$monthlyValues->percentage_excess_to_lower_limit}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
