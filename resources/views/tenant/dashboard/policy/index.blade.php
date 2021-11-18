<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Policies') }}</span>
        </h2>

        <div class="btn-top-holder my-3">
            <a href="{{route('policies.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New Policies') }}
            </a>
        </div>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 1 <a class="text-gray-400 hover:text-gray-700" href="{{route('policies.edit',1)}}"><i class="fas fa-edit"></i></a></h2>
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

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 2 <i class="fas fa-edit text-gray-400"></i></h2>
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

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 3 <i class="fas fa-edit text-gray-400"></i></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                         {{__('Economic days:')}}
                    </div>
                    <div class="flex-1">
                        7 días
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

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 4 <i class="fas fa-edit text-gray-400"></i></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        {{__('Economic days:')}}
                    </div>
                    <div class="flex-1">
                        4 días
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

</x-app-tenant>
