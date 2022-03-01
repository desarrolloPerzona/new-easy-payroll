<div class="card bg-white shadow-sm rounded p-4 pb-2 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

    <form class="form-group" wire:submit.prevent="update">

        <div class="form-group d-flex justify-content-between">
            <div class="w-75 mr-2">
                <label for="branch" class="font-bold">{{__('Business')}} <span
                        class="text-danger">*</span></label>
                <select id="branch" name="branch"
                        class="w-full rounded dark:bg-dark dark:text-white my-2 form-control"
                        wire:model.defer="branch_id">
                    @foreach($businesses as $business)
                        <option value="{{$business->id}}" }}>{{$business->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-100 ml-2">
                <label for="name" class="font-bold mb-2">{{__('Account name')}} <span
                        class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-main-input"
                       wire:model="name">
                @error('name') <small class="error text-danger">{{ $message }}</small> @enderror
            </div>

        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="w-50 mr-2">
                <label for="account_number" class="font-bold mb-2">{{__('Account number')}} <span
                        class="text-danger">*</span></label>
                <input type="number" id="account_number" name="account_number"
                       class="form-control form-main-input" wire:model.defer="account_number">
            </div>
            <div class="w-50 ms-2">
                <label for="institutional_key" class="font-bold">{{__('Bank')}} <span
                        class="text-danger">*</span></label>
                <select id="institutional_key" name="institutional_key"
                        class="w-full rounded dark:bg-dark dark:text-white my-2 form-control" wire:model.defer="institutional_key">
                    @foreach($banks as $bank)
                        <option value="{{$bank->institutional_key}}">{{$bank->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="w-100 mb-2">
                <label for="description" class="font-bold mb-2">{{__('Description')}} <span class="text-danger">*</span></label>
                <textarea type="text" id="description" name="description" class="form-control form-main-input"
                          rows="1" wire:model.defer="description">{{ $description }}</textarea>
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="w-1/3 pe-2">
                <label for="information_number" class="font-bold mb-2">{{__('Information number')}} <span
                        class="text-danger">*</span></label>
                <input id="information_number" name="information_number" class="w-100 form-control"
                       type="number" wire:model.defer="information_number">
            </div>
            <div class="w-1/3 px-2">
                <label for="branch_number" class="font-bold mb-2">{{__('Branch number')}} <span
                        class="text-danger">*</span></label>
                <input id="branch_number" name="branch_number" class="w-100 form-control" type="number"
                       wire:model.defer="branch_number">
            </div>
            <div class="w-1/3 ps-2">
                <label for="account_clabe" class="font-bold mb-2">{{__('CLABE account')}} <span
                        class="text-danger">*</span></label>
                <input id="account_clabe" name="account_clabe" class="w-100 form-control" type="number"
                       wire:model.defer="account_clabe">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-2">{{__('Send')}}</button>

    </form>

</div>

