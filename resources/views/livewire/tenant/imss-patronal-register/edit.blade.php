<div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">

    <form class="form-group"
          wire:submit.prevent="save"
          enctype="multipart/form-data">

        {{-- NAME AND BRANCH SECTION --}}
        <div class="form-group lg:flex-col md:flex-row">
            <div class="mb-2">
                <label for="name" class="font-bold form-label mb-2">{{__('Name')}} <span class="text-danger">*</span></label>
                <input type="text" id="name" class="form-control form-main-input" wire:model="name" placeholder="Alias">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-2">
                <label for="branch" class="font-bold form-label mb-2">{{__('Branch')}} <span class="text-danger">*</span></label>
                <select
                    id="branch"
                    name="branch"
                    wire:model.defer="branch_id"
                    class="w-full rounded dark:bg-dark dark:text-white  form-control">
                    <option value="">{{ __('Select a branch') }}</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
                @error('branch_id') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>
        {{-- RISK PREMIUM AND IMSS SUB-DELEGATION KEY --}}
        <div class="form-group lg:flex-col md:flex-row">
            <div class="mb-2">
                <label for="risk_premium" class="font-bold mb-2">{{__('Risk premium')}} <span
                        class="text-danger">*</span></label>
                <input type="number" step=".001" id="risk_premium" class="form-control form-main-input"
                       wire:model="risk_premium" placeholder="1.3">
                @error('risk_premium') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-2">
                <label for="imss_sub_delegation_key" class="font-bold mb-2">{{__('IMSS subdelegational key')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="imss_sub_delegation_key" class="form-control form-main-input"
                       wire:model="imss_sub_delegation_key" placeholder="8826398826">
                @error('imss_sub_delegation_key') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        {{--ACCORDION--}}
        <div class="mb-2 text-white shadow-sm dark:bg-dark rounded mt-4">
            <div class="accordion" id="certAccordion">
{{--                @if($branch_id)--}}
                    {{--IMSS--}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseImss" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="my-3 mx-2">
                                    <input type="radio" id="use_imss" name="use_cert" value="imss" wire:model.defer="use_cert">
                                </div>

                            </button>
                            <label for="use_imss" class="text-gray-800 dark:text-white">{{__('Send movements through IMSS certificate')}}</label>
                        </div>
                        <div id="collapseImss" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                             data-bs-parent="#certAccordion">
                            <div class="accordion-body text-dark dark:bg-dark dark:text-white">

                                <div class="flex flex-col flex-grow mb-3">

                                    <label class="my-2 font-bold">{{__('IMSS certificate')}}</label>
                                    <input
                                        class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white form-control"
                                        type="file"
                                        id="cert_imss_cert" name="cert_imss_cert"
                                        accept=".cer" wire:model.defer="cert_imss_cert">
                                </div>
                                @error('cert_imss_cert') <small class="error text-danger">{{ $message }}</small> @enderror
                                <div class="mb-3">
                                    <label class=" my-2 font-bold" for="name">{{__('IMSS certified user')}}</label>
                                    <input
                                        class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white form-control"
                                        type="text" id="cert_imss_user" name="cert_imss_user"
                                        wire:model.defer="cert_imss_user">
                                </div>
                                <div class="mb-3">
                                    <label class="my-2 font-bold" for="name">{{__('IMSS certified password')}}</label>
                                    <input
                                        class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white form-control"
                                        type="password" id="cert_imss_password"
                                        name="cert_imss_password" wire:model.defer="cert_imss_password">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--FIEL-------------------------------------}}

                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiel"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                <div class="my-3 mx-2">
                                    <input type="radio" id="use_fiel" name="use_cert" value="fiel" wire:model.defer="use_cert">
                                </div>

                            </button>
                            <label for="use_fiel"
                                   class="text-gray-800 dark:text-white">{{__('Send movements to the IMSS through FIEL')}}</label>
                        </div>

                        <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#certAccordion">
                            <div class="accordion-body text-dark dark:bg-dark dark:text-white">
                                @if($business_fiel)
                                    <small>{{__('The FIEL belonging to the company will be used')}}</small>
                                @else
                                    <a href="{{route('business.index')}}"
                                       class="btn btn-primary mb-3">{{__('Add FIEL')}}</a><br>
                                    <small>{{__('There is no FIEL certificate yet')}}</small>
                                @endif
                            </div>
                        </div>
                    </div>

{{--                @endif--}}

            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{__('Save')}}</button>
        <a href="{{ route('imss-employer-registers.index') }}" class="btn btn-danger mt-3 ms-2 text-white">{{__('Go back')}}</a>
    </form>

</div>

