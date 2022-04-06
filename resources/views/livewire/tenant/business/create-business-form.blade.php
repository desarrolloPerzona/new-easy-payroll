<div class="card bg-white shadow-sm rounded p-4 pb-2 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

    <form class="form-group" wire:submit.prevent="store">

        <div class="mb-4 p-2 rounded bg-gray-200">
            <h5 class="m-0"><b>{{__('General')}}</b></h5>
        </div>

        <div class="form-group d-flex gap-3 justify-content-between">
            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Name')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-main-input" wire:model="name">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-75">
                <label for="name" class="font-bold mb-2">{{__('RFC')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-main-input" wire:model="rfc">
                @error('rfc') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>

        <div class="form-group d-flex gap-3 justify-content-between">

            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Business name')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-main-input" wire:model="business_name">
                @error('business_name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>

        <div class="form-group d-flex justify-content-between gap-3">

            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Logo')}}</label>
                <input type="file" id="name" name="name" class="form-control form-main-input">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Industry')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-main-input" wire:model="industry">
                @error('industry') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>

        <div class="mt-4 mb-4 p-2 rounded bg-gray-200">
            <h5 class="m-0"><b>{{__('Address')}}</b></h5>
        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-100 mr-2">
                <label for="street" class="font-bold mb-2">{{__('Street')}}</label>
                <input type="text" id="street" name="account_number"
                       class="form-control form-main-input" wire:model="street">
                @error('street') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group d-flex gap-3">
            <div class="w-100">
                <label for="borough" class="font-bold mb-2">{{__('Borough')}}</label>
                <input id="borough" class="w-100 form-control" type="text"
                       wire:model="borough">
                @error('borough') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-50">
                <label for="zip_code" class="font-bold mb-2">{{__('ZIP code')}}</label>
                <input id="zip_code" name="information_number" class="w-100 form-control"
                       type="number" wire:model="zip_code">
                @error('zip_code') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-50 mr-2">
                <label for="municipality" class="font-bold mb-2">{{__('Municipality')}}</label>
                <input type="text" id="municipality" name="account_number"
                       class="form-control form-main-input" wire:model="municipality">
                @error('municipality') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-50 ms-2">
                <label for="street" class="font-bold mb-2">{{__('State')}}</label>
                <input type="text" id="street" class="form-control form-main-input" wire:model="state">
                @error('state') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="mt-4 mb-4 p-2 rounded bg-gray-200">
            <h5 class="m-0"><b>{{__('Fiscal data')}}</b></h5>
        </div>

        <div class=" mt-4 mb-4 p-2 rounded bg-gray-100 text-center">
            <h5 class="m-0"><b>{{__('FIEL')}}</b></h5>
        </div>

        <div class="form-group d-flex justify-content-between gap-3">

            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Certificate')}}</label>
                <input type="file" id="name" name="name" class="form-control form-main-input">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Key')}}</label>
                <input type="file" id="name" name="name" class="form-control form-main-input">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-100 mr-2">
                <label for="municipality" class="font-bold mb-2">{{__('Password')}}</label>
                <input type="text" id="municipality" name="account_number"
                       class="form-control form-main-input">
                @error('municipality') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="mt-4 mb-4 p-2 rounded bg-gray-100 text-center">
            <h5 class="m-0"><b>{{__('Digital seal')}}</b></h5>
        </div>

        <div class="form-group d-flex justify-content-between gap-3">

            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Certificate')}}</label>
                <input type="file" id="name" name="name" class="form-control form-main-input">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100">
                <label for="name" class="font-bold mb-2">{{__('Key')}}</label>
                <input type="file" id="name" name="name" class="form-control form-main-input">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-100 mr-2">
                <label for="municipality" class="font-bold mb-2">{{__('Password')}}</label>
                <input type="text" id="municipality" name="account_number"
                       class="form-control form-main-input">
                @error('municipality') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

{{--        STP ACCOUNT--}}

{{--        <div class="mt-4 mb-4 p-2 rounded bg-gray-200">--}}
{{--            <h5 class="m-0"><b>{{__('Bank accounts')}}</b></h5>--}}
{{--        </div>--}}

{{--        <div class="form-group d-flex justify-content-between">--}}
{{--            <div class="w-100 mr-2 border-gray-600 bg-gray-100 rounded p-4 text-center">--}}
{{--                <p class="p-0 m-0">Si deseas que tu nómina se disperse de forma automática, necesitas una cuenta STP</p>--}}
{{--                <button class="btn btn-primary mt-3">{{__('Request')}}</button>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="mt-5">
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            <a href="{{ route('business.index') }}" class="btn btn-danger ms-2 text-white">{{__('Go back')}}</a>
        </div>

    </form>

</div>
