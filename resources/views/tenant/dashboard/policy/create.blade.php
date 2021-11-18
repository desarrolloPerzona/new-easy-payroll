<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="nav-icon fad fa-user-cog mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create policy') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <lavel class="font-bold" for="name">{{__('Policy name')}}</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <lavel class="font-bold" for="name">{{__('Economic days')}}</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            {{--Vales despensa--}}
            <lavel class="font-bold my-2" for="name">{{__('Grocery coupon')}}</lavel>
            <div class="flex">

                <div class="felx-1 mt-2 mr-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full">
                            <option value="001">{{__('Percentage')}}</option>
                            <option value="002">{{__('Nominal')}}</option>

                        </select>
                    </label>
                </div>
                <div class="flex-2 w-full">
                    <input class="text-gray-800 rounded my-2 w-full" type="text" id="name" name="Name">
                </div>

            </div>

            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800">{{__('Top of pantry vouchers')}}</label>
            </div>

            {{--Vales Restaurante--}}
            <lavel class="font-bold my-2" for="name">{{__('Restaurant voucher')}}</lavel>
            <div class="flex">

                <div class="felx-1 mt-2 mr-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full">
                            <option value="001">{{__('Percentage')}}</option>
                            <option value="002">{{__('Nominal')}}</option>

                        </select>
                    </label>
                </div>
                <div class="flex-2 w-full">
                    <input class="text-gray-800 rounded my-2 w-full" type="text" id="name" name="Name">
                </div>

            </div>

            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800">{{__('Restaurant voucher cap')}}</label>
            </div>

            {{--Fondo de ahorro--}}
            <lavel class="font-bold my-2" for="name">{{__('Saving Fund')}}</lavel>
            <div class="flex">

                <div class="felx-1 mt-2 mr-2 p-0 w-full">
                    <label class="w-full">
                        <select class="rounded w-full">
                            <option value="001">{{__('Percentage')}}</option>
                            <option value="002">{{__('Nominal')}}</option>

                        </select>
                    </label>
                </div>
                <div class="flex-2 w-full">
                    <input class="text-gray-800 rounded my-2 w-full" type="text" id="name" name="Name">
                </div>

            </div>

            <div class="my-3 pb-2">
                <input type="checkbox" id="id" name="drone" value="id"
                       >
                <label class="text-gray-800">{{__('Savings fund cap')}}</label>
            </div>

            <label  class="font-bold my-2" for="name">{{__('New concept')}}</label>
            <div class="btn-top-holder my-3 pb-4">
                <a href="#" class="btn btn-dark">
                    {{ __('Add concept') }}
                </a>
            </div>

            {{--Descuento faltas--}}
            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800">{{__('Discount for absences')}}</label>
            </div>
            {{--Descuento Incapacidades--}}
            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800">{{__('Disability discount')}}</label>
            </div>
            {{--Descuento 7o Dia--}}
            <div class="my-3">
                <input type="checkbox" id="id" name="drone" value="id">
                <label class="text-gray-800">{{__('Discount proportion 7th day')}}</label>
            </div>

            {{--DCalculo base--}}
            <lavel class="font-bold my-2" for="name">{{__('Calculation based on:')}}</lavel>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>{{__('Seniority date')}}</label>
            </div>

            <div class="my-2">
                <input type="radio" id="id" name="name" value="value">
                <label>{{__('Contract start date')}}</label>
            </div>

            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>
</x-app-tenant>
