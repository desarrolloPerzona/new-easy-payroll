<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create new benefits table') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Benefit table name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="Nombre de tabla de beneficios">
            {{-- Titulos --}}
            <div class=" my-2 flex">
                <div class="w-1/5 w-full font-bold text-center">{{__('Years of antiguaty')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Bonus days')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Vacations')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Vacation premium')}}</div>
                <div class="w-1/5 w-full font-bold text-center">{{__('Economic days')}}</div>
            </div>
            {{-- 1 --}}
            <div class="flex items-center mr-4">
                <div class="w-1/5 w-full text-center mt-3">1</div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="15" placeholder="15">
                </div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="6" placeholder="6"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="0.25" placeholder="0.25"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name"  placeholder="0"></div>
                <div class="flex-1">
                    <i class="fas fa-circle text-white"></i>
                </div>
            </div>
            {{-- 2 --}}
            <div class="flex items-center mr-4">
                <div class="w-1/5 w-full text-center mt-3">2</div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="15" placeholder="15">
                </div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="8" placeholder="8"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="0.25" placeholder="0.25"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" placeholder="0"></div>
                <div class="flex-1">
                    <i class="fas fa-circle text-white"></i>
                </div>
            </div>
            {{-- 3 --}}
            <div class="flex items-center mr-4">
                <div class="w-1/5 w-full text-center mt-3">3</div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="15" placeholder="15">
                </div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="10" placeholder="10"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="0.25" placeholder="0.25"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" placeholder="0"></div>
                <div class="flex-1">
                    <i class="fas fa-circle text-white"></i>
                </div>
            </div>
            {{-- 4 --}}
            <div class="flex items-center mr-4">
                <div class="w-1/5 w-full text-center mt-3">4</div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="15" placeholder="15">
                </div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="12" placeholder="12"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="0.25" placeholder="0.25"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" placeholder="0"></div>
                <div class="flex-1">
                        <i class="fas fa-circle text-white"></i>
                </div>
            </div>

            {{--        5-9 Accordion--}}
            <div class="accordion" id="59">
                <div class="accordion-item">
                    {{--                Accordion header--}}
                    <div class="accordion-header mr-4" id="59">
                        <div class="flex items-center">
                            <div class="w-1/5 w-full text-center mt-3">5-9</div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="15" placeholder="15">
                            </div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="14" placeholder="14"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" placeholder="0"></div>
                            <div class="flex-1">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#cinconueve"
                                        aria-expanded="false" aria-controls="cinconueve">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--                Accordion Body--}}
                    <div id="cinconueve" class="accordion-collapse collapse"
                         aria-labelledby="5-9"
                         data-bs-parent="#59">
                        <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">5</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="14" placeholder="14"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">6</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="14" placeholder="14"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">7</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="14" placeholder="14"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">8</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="14" placeholder="14"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">9</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="14" placeholder="14"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{--        10-14 Accordion--}}
            <div class="accordion" id="1014">
                <div class="accordion-item">
                    {{--                Accordion header--}}
                    <div class="accordion-header mr-4" id="1014">
                        <div class="flex items-center">
                            <div class="w-1/5 w-full text-center mt-3">10-14</div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="15" placeholder="15">
                            </div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" placeholder="16"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" placeholder="0.25"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" placeholder="0"></div>
                            <div class="flex-1">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#diezcatorce"
                                        aria-expanded="false" aria-controls="cinconueve">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--                Accordion Body--}}
                    <div id="diezcatorce" class="accordion-collapse collapse"
                         aria-labelledby="10-14"
                         data-bs-parent="#1014">
                        <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">10</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="16" placeholder="16"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">11</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="16" placeholder="16"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">12</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="16" placeholder="16"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">13</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="16" placeholder="16"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">14</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="16" placeholder="16"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{--        15-19 Accordion--}}
            <div class="accordion" id="1519">
                <div class="accordion-item">
                    {{--                Accordion header--}}
                    <div class="accordion-header mr-4" id="1519">
                        <div class="flex items-center">
                            <div class="w-1/5 w-full text-center mt-3">15-19</div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="15" placeholder="15">
                            </div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="18" placeholder="18"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" placeholder="0"></div>
                            <div class="flex-1">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#quincediecinueve"
                                        aria-expanded="false" aria-controls="cinconueve">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--                Accordion Body--}}
                    <div id="quincediecinueve" class="accordion-collapse collapse"
                         aria-labelledby="15-19"
                         data-bs-parent="#59">
                        <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">15</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="18" placeholder="18"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">16</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="18" placeholder="18"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">17</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="18" placeholder="18"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">18</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="18" placeholder="18"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">19</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="18" placeholder="18"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{--        20-24 Accordion--}}
            <div class="accordion" id="2024">
                <div class="accordion-item">
                    {{--                Accordion header--}}
                    <div class="accordion-header mr-4" id="1519">
                        <div class="flex items-center">
                            <div class="w-1/5 w-full text-center mt-3">20-24</div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="15" placeholder="15">
                            </div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="20" placeholder="20"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                            <div class="w-1/5 w-full"><input
                                    class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                    type="number" id="name" name="Name" placeholder="0"></div>
                            <div class="flex-1">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#veinteveintycuatro"
                                        aria-expanded="false" aria-controls="cinconueve">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--                Accordion Body--}}
                    <div id="veinteveintycuatro" class="accordion-collapse collapse"
                         aria-labelledby="20-24"
                         data-bs-parent="#2024">
                        <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">

                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">20</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="20" placeholder="20"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">21</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="20" placeholder="20"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">22</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="20" placeholder="20"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">23</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="20" placeholder="20"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/5 w-full text-center mt-3">24</div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="15" placeholder="15">
                                </div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="20" placeholder="20"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" min="0.25" placeholder="0.25"></div>
                                <div class="w-1/5 w-full"><input
                                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white"
                                        type="number" id="name" name="Name" placeholder="0"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- 25-* --}}
            <div class="flex items-center mr-4">
                <div class="w-1/5 w-full text-center mt-3">25-*</div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="15" placeholder="15">
                </div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="22" placeholder="22"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" min="0.25" placeholder="0.25"></div>
                <div class="w-1/5 w-full"><input
                        class="text-center text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="number"
                        id="name" name="Name" placeholder="0"></div>
                <div class="flex-1">
                    <i class="fas fa-circle text-white"></i>
                </div>
            </div>


            <div class="btn-top-holder my-3 text-right">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>
</x-app-tenant>
