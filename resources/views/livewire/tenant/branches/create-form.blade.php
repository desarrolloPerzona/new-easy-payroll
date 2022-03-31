<div class="card bg-white shadow-sm rounded p-4 pb-2 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

    <form class="form-group" wire:submit.prevent="store">

        <div class="mb-4 p-2 rounded bg-gray-200">
            <h5 class="m-0"><b>{{__('General')}}</b></h5>
        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-75 mr-2">
                <label for="business" class="font-bold">{{__('Business')}}<span
                        class="text-danger">*</span></label>
                <select id="business" disabled
                        class="w-full rounded dark:bg-dark dark:text-white my-2 form-control"
                        wire:model.defer="business_id">
                    <option value="">{{ $business->name }}</option>
                </select>
                @error('business') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100 ml-2">
                <label for="name" class="font-bold mb-2">{{__('Name')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-main-input" wire:model="name">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="w-100 mr-2">
                <label for="account_number" class="font-bold mb-2">{{__('Description')}} <span
                        class="text-danger">*</span></label>
                <textarea name="" id="" rows="2" class="w-100 form-control form-main-input" wire:model="description"></textarea>
                @error('account_number') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="mt-4 mb-4 p-2 rounded bg-gray-200">
            <h5 class="m-0"><b>{{__('Address')}}</b></h5>
        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-100 mr-2">
                <label for="account_number" class="font-bold mb-2">{{__('Street')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="account_number" name="account_number"
                       class="form-control form-main-input" wire:model="street">
                @error('account_number') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group d-flex gap-3">
            <div class="w-50">
                <label for="information_number" class="font-bold mb-2">{{__('ZIP code')}} <span
                        class="text-danger">*</span></label>
                <input id="information_number" name="information_number" class="w-100 form-control"
                       type="number" wire:model="zip_code">
                @error('information_number') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-100">
                <label for="borough" class="font-bold mb-2">{{__('City')}} <span
                        class="text-danger">*</span></label>
                <input id="borough" name="branch_number" class="w-100 form-control" type="text"
                       wire:model="borough">
                @error('branch_number') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="w-50 mr-2">
                <label for="account_number" class="font-bold mb-2">{{__('Municipality')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="account_number" name="account_number"
                       class="form-control form-main-input" wire:model="municipality">
                @error('account_number') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="w-50 ms-2">
                <label for="institutional_key" class="font-bold mb-2">{{__('State')}} <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control form-main-input" wire:model="state">
                @error('state') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{__('Save')}}</button>
        <a href="{{ route('banks.index') }}" class="btn btn-danger mt-3 ms-2 text-white">{{__('Go back')}}</a>

    </form>

</div>
