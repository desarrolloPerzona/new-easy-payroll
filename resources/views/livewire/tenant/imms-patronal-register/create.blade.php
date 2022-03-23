<div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">

    <form class="form-group" wire:submit.prevent="save">

        <div class="form-group d-flex justify-content-between gap-3">
            <div class="w-75">
                <label for="branch" class="font-bold">{{__('Business')}} <span class="text-danger">*</span></label>
                <select id="branch" name="branch"
                        class="w-full rounded dark:bg-dark dark:text-white my-2 form-control"
                        wire:model.defer="branch_id">
                    <option value="">{{ __('Select') }}</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
                @error('branch_id') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Name')}} <span class="text-danger">*</span></label>
                <input type="text" id="name" class="form-control form-main-input" wire:model.defer="name">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>
        <div class="form-group d-flex justify-content-between gap-3">
            <div class="w-50">
                <label for="risk_premium" class="font-bold mb-2">{{__('Risk premium')}} <span
                        class="text-danger">*</span></label>
                <input type="number" step=".001" id="risk_premium" class="form-control form-main-input"
                       wire:model.defer="risk_premium">
                @error('risk_premium') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100">
                <label for="imss_sub_delegation_key" class="font-bold mb-2">{{__('IMSS subdelegational key')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="imss_sub_delegation_key" class="form-control form-main-input"
                       wire:model.defer="imss_sub_delegation_key">
                @error('imss_sub_delegation_key') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        {{--            ACCORDION--}}
        <div class="mb-2 text-white shadow-sm dark:bg-dark rounded mt-4">
            <div class="accordion" id="newItem">

                {{--                    IMSS--------------}}
                <div class="accordion-item">
                    <div class="accordion-header mr-4" id="headingOne">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">

                            <div class="my-3 mx-2">
                                <input type="radio" id="use_imss" name="use_imss" value="1">
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
                                <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white"
                                       type="text"
                                       id="cert_imss_cert" name="cert_imss_cert">
                            </div>
                            <div>
                                <label class="font-bold" for="name">{{__('IMSS certified user')}}</label>
                                <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                       type="text" id="cert_imss_user" name="cert_imss_user">
                            </div>
                            <div>
                                <label class="font-bold" for="name">{{__('IMSS certified password')}}</label>
                                <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white"
                                       type="password" id="cert_imss_password"
                                       name="cert_imss_password">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header mr-4" id="headingFiel">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiel"
                                aria-expanded="false" aria-controls="collapseTwo">

                            <div class="my-3 mx-2">
                                <input type="radio" id="use_fiel" name="use_imss" value="0">
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
                                <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white"
                                       type="text"
                                       id="IMSScertificate">
                            </div>

                            <div class="flex flex-col flex-grow mb-3">

                                <label class="my-2 font-bold">{{__('Llave privada FIEL')}}</label>
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

        <button type="submit" class="btn btn-primary mt-3">{{__('Save')}}</button>
        <a href="{{ route('imss-employer-registers.index') }}"
           class="btn btn-danger mt-3 ms-2 text-white">{{__('Go back')}}</a>

    </form>

</div>

