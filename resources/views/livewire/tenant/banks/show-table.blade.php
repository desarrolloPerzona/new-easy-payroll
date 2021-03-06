<div>

    <x-forms.alert-message classes="mt-3"/>

    <div class="flex max-w-6xl mx-auto">

        {{--Header--}}
        <x-utilities.create-button classes="" route="banks.create" title="New bank account"/>

        <div class="flex-1 my-3 text-right">
            <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
            <label>
                <select class="w-full rounded dark:bg-dark dark:text-white form-control" wire:model="message">
                    <option value="">{{__('All')}}</option>
                    @foreach($businesses as $business)
                        <option value="{{ $business->id }}">{{ $business->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
    </div>

    <div class="card bg-white shadow-sm rounded p-4 max-w-6xl  mx-auto dark:bg-dark dark:text-white">

        @if(count($bankAccounts) < 1)
            <div class="col-12 text-center py-3">
                <b>{{__('No records')}}</b>
            </div>
        @else
            @foreach($bankAccounts as $account)
                <table class="table table-white">
                    <thead>
                    <tr class="colspan-2">
                        <div class="d-flex justify-between">
                            <h2 class="mb-3">Cuenta: {{ $account->name }}
                                <a href="{{route('banks.edit', $account->id)}}"
                                   class="text-gray-400 hover:text-gray-700 ms-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </h2>
                            <div>
                                <a href="#" wire:click="$emit('deleteMessage', {{$account->id}})">
                                    <i class="fas fa-trash-alt text-gray-400 cursor-pointer hover:text-red-500"></i>
                                </a>
                            </div>
                        </div>

                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td class="p-0 pb-1 col-6">Empresa:</td>
                        <td class="p-0 pb-1 col-6">{{ $account->business->name }}</td>
                    </tr>
                    <tr>
                        <td class="p-0 pb-1 col-6">N??mero de cuenta:</td>
                        <td class="p-0 pb-1 col-6">{{ $account->account_number }}</td>
                    </tr>
                    <tr>
                        <td class="p-0 pb-1 col-6">Descripci??n:</td>
                        <td class="p-0 pb-1 col-6">{{ $account->description }}</td>
                    </tr>
                    <tr>
                        <td class="p-0 pb-1 col-6">Banco:</td>
                        @foreach($banksList as $bank)
                            @if($bank->institutional_key == $account->institutional_key)
                                <td class="p-0 pb-1 col-6">{{ $bank->name }}</td>
                            @endif
                        @endforeach

                    </tr>
                    <tr>
                        <td class="p-0 pb-1 col-6">N??mero de informaci??n:</td>
                        <td class="p-0 pb-1 col-6">{{ $account->information_number }}</td>
                    </tr>
                    <tr>
                        <td class="p-0 pb-1 col-6">N??mero de sucursal:</td>
                        <td class="p-0 pb-1 col-6">{{ $account->branch_number }}</td>
                    </tr>
                    <tr>
                        <td class="p-0 pb-1 col-6">Cuenta CLABE:</td>
                        <td class="p-0 pb-1 col-6">{{ $account->account_clabe }}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
            @endforeach
        @endif

    </div>

</div>
