<x-app-tenant>
    <div class="container">

        <x-utilities.section-header classes="" title="Policies" />

        <div class="btn-top-holder my-3 max-w-6xl mx-auto">
            <a href="{{route('policies.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New Policies') }}
            </a>
        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <table class="table">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th colspan="3"></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--P1--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 90%">Política 1</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseP1"
                                            aria-expanded="false" aria-controls="collapseP1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('policies.edit',1)}}"> <i
                                            class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                </td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapseP1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="border-bottom-1 border-gray-400 pb-3">
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Vacation days')}}
                                    </div>
                                    <div class="flex-1">
                                        6 días
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Economic days:')}}
                                    </div>
                                    <div class="flex-1">
                                        5 días
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Vacation premium')}}
                                    </div>
                                    <div class="flex-1">
                                        0.25
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Bonus days')}}
                                    </div>
                                    <div class="flex-1">
                                        15 días
                                    </div>
                                </div>
                                </div>

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Pantry vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        5%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Pantry vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Restaurant vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        13%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Restaurant vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Saving Fund:')}}
                                    </div>
                                    <div class="flex-1">
                                        13%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Savings fund capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Proportional discount seventh day:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Fouls are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Disabilities are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Holiday bonus to the anniversary:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Calculation based on:')}}
                                    </div>
                                    <div class="flex-1">
                                        {{__('Seniority date')}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--P2--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 90%">Política 2</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseP2"
                                            aria-expanded="false" aria-controls="collapseP1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseP2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="border-bottom-1 border-gray-400 pb-3">
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Vacation days')}}
                                        </div>
                                        <div class="flex-1">
                                            6 días
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Economic days:')}}
                                        </div>
                                        <div class="flex-1">
                                            5 días
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Vacation premium')}}
                                        </div>
                                        <div class="flex-1">
                                            0.25
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Bonus days')}}
                                        </div>
                                        <div class="flex-1">
                                            15 días
                                        </div>
                                    </div>
                                </div>

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Pantry vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        0%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Pantry vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        -
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Restaurant vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        0%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Restaurant vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        -
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Saving Fund:')}}
                                    </div>
                                    <div class="flex-1">
                                        5%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Savings fund capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        -
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Proportional discount seventh day:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Fouls are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Disabilities are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Holiday bonus to the anniversary:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Calculation based on:')}}
                                    </div>
                                    <div class="flex-1">
                                        {{__('Seniority date')}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--PL3--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 90%">Política 3</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseP3"
                                            aria-expanded="false" aria-controls="collapseP1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseP3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="border-bottom-1 border-gray-400 pb-3">
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Vacation days')}}
                                        </div>
                                        <div class="flex-1">
                                            6 días
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Economic days:')}}
                                        </div>
                                        <div class="flex-1">
                                            5 días
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Vacation premium')}}
                                        </div>
                                        <div class="flex-1">
                                            0.25
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Bonus days')}}
                                        </div>
                                        <div class="flex-1">
                                            15 días
                                        </div>
                                    </div>
                                </div>

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Pantry vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        10%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Pantry vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Restaurant vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        15%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Restaurant vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Saving Fund:')}}
                                    </div>
                                    <div class="flex-1">
                                        15%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Savings fund capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Proportional discount seventh day:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Fouls are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Disabilities are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Holiday bonus to the anniversary:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Calculation based on:')}}
                                    </div>
                                    <div class="flex-1">
                                        {{__('Seniority date')}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--PL4--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 90%">Política 4</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseP4"
                                            aria-expanded="false" aria-controls="collapseP1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><i class="fas fa-edit text-gray-400"></i></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseP4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="border-bottom-1 border-gray-400 pb-3">
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Vacation days')}}
                                        </div>
                                        <div class="flex-1">
                                            6 días
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Economic days:')}}
                                        </div>
                                        <div class="flex-1">
                                            5 días
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Vacation premium')}}
                                        </div>
                                        <div class="flex-1">
                                            0.25
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="flex-1 text-gray-500">
                                            {{__('Bonus days')}}
                                        </div>
                                        <div class="flex-1">
                                            15 días
                                        </div>
                                    </div>
                                </div>

                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Pantry vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        2%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Pantry vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Restaurant vouchers:')}}
                                    </div>
                                    <div class="flex-1">
                                        5%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Restaurant vouchers capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Saving Fund:')}}
                                    </div>
                                    <div class="flex-1">
                                        5%
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500 ">
                                        {{__('Savings fund capped:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Proportional discount seventh day:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Fouls are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Disabilities are discounted:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Holiday bonus to the anniversary:')}}
                                    </div>
                                    <div class="flex-1">
                                        Si
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="flex-1 text-gray-500">
                                        {{__('Calculation based on:')}}
                                    </div>
                                    <div class="flex-1">
                                        {{__('Seniority date')}}
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
