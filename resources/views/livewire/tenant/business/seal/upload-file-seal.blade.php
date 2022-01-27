<div>
    <h2 class="my-2">{{__('Sello Digital')}}</h2>
    <div class="accordion mb-4" id="stampAccordion">
        <div class="accordion-item">
            <div class="accordion-header bg-secondary " id="stampHeading">
                <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseStamp" aria-expanded="false" aria-controls="collapseStamp">
                    <i class="fas fa-plus-circle text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Add digital seal data')}}
                </button>
            </div>
            <div id="collapseStamp" class="accordion-collapse collapse" aria-labelledby="stampHeading" data-bs-parent="#stampAccordion">
                <div class="p-2">

                    <livewire:components.content.file-upload-pquina
                        :name="'cer2'"
                        :max-files="1"
                        :max-size="'1MB'"
                        :file-type="'application/cer'"
                        :allow-multiple="'false'"
                        :accept-files="'.cer'"
                        :attributes="''"
                        :label="'Certificado (.cer):'"
                        :upload-route="'uploadFiles'"
                        :icon:="'fad fa-search'"
                    />
                    <livewire:components.content.file-upload-pquina :name="'key2'"
                                                                    :max-files="1"
                                                                    :max-size="'1MB'"
                                                                    :file-type="'application/cer'"
                                                                    :allow-multiple="'false'"
                                                                    :accept-files="'.cer'"
                                                                    :attributes="''"
                                                                    :label="'Clave privada (.key):'"
                                                                    :upload-route="'uploadFiles'"
                                                                    :icon:="'fad fa-search'"
                    />
                    <div class="text-left py-1"><label class="font-bold" for="name">{{__('Private Key Password:')}}</label></div>
                    <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                           name="Name" placeholder="Contraseña">

                    <div class="w-2/12">
                        <div class="btn-top-holder mt-4 flow-root">
                            <a class="cursor-pointer btn btn-dark float-right">
                                {{ __('Save') }}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
