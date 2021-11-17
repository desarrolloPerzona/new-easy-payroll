<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit employer register') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <lavel class="font-bold" for="name">Nombre</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name"
                   placeholder="Registro patronal CDMX">

            <lavel class="font-bold" for="name">Prima de riesgo</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="3">

            <lavel class="font-bold" for="name">Clave subdelegfacional IMSS</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="123658">


          {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                <div class="my-3">
                                    <input type="radio" id="huey" name="drone" value="huey"
                                           checked>
                                    <label class="text-gray-800">Enviar movimientos al IMSS mediante certificado
                                        IMSS</label>
                                </div>

                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark">

                                {{--            IMSS-------------------------------------}}
                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">Certificado IMSS</label>

                                    <div x-data="{ files: null }" id="FileUpload"
                                         class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
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
                                    <input class="w-full text-gray-800 my-2 rounded flex-2" type="text"
                                           id="IMSScertificate"
                                           placeholder="IMSS123658.cer">
                                </div>
                                <div>
                                    <lavel class="font-bold" for="name">Usuario certificado IMSS</lavel>
                                    <input class="text-gray-800 rounded my-2 w-full" type="text" id="name" name="Name"
                                           placeholder="IMSS23695">
                                </div>
                                <div>
                                    <lavel  class="font-bold"for="name">Usuario certificado IMSS</lavel>
                                    <input class="text-gray-800 rounded my-2 w-full" type="password" id="name" name="Name"
                                           placeholder="••••••••••">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFiel">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiel"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                <div class="my-3">
                                    <input type="radio" id="huey" name="drone" value="huey">
                                    <label class="text-gray-800" for="huey">Enviar movimientos al IMSS mediante FIEL</label>
                                </div>

                            </button>
                        </div>
                        <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark">

                                {{--            FIEL-------------------------------------}}
                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">Certificado FIEL</label>

                                    <div x-data="{ files: null }" id="FileUpload"
                                         class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
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
                                    <input class="w-full text-gray-800 my-2 rounded flex-2" type="text"
                                           id="IMSScertificate"
                                           placeholder="FIEL123658.cer">
                                </div>

                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">Llave privada FIEL</label>

                                    <div x-data="{ files: null }" id="FileUpload"
                                         class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
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
                                    <input class="w-full text-gray-800 my-2 rounded flex-2" type="text"
                                           id="IMSScertificate"
                                           placeholder="FIEL123658.key">
                                </div>
                                <div>
                                    <lavel class="font-bold" for="name">Usuario certificado IMSS</lavel>
                                    <input class="text-gray-800 rounded my-2 w-full" type="text" id="name" name="Name"
                                           placeholder="IMSS23695">
                                </div>
                                <div>
                                    <lavel class="font-bold" for="name">Contraseña FIEL</lavel>
                                    <input class="text-gray-800 rounded my-2 w-full" type="password" id="name" name="Name"
                                           placeholder="••••••••••">
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
