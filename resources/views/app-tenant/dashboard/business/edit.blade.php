<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'Business'" :children="['Edit']" item-id="{{'/'.$business->id}}" :icon="'fak fa-empresa-perzona mr-2'"/>


        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <h2 class="py-3">{{__('Business')}}: <span class="uppercase font-bold">{{$business->name}}</span> </h2>

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Name')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   value="{{$business->name}}">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Logo')}}</label></div>
            <hr>

            <div class="flex-1 text-lef py-2"><label class="font-bold" for="name">{{__('Industry')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="RRHH">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Fiscal regime')}}</label></div>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="001">Perona Fisica</option>
                    <option value="002">Persona Moral</option>
                    <option value="002">Sin fines de lucro</option>

                </select>
            </label>
            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Business name')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="Perzona S.A de C.V.">


            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('RFC')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="PERZ02369856">


            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Adress')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="Bosques de Tamarindos. 135 piso 2, Col. Aguabrav">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('State')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="CDMX">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('ZIP Code')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="03695">

            <h2 class="py-3">{{__('Accounts')}}</h2>

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('STP account')}}</label></div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="03695">

            <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Bank accounts')}}</label></div>
            <ul>
                <li value="001">- Cuenta BBVA 1256</li>
                <li value="002">- Cuenta BBVA 6987</li>
                <li value="002">- Cuenta Santander 4585</li>

            </ul>

            <h2 class="py-3">{{__('Tax data')}}</h2>

            <div class="flex-1 text-left py-2"><label class="font-bold"
                                                      for="name">{{__('Digital Seal Certificate')}}</label></div>
            <div x-data="{ files: null }" id="FileUpload"
                 class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray dark:bg-dark dark:text-white">
                <input type="file" multiple
                       class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                       x-on:change="files = $event.target.files; console.log($event.target.files);"
                       x-on:dragover="$el.classList.add('active')"
                       x-on:dragleave="$el.classList.remove('active')"
                       x-on:drop="$el.classList.remove('active')"
                >
                <template x-if="files !== null">
                    <div class="flex flex-col space-y-1">
                        <template x-for="(_,index) in Array.from({ length: files.length })">
                            <div class="flex flex-row items-center space-x-2">
                                <template x-if="files[index].type.includes('audio/')"><i
                                        class="far fa-file-audio fa-fw"></i></template>
                                <template x-if="files[index].type.includes('application/')"><i
                                        class="far fa-file-alt fa-fw"></i></template>
                                <template x-if="files[index].type.includes('image/')"><i
                                        class="far fa-file-image fa-fw"></i></template>
                                <template x-if="files[index].type.includes('video/')"><i
                                        class="far fa-file-video fa-fw"></i></template>
                                <span class="font-medium text-gray-900"
                                      x-text="files[index].name">Uploading</span>
                                <span class="text-xs self-end text-gray-500"
                                      x-text="filesize(files[index].size)">...</span>
                            </div>
                        </template>
                    </div>
                </template>
                <template x-if="files === null">
                    <div class="flex flex-col space-y-2 items-center justify-center">
                        <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
                        <p class="text-gray-700">{{__('Drag your files here or click in this area.')}}</p>
                        <a href="javascript:void(0)"
                           class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium no-underline border border-transparent rounded-md outline-none bg-gray-600">
                            {{__('Select a file')}}</a>
                    </div>
                </template>

                <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white" type="text"
                       id="IMSScertificate"
                       placeholder="document.cer">
            </div>

            <div class="flex-1 text-left py-2"><label class="font-bold"
                                                      for="name">{{__('Digital private certificate key')}}</label></div>
            <div x-data="{ files: null }" id="FileUpload"
                 class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray dark:bg-dark dark:text-white">
                <input type="file" multiple
                       class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                       x-on:change="files = $event.target.files; console.log($event.target.files);"
                       x-on:dragover="$el.classList.add('active')"
                       x-on:dragleave="$el.classList.remove('active')"
                       x-on:drop="$el.classList.remove('active')"
                >
                <template x-if="files !== null">
                    <div class="flex flex-col space-y-1">
                        <template x-for="(_,index) in Array.from({ length: files.length })">
                            <div class="flex flex-row items-center space-x-2">
                                <template x-if="files[index].type.includes('audio/')"><i
                                        class="far fa-file-audio fa-fw"></i></template>
                                <template x-if="files[index].type.includes('application/')"><i
                                        class="far fa-file-alt fa-fw"></i></template>
                                <template x-if="files[index].type.includes('image/')"><i
                                        class="far fa-file-image fa-fw"></i></template>
                                <template x-if="files[index].type.includes('video/')"><i
                                        class="far fa-file-video fa-fw"></i></template>
                                <span class="font-medium text-gray-900"
                                      x-text="files[index].name">Uploading</span>
                                <span class="text-xs self-end text-gray-500"
                                      x-text="filesize(files[index].size)">...</span>
                            </div>
                        </template>
                    </div>
                </template>
                <template x-if="files === null">
                    <div class="flex flex-col space-y-2 items-center justify-center">
                        <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
                        <p class="text-gray-700">{{__('Drag your files here or click in this area.')}}</p>
                        <a href="javascript:void(0)"
                           class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium no-underline border border-transparent rounded-md outline-none bg-gray-600">
                            {{__('Select a file')}}</a>
                    </div>
                </template>

                <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white" type="text"
                       id="IMSScertificate"
                       placeholder="document.key">
            </div>


            <div class="flex-1 text-left py-2"><label class="font-bold"
                                                      for="name">{{__('Password for digital seal certificate')}}</label>
            </div>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name"
                   placeholder="••••••••••">

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


