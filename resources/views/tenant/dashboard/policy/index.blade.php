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
                        Días económicos:
                    </div>
                    <div class="flex-1">
                        5 días
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de despensa:
                    </div>
                    <div class="flex-1">
                        5%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vale de despensa topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de restaurante:
                    </div>
                    <div class="flex-1">
                        13%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vales de restaurante topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Fondo de ahorro:
                    </div>
                    <div class="flex-1">
                       13%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Fondo de ahorro topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descuento proporcional séptimo día:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan faltas:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan incapacidades:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Prima vacacional al aniversario:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cálculo en base a:
                    </div>
                    <div class="flex-1">
                        Fecha de antigüedad
                    </div>
                </div>

            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 2 <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Días económicos:
                    </div>
                    <div class="flex-1">
                        5 días
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de despensa:
                    </div>
                    <div class="flex-1">
                        0%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vale de despensa topado:
                    </div>
                    <div class="flex-1">
                        -
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de restaurante:
                    </div>
                    <div class="flex-1">
                        0%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vales de restaurante topado:
                    </div>
                    <div class="flex-1">
                        -
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Fondo de ahorro:
                    </div>
                    <div class="flex-1">
                        5%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Fondo de ahorro topado:
                    </div>
                    <div class="flex-1">
                        -
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descuento proporcional séptimo día:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan faltas:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan incapacidades:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Prima vacacional al aniversario:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cálculo en base a:
                    </div>
                    <div class="flex-1">
                        Fecha de antigüedad
                    </div>
                </div>

            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 3 <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Días económicos:
                    </div>
                    <div class="flex-1">
                        7 días
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de despensa:
                    </div>
                    <div class="flex-1">
                        10%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vale de despensa topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de restaurante:
                    </div>
                    <div class="flex-1">
                        15%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vales de restaurante topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Fondo de ahorro:
                    </div>
                    <div class="flex-1">
                        15%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Fondo de ahorro topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descuento proporcional séptimo día:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan faltas:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan incapacidades:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Prima vacacional al aniversario:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cálculo en base a:
                    </div>
                    <div class="flex-1">
                        Fecha de antigüedad
                    </div>
                </div>

            </div>

            <div class="border-bottom-1 border-gray-400 py-3">
                <h2>Política 4 <a class="text-gray-400 hover:text-gray-700" href="#"><i class="fas fa-edit"></i></a></h2>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Días económicos:
                    </div>
                    <div class="flex-1">
                        4 días
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de despensa:
                    </div>
                    <div class="flex-1">
                        2%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vale de despensa topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Vales de restaurante:
                    </div>
                    <div class="flex-1">
                        5%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Vales de restaurante topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Fondo de ahorro:
                    </div>
                    <div class="flex-1">
                        5%
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500 ">
                        Fondo de ahorro topado:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Descuento proporcional séptimo día:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan faltas:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Se descuentan incapacidades:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Prima vacacional al aniversario:
                    </div>
                    <div class="flex-1">
                        Si
                    </div>
                </div>
                <div class="flex pt-2">
                    <div class="flex-1 text-gray-500">
                        Cálculo en base a:
                    </div>
                    <div class="flex-1">
                        Fecha de antigüedad
                    </div>
                </div>

            </div>




        </div>


    </div>

</x-app-tenant>
