<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent='"Business"' :children="['Create']" :itemId="''" :icon="'fak fa-empresa-perzona'"/>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <h2 class="py-3">{{__('Business')}}</h2>

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Name')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <livewire:components.content.file-upload-pquina :name="'logo'" :max-files="1" :file-type="'image/png, image/jpeg, image/gif'" :allow-multiple="'multiple'" :attributes="''" :label="'Logo'" :upload-route="'uploadFiles'"/>

            <div class="flex-1 text-lef py-2"><label class="font-bold" for="name">{{__('Industry')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Fiscal regime')}}</label></div>
            <label>
                <select class="w-full rounded">
                    <option value="001">Perona Fisica</option>
                    <option value="002">Persona Moral</option>
                    <option value="002">Sin fines de lucro</option>
                </select>
            </label>


            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Business name')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">


            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('RFC')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">


            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Adress')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('State')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('ZIP Code')}}</label></div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            {{--            Accounts-----------------------}}
            <h2 class="py-3">{{__('Accounts')}}</h2>

            <div class="flex">

                <div class="w-5/12 w-full mr-2">
                    <div class="text-left py-2"><label class="font-bold" for="name">{{__('STP account')}}</label></div>
                    <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="03695">
                </div>

                <div class="w-5/12 w-full mr-2">
                    <div class="flex-1 text-left py-2"><label class="font-bold"
                                                              for="name">{{__('STP password')}}</label></div>
                    <input class="w-full text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="••••••••">
                </div>

                <div class="w-2/12 mt-2">
                    <div class="btn-top-holder mt-10 flow-root">
                        <a href="" class="cursor-pointer btn btn-dark float-right">
                            {{ __('Save') }}
                        </a>
                    </div>
                </div>

            </div>
            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Bank accounts')}}</label></div>
            <ul>
                <li value="001">- Cuenta BBVA 1256</li>
                <li value="002">- Cuenta BBVA 6987</li>
                <li value="002">- Cuenta Santander 4585</li>

            </ul>
            {{--            END Accounts-----------------------}}


            <h2 class="py-3">{{__('Tax data')}}</h2>

            <livewire:components.content.file-upload-pquina :name="'logo2'" :max-files="1" :file-type="'image/png, image/jpeg, image/gif'" :allow-multiple="'true'" :label="'Digital Seal Certificate'" :upload-route="'uploadFiles'"/>

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Digital private certificate key')}}</label></div>
            <livewire:components.content.file-upload-pquina :name="'logo3'" :max-files="1" :file-type="'image/png, image/jpeg, image/gif'" :allow-multiple="'true'" :label="''" :upload-route="'uploadFiles'"/>


            <div class="flex-1 text-left py-2"><label class="font-bold"
                                                      for="name">{{__('Password for digital seal certificate')}}</label>
            </div>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <div class="py-2"></div>

            <div><label class="font-bold my-2" for="name">{{__('Automatic moving average calculation')}}</label>
                <div>
                    <input type="radio" id="1" name="1" value="1" checked>
                    <label for="1">{{__('Yes')}}</label>
                </div>

                <div>
                    <input type="radio" id="2" name="2" value="2">
                    <label for="2">{{__('No')}}</label>
                </div>
            </div>
            <div>
                <label class="font-bold my-2" for="name">{{__('Automatic STP payment')}}</label>
                <div>
                    <input type="radio" id="3" name="3" value="3" checked>
                    <label for="3">{{__('Yes')}}</label>
                </div>

                <div>
                    <input type="radio" id="4" name="4" value="4">
                    <label for="4">{{__('No')}}</label>
                </div>
            </div>
            <div>
                <label class="font-bold my-2"
                       for="name">{{__('IMSS worker integrated IMSS employer to salary')}}</label>
                <div>
                    <input type="radio" id="5" name="5" value="5" checked>
                    <label for="5">{{__('Yes')}}</label>
                </div>

                <div>
                    <input type="radio" id="6" name="6" value="6">
                    <label for="6">{{__('No')}}</label>
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


