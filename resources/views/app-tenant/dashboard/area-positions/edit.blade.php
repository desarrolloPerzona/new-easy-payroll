<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit areas and positions') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <h2 class="my-2 font-bold">{{__('Area')}}</h2>
            <label class="font-bold" for="name">{{__('Area name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="Dirección">

            <h2 class="my-2 font-bold">{{__('Positions')}}</h2>
            <div class="flex items-center">
                <div class="flex-2 w-full mr-2 pt-2">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="Director">
                </div>
                <div class="felx-1 mt-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Sin superior</option>
                            <option value="001">Sub Director</option>
                            <option value="002">Secretaria Dirección</option>
                            <option value="002">Supervisor general</option>
                            <option value="002">Jefe de oficina</option>

                        </select>
                    </label>
                </div>
                <div class="items-center ml-2"><i
                        class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></div>
            </div>

            <div class="flex items-center">
                <div class="flex-2 w-full mr-2 pt-2">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="Sub Director">
                </div>
                <div class="felx-1 mt-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Director</option>
                            <option value="001">Sin superior</option>
                            <option value="001">Sub Director</option>
                            <option value="002">Secretaria Dirección</option>
                            <option value="002">Supervisor general</option>
                            <option value="002">Jefe de oficina</option>

                        </select>
                    </label>
                </div>
                <div class="items-center ml-2"><i
                        class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></div>
            </div>

            <div class="flex items-center">
                <div class="flex-2 w-full mr-2 pt-2">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="Secretaria Dirección">
                </div>
                <div class="felx-1 mt-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Director</option>
                            <option value="001">Sin superior</option>
                            <option value="001">Sub Director</option>
                            <option value="002">Secretaria Dirección</option>
                            <option value="002">Supervisor general</option>
                            <option value="002">Jefe de oficina</option>

                        </select>
                    </label>
                </div>
                <div class="items-center ml-2"><i
                        class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></div>
            </div>

            <div class="flex items-center">
                <div class="flex-2 w-full mr-2 pt-2">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="Supervisor general">
                </div>
                <div class="felx-1 mt-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Sub Director</option>
                            <option value="001">Sin superior</option>
                            <option value="001">Director</option>
                            <option value="002">Secretaria Dirección</option>
                            <option value="002">Supervisor general</option>
                            <option value="002">Jefe de oficina</option>

                        </select>
                    </label>
                </div>
                <div class="items-center ml-2"><i
                        class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></div>
            </div>

            <div class="flex items-center">
                <div class="flex-2 w-full mr-2 pt-2">
                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="Jefe de oficina">
                </div>
                <div class="felx-1 mt-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full dark:bg-dark dark:text-white">
                            <option value="001">Sub Director</option>
                            <option value="001">Sin superior</option>
                            <option value="001">Director</option>
                            <option value="002">Secretaria Dirección</option>
                            <option value="002">Supervisor general</option>
                            <option value="002">Jefe de oficina</option>

                        </select>
                    </label>
                </div>
                <div class="items-center ml-2"><i
                        class="fas fa-trash-alt text-gray-400 hover:text-gray-700 cursor-pointer"></i></div>
            </div>

            {{--Nueva puesto ----------------}}

            <div class="accordion my-3" id="newBranch">

                <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
                    <div class="accordion-header mr-4" id="headingOne">

                        <div class="flex">
                            <div class="flex-1 pb-2">{{__('New position')}}</div>
                            <div class="flex-2">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseP1" aria-expanded="false"
                                        aria-controls="collapseP1"><i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>


                        <div id="collapseP1" class="accordion-collapse collapse"
                             aria-labelledby="headingTwo" data-bs-parent="#newBranch">
                            <div class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                                <div class="flex">
                                    <div class="flex-2 w-full mr-2">
                                        <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                               type="text" id="name" name="Name">
                                    </div>
                                    <div class="felx-1 mt-2 p-0 w-full">
                                        <label class="w-full">
                                            <select class="rounded w-full dark:bg-dark dark:text-white">
                                                <option value="001">Sin superior</option>
                                                <option value="001">Director</option>
                                                <option value="001">Sub Director</option>
                                                <option value="002">Secretaria Dirección</option>
                                                <option value="002">Supervisor general</option>
                                                <option value="002">Jefe de oficina</option>

                                            </select>
                                        </label>
                                    </div>
                                </div>

                                <div type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseP1" aria-expanded="false"
                                     aria-controls="collapseP1">
                                    <a href="#" class="btn btn-dark">
                                        <i class="fas fa-plus-circle"></i>
                                        {{ __('Save') }}
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="btn-top-holder my-3 flow-root">
                    <a href="javascript: history.go(-1)" class="btn btn-dark float-right">
                        {{ __('Save') }}
                    </a>
                </div>


            </div>
        </div>


</x-app-tenant>
