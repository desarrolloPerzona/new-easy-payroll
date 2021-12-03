<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit working day holiday') }}</span>
        </h2>

<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold" for="name">{{__('Name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold my-2" for="name">{{__('Type of shift')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">{{__('Select')}}</option>
                    <option value="001">{{__('Day shift')}}</option>
                    <option value="002">{{__('Night shift')}}</option>
                    <option value="002">{{__('Mixed')}}</option>

                </select>
            </label>
            <label class="font-bold my-2" for="name">{{__('Weekdays')}}</label>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Monday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Tuesday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Wednesday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Thursday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Friday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Saturday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>

            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Sunday')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>


            <label class="font-bold mt-5 mb-2" for="name">{{__('Meal hours')}}</label>
            <div class="flex my-1 w-1/2">
                <div class="flex-auto mr-4"><input type="checkbox" id="cbox1" value="first_checkbox"></div>
                <div class="flex-1"><p>{{__('Lunch')}}</p></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
                <div class="flex-1"><label>
                        <select class="w-full rounded dark:bg-dark dark:text-white">
                            <option value="001">00:00</option>
                            <option value="002">01:00</option>
                            <option value="002">02:00</option>
                            <option value="002">03:00</option>
                            <option value="002">04:00</option>
                            <option value="002">05:00</option>
                            <option value="002">06:00</option>
                            <option value="002">07:00</option>
                            <option value="002">08:00</option>
                            <option value="002">09:00</option>
                            <option value="002">10:00</option>
                            <option value="002">11:00</option>
                            <option value="002">12:00</option>
                            <option value="002">13:00</option>
                            <option value="002">14:00</option>
                            <option value="002">15:00</option>
                            <option value="002">16:00</option>
                            <option value="002">17:00</option>
                            <option value="002">18:00</option>
                            <option value="002">19:00</option>
                            <option value="002">20:00</option>
                            <option value="002">21:00</option>
                            <option value="002">22:00</option>
                            <option value="002">23:00</option>
                            <option value="002">24:00</option>

                        </select>
                    </label></div>
            </div>


            <div class="btn-top-holder my-3 flow-root">
                <a href="javascript: history.go(-1)" class="btn btn-dark float-right">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>


</x-app-tenant>
