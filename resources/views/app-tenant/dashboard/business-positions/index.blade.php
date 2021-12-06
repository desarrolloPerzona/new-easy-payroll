<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fas fa-sitemap mr-2"></i>
            <span style="display: inline-flex;">{{ __('Business positions') }}</span>
        </h2>

        <div class="flex">
            <div class="btn-top-holder my-3 flex-1">
                <a href="{{route('business-positions.create',1)}}" class="btn btn-dark">
                    <i class="fas fa-plus-circle"></i>
                    {{ __('New business position') }}
                </a>
            </div>
            <div class="flex-1 my-3 text-right">
                <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
                <label>
                    <select class="w-full rounded dark:bg-dark dark:text-white">
                        <option value="001">Perzona</option>
                        <option value="001">DSSD</option>
                    </select>
                </label>
            </div>

        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <table class="table">
                <tr>
                    <th>{{__('Job position')}}</th>
                    <th>{{__('Seat')}}</th>
                    <th>{{__('Area')}}</th>
                    <th class="text-center">{{__('Branch')}}</th>
                    <th colspan="3"></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--Semanal 1--------------}}
                    <table class="table">
                        <td style="width: 35%">Director MKT</td>
                        <td style="width: 20%">Juan Perez</td>
                        <td style="width: 16%">MKT</td>
                        <td style="width: 16%">CDMX</td>
                        <td style="width: 3%">
                            <a href="{{ route('business-positions.show',1) }}">
                                <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                        </td>
                        <td style="width: 3%"><a href="{{route('business-positions.edit',1)}}"> <i
                                    class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                        <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                    </table>

                    {{--Quincenal 2--------------}}
                    <table class="table">

                        <td style="width: 35%">Diseñador Grafico</td>
                        <td style="width: 20%">Alberto Ortiz</td>
                        <td style="width: 16%">MKT</td>
                        <td style="width: 16%">CDMX</td>
                        <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                        <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                        <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                    </table>

                    {{--Mensual 2--------------}}
                    <table class="table">
                        <td style="width: 35%">Director Contabilidad</td>
                        <td style="width: 20%">Cesar Muñoz</td>
                        <td style="width: 16%">Contabilidad</td>
                        <td style="width: 16%">CDMX</td>
                        <td style="width: 3%"><i class="fas fa-eye text-gray-400"></i></td>
                        <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                        <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                    </table>

                </div>
            </div>
            {{--ACCORDION--}}


        </div>

    </div>
</x-app-tenant>



