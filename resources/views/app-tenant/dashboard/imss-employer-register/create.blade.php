<x-app-tenant>
    <div class="container mx-auto">
        <x-utilities.header-section title="IMSS Employer Registers" classes="mb-3" maxSize=""/>
       {{-- <x-forms.error-validation-message classes=""/>--}}
        <div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">

            <form class="form-group" action="{{route('imss-employer-registers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group d-flex justify-content-between gap-3">
                    <div class="w-75">
                        <label for="branch" class="font-bold">{{__('Business')}} <span class="text-danger">*</span></label>
                        <select id="branch" name="branch_id" class="w-full rounded dark:bg-dark dark:text-white my-2 form-control">
                            <option value="">{{ __('Select') }}</option>
                            @foreach($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @endforeach
                        </select>
                        <x-forms.error-validation-line-mesage :field="'branch_id'"/>
                    </div>
                    <div class="w-100">
                        <label for="name" class="font-bold mb-2">{{__('Name')}} <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control form-main-input" placeholder="Alias" value="{{old('name')}}">
                        <x-forms.error-validation-line-mesage :field="'name'"/>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-between gap-3">
                    <div class="w-50">
                        <label for="risk_premium" class="font-bold mb-2">{{__('Risk premium')}} <span class="text-danger">*</span></label>
                        <input type="number" step=".001" id="risk_premium" name="risk_premium" class="form-control form-main-input" placeholder="1.3"  value="{{old('risk_premium')}}">
                        <x-forms.error-validation-line-mesage :field="'risk_premium'"/>
                    </div>
                    <div class="w-100">
                        <label for="imss_sub_delegation_key" class="font-bold mb-2">{{__('IMSS subdelegational key')}} <span class="text-danger">*</span></label>
                        <input type="text" id="imss_sub_delegation_key2" name="imss_sub_delegation_key2" class="form-control" placeholder="8826398826" value="{{old('imss_sub_delegation_key')}}">
                        <x-forms.error-validation-line-mesage :field="'imss_sub_delegation_key'"/>
                    </div>
                </div>

                {{--ACCORDION--}}
                <div class="mb-2 text-white shadow-sm dark:bg-dark rounded mt-4">
                    <div class="accordion" id="newItem">

                        {{--IMSS--}}
                        <div class="accordion-item">
                            <div class="accordion-header mr-4" id="headingOne">
                                <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="my-3 mx-2">
                                        <input type="radio" id="use_imss" name="use_imss" value="1" checked>
                                    </div>
                                </button>
                                <label for="use_imss" class="text-gray-800 dark:text-white">{{__('Send movements through IMSS certificate')}}</label>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#newItem">
                                <div class="accordion-body text-dark dark:bg-dark dark:text-white">

                                    <div class="flex flex-col flex-grow mb-3">

                                        <label class="my-2 font-bold">{{__('IMSS certificate')}}</label>
                                        <input class="w-full text-gray-800 my-2 rounded flex-2 dark:bg-dark dark:text-white form-control"
                                               type="file"
                                               id="cert_imss_cert" name="cert_imss_cert">
                                    </div>
                                    <div class="mb-3">
                                        <label class=" my-2 font-bold" for="name">{{__('IMSS certified user')}}</label>
                                        <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white form-control" type="text" id="cert_imss_user" name="cert_imss_user">
                                    </div>
                                    <div class="mb-3">
                                        <label class="my-2 font-bold" for="name">{{__('IMSS certified password')}}</label>
                                        <input class="text-gray-800 rounded my-2 w-full dark:bg-dark dark:text-white form-control" type="password" id="cert_imss_password" name="cert_imss_password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--FIEL-------------------------------------}}
                        <div class="accordion-item">
                            <div class="accordion-header mr-4" id="headingFiel">
                                <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiel" aria-expanded="false" aria-controls="collapseTwo">

                                    <div class="my-3 mx-2">
                                        <input type="radio" id="use_fiel" name="use_imss" value="0">
                                    </div>
                                </button>
                                <label for="use_fiel" class="text-gray-800 dark:text-white">{{__('Send movements to the IMSS through FIEL')}}</label>
                            </div>
                            <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#newItem">
                                <div class="accordion-body text-dark dark:bg-dark dark:text-white">
                                    <a href="{{route('business.index')}}" class="btn btn-primary mb-3">{{__('Add FIEL')}}</a><br>
                                    <small>{{__('There is no FIEL certificate yet')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{__('Save')}}</button>
                <a href="{{ route('imss-employer-registers.index') }}"  class="btn btn-danger mt-3 ms-2 text-white">{{__('Go back')}}</a>
            </form>

        </div>



    </div>
</x-app-tenant>
