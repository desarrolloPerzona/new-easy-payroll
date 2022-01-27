<div>
    <h2 class="my-2">{{__('FIEL')}}</h2>
    <div class="accordion mb-4" id="fielAccordion">
        <div class="accordion-item">
            <div class="accordion-header bg-secondary " id="headingFiel">
                <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseFiel" aria-expanded="false" aria-controls="collapseFiel">
                    <i class="fas fa-plus-circle text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Add FIEL data')}}
                </button>
            </div>
            <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingFiel" data-bs-parent="#fielAccordion">
                <form class="p-2">

                    <livewire:components.content.file-upload-pquina :name="'cer'"
                                                                    :max-files="1"
                                                                    :max-size="'1MB'"
                                                                    :file-type="'application/cer'"
                                                                    :allow-multiple="'false'"
                                                                    :accept-files="'.cer'"
                                                                    :attributes="''"
                                                                    :label="'Certificado (.cer):'"
                                                                    :upload-route="'uploadFiles'"
                                                                    :icon="'fad fa-search'"
                    />
                    <livewire:components.content.file-upload-pquina :name="'key'"
                                                                    :max-files="1"
                                                                    :max-size="'1MB'"
                                                                    :file-type="'application/cer'"
                                                                    :allow-multiple="'false'"
                                                                    :accept-files="'.key'"
                                                                    :attributes="''"
                                                                    :label="'Clave privada (.key):'"
                                                                    :upload-route="'uploadFiles'"
                                                                    :icon="'fad fa-search'"
                    />
                    <div class="text-left py-1">
                        <label class="font-bold" for="sat_fiel_password">{{__('Private Key Password:')}}</label>
                        <input class="w-full text-gray-800 rounded mt-2 dark:bg-dark dark:text-white" type="text" id="sat_fiel_password"
                               name="sat_fiel_password" placeholder="{{__('Password')}}">
                    </div>

                    <div class="w-2/12">
                        <div class="btn-top-holder mt-4 flow-root">
                            <button type="submit" class="cursor-pointer btn btn-dark float-right">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
