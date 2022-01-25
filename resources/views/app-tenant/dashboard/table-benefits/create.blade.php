<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create new benefits table') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Benefit table name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="Nombre de tabla de beneficios">
            {{-- Titulos --}}
            <div class=" my-2 flex">
                <div class="w-1/5 w-full font-bold text-center">{{__('Years of antiguaty')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Bonus days')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Vacations')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Vacation premium')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Economic days')}}</div>
            </div>
            {{-- 1 --}}
            <div class="flex">
                <div class="w-1/5 w-full text-center mt-3">1</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 6"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 2 --}}
            <div class="flex">
                <div class="w-1/5 w-full text-center mt-3">2</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 8"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 3 --}}
            <div class="flex">
                <div class="w-1/5 w-full text-center mt-3">3</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 10"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 4 --}}
            <div class="flex"<= >
                <div class="w-1/5 w-full text-center mt-3">4</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 12"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 5-9 --}}
            <div class="flex">
                <div class="w-1/5 w-full text-center mt-3">5-9</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 14"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 10-14 --}}
            <div class="flex"<= <= <= >
                <div class="w-1/5 w-full text-center mt-3">10-14</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 16"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 15-19 --}}
            <div class="flex"<= <= >
                <div class="w-1/5 w-full text-center mt-3">15-19</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 18"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 20-24 --}}
            <div class="flex"<= >
                <div class="w-1/5 w-full text-center mt-3">20-24</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 20"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>
            {{-- 25-* --}}
            <div class="flex">
                <div class="w-1/5 w-full text-center mt-3">25-*</div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 15">
                </div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 22"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0.25"></div>
                <div class="w-1/5 w-full"><input class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number" id="name" name="Name" placeholder="<= 0"></div>
            </div>


            <div class="btn-top-holder my-3 text-right">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>
</x-app-tenant>
