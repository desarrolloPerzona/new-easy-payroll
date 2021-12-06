<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create employer register') }}</span>
        </h2>
        {{--Nombre--------------}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white my-2">
                    <option value="001">Perzona</option>
                    <option value="001">DSSD</option>
                </select>
            </label>

            <label class="font-bold" for="name">{{__('Name')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">
            {{--Prima de riesgo--------------}}
            <label class="font-bold" for="name">{{__('Risk premium')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">
            {{--Clave subdelegacional IMSS--------------}}
            <label class="font-bold" for="name">{{__('IMSS subdelegational key')}}</label>
            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name">


            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--IMSS--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                <div class="my-3">
                                    <input type="radio" id="id" name="drone" value="id">
                                </div>

                            </button>
                            <label
                                class="text-gray-800 dark:text-white">{{__('Send movements through IMSS certificate')}}</label>

                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark dark:bg-dark dark:text-white">

                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">{{__('IMSS certificate')}}</label>

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

                                    </div>
                                    <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white"
                                           type="text"
                                           id="IMSScertificate">
                                </div>
                                <div>
                                    <label class="font-bold" for="name">{{__('IMSS certified user')}}</label>
                                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                           type="text" id="name" name="Name">
                                </div>
                                <div>
                                    <label class="font-bold" for="name">{{__('IMSS certified password')}}</label>
                                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                           type="password" id="name"
                                           name="Name">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiel"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                <div class="my-3">
                                    <input type="radio" id="id" name="drone" value="id">
                                </div>

                            </button>
                            <label class="text-gray-800 dark:text-white"
                                   for="id">{{__('Send movements to the IMSS through FIEL')}}</label>

                        </div>
                        <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark dark:bg-dark dark:text-white">

                                {{--            FIEL-------------------------------------}}
                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">{{__('FIEL Certificate')}}</label>

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

                                    </div>
                                    <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white"
                                           type="text"
                                           id="IMSScertificate">
                                </div>

                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">{{__('Llave privada FIEL')}}</label>

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

                                    </div>
                                    <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white"
                                           type="text"
                                           id="IMSScertificate">
                                </div>
                                <div>
                                    <label class="font-bold" for="name">{{__('IMSS certified user')}}</label>
                                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                           type="text" id="name" name="Name">
                                </div>
                                <div>
                                    <label class="font-bold" for="name">{{__('FIEL password')}}</label>
                                    <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                           type="password" id="name"
                                           name="Name">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--ACCORDION--}}

            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>


</x-app-tenant>
