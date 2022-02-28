<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.section-header title="Create bank accounts" classes="mb-3"/>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white my-2">
                    @foreach($businesses as $business)
                        <option value="{{$business->id}}">{{$business->name}}</option>
                    @endforeach
                </select>
            </label>

            <label class="font-bold" for="name">{{__('Account name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold" for="name">{{__('Account number')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold" for="name">{{__('Description')}}</label>
            <textarea class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                      name="Name"></textarea>


            <label class="font-bold my-2" for="name">{{__('Bank')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="">{{__('Select')}}</option>
                    @foreach($banks as $bank)
                        <option value="{{$bank->institutional_key}}">{{$bank->name}}</option>
                    @endforeach
                </select>
            </label>

            <label class="font-bold" for="name">{{__('Information number')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold" for="name">{{__('Branch number')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <label class="font-bold" for="name">{{__('CLABE account')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">

            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>


</x-app-tenant>
