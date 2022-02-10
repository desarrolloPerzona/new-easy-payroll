<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Employees list') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            {{--      Filtos      --}}
            <div class="flex">
                <div class="flex-auto w-1/4">

                    <div class="btn-top-holder my-3">
                        <a class="btn btn-dark cursor-pointer">
                            {{ __('Actives') }} (16)
                        </a>
                    </div>
                </div>
                <div class="flex-auto w-1/4">
                    <div class="btn-top-holder my-3">
                        <a class="btn btn-light cursor-pointer">
                            {{ __('Inactives') }} (5)
                        </a>
                    </div>
                </div>
                <div class="flex-auto w-1/4 pr-2">
                    <select class="w-full rounded dark:bg-dark dark:text-white  my-3">
                        <option value="001">{{__('Filter by area')}}</option>
                    </select>
                </div>
                <div class="flex-auto w-1/4 pr-2">
                    <select class="w-full rounded dark:bg-dark dark:text-white my-3">
                        <option value="001">{{__('Filter by branch')}}</option>
                    </select>
                </div>
            </div>
            {{--      END Filtos      --}}

            {{--      Search      --}}

            <div class="w-full my-2">
                <div class="relative">
                    <div class="absolute top-4 left-3"><i
                            class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i></div>
                    <input type="text" class="h-14 w-full pl-10 pr-20 rounded-lg dark:bg-dark dark:text-white"
                           placeholder="{{__('Who do you want to look for')}}">
                    <div class="absolute top-2 right-2">
                        <button class="h-10 w-20 text-white rounded-lg btn btn-dark cursor-pointer">
                            {{__('Search')}}</button>
                    </div>
                </div>
            </div>

            {{--      END Search      --}}

            {{--      Employers list      --}}
            <div class=" my-4 flex">
                <div class="w-1/12 w-full font-bold text-center"></div>
                <div class="w-2/12 w-full font-bold text-center">{{__('Name')}}</div>
                <div class="w-2/12 w-full font-bold text-center">{{__('ID')}}</div>
                <div class="w-2/12 w-full font-bold text-center">{{__('Job position')}}</div>
                <div class="w-2/12 w-full font-bold text-center">{{__('Branch')}}</div>
                <div class="w-3/12 w-full font-bold text-center"></div>
            </div>

            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Juan Perez</div>
                <div class="w-2/12 w-full text-center">0236</div>
                <div class="w-2/12 w-full text-center">Director de MKT</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="{{route('employee-list.show',1)}}">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Oscar Fernandez</div>
                <div class="w-2/12 w-full text-center">2369</div>
                <div class="w-2/12 w-full text-center">Asistente contable</div>
                <div class="w-2/12 w-full text-center">GDL</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Alejandro Ortiz</div>
                <div class="w-2/12 w-full text-center">0123</div>
                <div class="w-2/12 w-full text-center">Diseñador gráfico</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Luis Ortiz</div>
                <div class="w-2/12 w-full text-center">1523</div>
                <div class="w-2/12 w-full text-center">Gerente ventas</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Hector Ponce</div>
                <div class="w-2/12 w-full text-center">8963</div>
                <div class="w-2/12 w-full text-center">Gerente de ventas</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Fernando Augusto</div>
                <div class="w-2/12 w-full text-center">1256</div>
                <div class="w-2/12 w-full text-center">Director de Ventas</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Alex Vaught</div>
                <div class="w-2/12 w-full text-center">0905</div>
                <div class="w-2/12 w-full text-center">Director de Desarrollo</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Juan Perez</div>
                <div class="w-2/12 w-full text-center">0236</div>
                <div class="w-2/12 w-full text-center">Director de MKT</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Elena Flores</div>
                <div class="w-2/12 w-full text-center">0458</div>
                <div class="w-2/12 w-full text-center">Gerente de MKT</div>
                <div class="w-2/12 w-full text-center">GDL</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Alejandra Gutierrez</div>
                <div class="w-2/12 w-full text-center">2812</div>
                <div class="w-2/12 w-full text-center">Disñeador gráfico</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Elena Perez</div>
                <div class="w-2/12 w-full text-center">0362</div>
                <div class="w-2/12 w-full text-center">Gerente de administración</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Pablo Bremea</div>
                <div class="w-2/12 w-full text-center">0874</div>
                <div class="w-2/12 w-full text-center">Asistente administración</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Eduardo Ortega</div>
                <div class="w-2/12 w-full text-center">1258</div>
                <div class="w-2/12 w-full text-center">Vendedor</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Hector Gutierres</div>
                <div class="w-2/12 w-full text-center">0852</div>
                <div class="w-2/12 w-full text-center">Director de Contabilidad</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            <div class=" my-2 flex">
                <div class="w-1/12 w-full text-center"><img class="w-8 m-auto" src="/assets/images/avatar/user.jpg" alt="">
                </div>
                <div class="w-2/12 w-full text-center">Juan Perez</div>
                <div class="w-2/12 w-full text-center">0236</div>
                <div class="w-2/12 w-full text-center">Director de MKT</div>
                <div class="w-2/12 w-full text-center">CDMX</div>
                <div class="w-1/12 text-center">
                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                </div>
                <div class="w-1/12 text-center">
                    <a href="">
                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                </div>
                <div class="w-1/12 text-center"><i class="fas fa-trash-alt text-gray-400"></i></div>
            </div>
            {{--      END Employers list      --}}

        </div>
    </div>

</x-app-tenant>
