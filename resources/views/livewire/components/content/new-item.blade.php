<div>
    <div class="accordion my-4" id="newBranch">
        <div class="accordion-item bg-blueSteel py-2 px-3 mb-2 rounded">
            <div class="accordion-header mr-4" id="headingOne">
                <div class="flex">
                    <div class="flex-1">{{__('New branch')}}</div>
                    <div class="flex-2">
                        <button type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseP1" aria-expanded="false"
                                aria-controls="collapseP1"><i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>

                <div id="collapseP1" class="accordion-collapse collapse"
                     aria-labelledby="headingTwo" data-bs-parent="#newBranch">
                    <div
                        class="accordion-body text-dark bg-gray-100 rounded dark:bg-dark dark:text-white">
                        <div>
                            <div><label class="font-bold"
                                        for="name">{{__('Name')}}</label></div>
                            <div><input
                                    class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                    type="text" id="name"
                                    name="Name">
                            </div>
                        </div>
                        <div>
                            <div><label class="font-bold"
                                        for="name">{{__('Description')}}</label>
                            </div>
                            <div><input
                                    class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                    type="text" id="name" name="Name">
                            </div>
                        </div>
                        <div class="pb-4">
                            <div class="my-2"><label class="font-bold"
                                                     for="name">{{__('Employer registration')}}</label>
                            </div>
                            <div><label class="w-full">
                                    <select class="rounded w-full dark:bg-dark dark:text-white">
                                        <option value="001">Registro CDMX</option>
                                        <option value="001">Registro MTY</option>
                                        <option value="001">Registro GDL</option>
                                        <option class="font-bold" value="001">Agregar Registro Patronal</option>

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
</div>
