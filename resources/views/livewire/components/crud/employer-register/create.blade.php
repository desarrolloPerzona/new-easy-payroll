<div>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fak fa-empresa-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __($title) }}</span>
        </h2>


        <!--
          This example requires Tailwind CSS v2.0+

          This example requires some changes to your config:

          ```
          // tailwind.config.js
          module.exports = {
            // ...
            plugins: [
              // ...
              require('@tailwindcss/forms'),
            ],
          }
          ```
        -->

        {{--        <div class="mt-10 mb-5 sm:mt-0">--}}
        {{--            <div class="md:grid md:grid-cols-3 md:gap-6">--}}
        {{--                <div class="md:col-span-1">--}}
        {{--                    <div class="px-4 sm:px-0">--}}
        {{--                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('Employer register') }}</h3>--}}
        {{--                        <p class="mt-1 text-sm text-gray-600">--}}
        {{--                            {{ __('Crea un registro patronal para tu empresa') }}--}}
        {{--                        </p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="md:mt-0 md:col-span-2">--}}
        {{--                    <form action="#" method="POST">--}}
        {{--                        <div class="shadow overflow-hidden sm:rounded-md">--}}
        {{--                            <div class="px-4 py-5 bg-white sm:p-6">--}}
        {{--                                <div class="grid grid-cols-6 gap-6">--}}
        {{--                                    <div class="col-span-6 sm:col-span-3">--}}
        {{--                                        <label for="country" class="block text-sm font-medium text-gray-700">{{__('Business')}}</label>--}}
        {{--                                        <select id="business" name="business" autocomplete="business" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
        {{--                                            <option>Perzona</option>--}}
        {{--                                            <option>Another</option>--}}
        {{--                                        </select>--}}
        {{--                                    </div>--}}

        {{--                                    <div class="col-span-6 sm:col-span-3">--}}
        {{--                                        <label for="last-name" class="block text-sm font-medium text-gray-700">{{__('Name')}}</label>--}}
        {{--                                        <input type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="col-span-6 sm:col-span-4">--}}
        {{--                                        <label for="email-address" class="block text-sm font-medium text-gray-700">{{__('Risk premium')}}</label>--}}
        {{--                                        <input type="text" name="risk_premium" id="risk_premium" autocomplete="risk_premium" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="col-span-6">--}}
        {{--                                        <label for="street-address" class="block text-sm font-medium text-gray-700">{{__('IMSS subdelegational key')}}</label>--}}
        {{--                                        <input type="text" name="imss_sub_delegation_key" id="imss_sub_delegation_key" autocomplete="imss_sub_delegation_key" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
        {{--                                    </div>--}}

        {{--                                </div>--}}

        {{--                                <fieldset>--}}
        {{--                                    <div class="mt-4 space-y-4">--}}
        {{--                                        <div class="flex items-start mb-3">--}}
        {{--                                            <div class="flex items-center h-5">--}}
        {{--                                                <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">--}}
        {{--                                            </div>--}}
        {{--                                            <div class="ml-3 text-sm">--}}
        {{--                                                <label for="comments" class="font-medium text-gray-700">{{__('Send movements to the IMSS through FIEL')}}</label>--}}
        {{--                                                <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="flex items-start">--}}
        {{--                                            <div class="flex items-center h-5">--}}
        {{--                                                <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">--}}
        {{--                                            </div>--}}
        {{--                                            <div class="ml-3 text-sm">--}}
        {{--                                                <label for="candidates" class="font-medium text-gray-700">{{__('Send movements through IMSS certificate')}}</label>--}}
        {{--                                                <p class="text-gray-500">Get notified when a candidate applies for a job.</p>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}

        {{--                                    </div>--}}
        {{--                                </fieldset>--}}


        {{--                            </div>--}}
        {{--                            <div class="btn-top-holder my-3">--}}
        {{--                                <a href="javascript: history.go(-1)" class="btn btn-dark float-right mb-3 mr-3">--}}
        {{--                                    {{ __('Save') }}--}}
        {{--                                </a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        Nombre--------------}}
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

            <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white my-2">
                    <option value="001">Perzona</option>
                    <option value="001">DSSD</option>
                </select>
            </label>

            <form action="{{ route('imss-employer-registers.store') }}" method="POST">
                @csrf

                <label class="font-bold" for="name">{{__('Name')}}</label>
                <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white w-100" type="text" id="name" name="name" value="{{ old('name') }}">
                {{--            Prima de riesgo--------------}}
                <label class="font-bold " for="name">{{__('Risk premium')}}</label>
                <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white w-100" type="text" id="risk_premium" name="risk_premium" value="{{ old('risk_premium') }}">
                {{--            Clave subdelegacional IMSS--------------}}
                <label class="font-bold" for="name">{{__('IMSS subdelegational key')}}</label>
                <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white w-100" type="text" id="imss_sub_delegation_key" name="imss_sub_delegation_key" value="{{ old('imss_sub_delegation_key') }}">

                {{--            ACCORDION--}}
                <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                    <div class="accordion" id="newItem">

                        {{--                    IMSS--------------}}
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

                                    {{--                                            FIEL-------------------------------------}}
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
                {{--            ACCORDION--}}

                <div class="btn-top-holder my-3">
                    <button type="submit" class="btn btn-dark">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>






        </div>


    </div>
</div>
