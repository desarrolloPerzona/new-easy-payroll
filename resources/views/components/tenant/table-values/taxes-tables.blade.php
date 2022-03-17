<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
    <div class="flex">
        <div class="flex-1">
            <h2 class="pb-3">Tablas de impuesto sobre nómina</h2>
        </div>
        <div class="flex-2">
            <div id="retentions-button" onclick="arrowClick('isn')">
                <i id="isn-icon" class="fas fa-chevron-circle-down cursor-pointer"></i>
            </div>
        </div>
    </div>

    <div id="collapse-isn" class="display-none mt-5" x-data="data()">

        {{--                All tables for each state--}}
        <div id="daily-table" class="retentions-table">

            @foreach($names as $key => $stateVariable)
                <div>
                    <h2>{{ $names[$key] }}</h2>
                </div>
                <hr>
                <table class="table table-striped mb-5">
                    <thead>
                    <tr>
                        <th scope="col">{{__('Límite inferior $')}}</th>
                        <th scope="col">{{__('Límite superior $')}}</th>
                        <th scope="col">{{__('Cuota fija $')}}</th>
                        <th scope="col">{{__('Excedentes %')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{dd($stateVariables)}}
{{--                    {{dd($'array'.$stateVariable)}}--}}

{{--                    @foreach(${"$name"} as $stateValue)--}}
{{--                        <tr>--}}
{{--                            <td>{{number_format($stateValue->lower_limit, 2, '.')}}</td>--}}
{{--                            @if($stateValue->upper_limit == 999999.00)--}}

{{--                                <td>{{__('En adelante')}}</td>--}}
{{--                            @else--}}
{{--                                <td>{{number_format($stateValue->upper_limit, 2, '.')}}</td>--}}
{{--                            @endif--}}
{{--                            <td>{{number_format($stateValue->fixed_fee, 2, '.')}}</td>--}}
{{--                            <td>{{$stateValue->lower_limit_surplus_percentage}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            @endforeach

            {{--            @foreach($stateVariables as $key =>$name)--}}
            {{--                <div>--}}
            {{--                    <h2>{{ $names[$key] }}</h2>--}}
            {{--                </div>--}}
            {{--                <hr>--}}

            {{--                <table class="table table-striped mb-5">--}}
            {{--                    <thead>--}}
            {{--                    <tr>--}}
            {{--                        <th scope="col">{{__('Límite inferior $')}}</th>--}}
            {{--                        <th scope="col">{{__('Límite superior $')}}</th>--}}
            {{--                        <th scope="col">{{__('Cuota fija $')}}</th>--}}
            {{--                        <th scope="col">{{__('Excedentes %')}}</th>--}}
            {{--                    </tr>--}}
            {{--                    </thead>--}}
            {{--                    <tbody>--}}
            {{--                    @foreach(${"$name"} as $stateValue)--}}
            {{--                        <tr>--}}
            {{--                            <td>{{number_format($stateValue->lower_limit, 2, '.')}}</td>--}}
            {{--                            @if($stateValue->upper_limit == 999999.00)--}}

            {{--                                <td>{{__('En adelante')}}</td>--}}
            {{--                            @else--}}
            {{--                                <td>{{number_format($stateValue->upper_limit, 2, '.')}}</td>--}}
            {{--                            @endif--}}
            {{--                            <td>{{number_format($stateValue->fixed_fee, 2, '.')}}</td>--}}
            {{--                            <td>{{$stateValue->lower_limit_surplus_percentage}}</td>--}}
            {{--                        </tr>--}}
            {{--                    @endforeach--}}
            {{--                    </tbody>--}}
            {{--                </table>--}}
            {{--            @endforeach--}}

        </div>

    </div>

</div>
