<div>
    <div class="flex">
        <div class="btn-top-holder my-3 flex-1">
            <a href="{{route('imss-employer-registers.create')}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New employer register') }}
            </a>
        </div>
        <div class="flex-1 my-3 text-right">
            <div class="form-group ">
                <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
                <select class="w-full rounded dark:bg-dark dark:text-white">
                    <option value="0">{{__('Select one')}}</option>

                  @foreach($branches as $branch)
                        <option value="{{$branch->id}}">{{$branch->name}}</option>
                      @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
        <table class="table">
            {{--            <x-jet-input wire:model="search" class="flex-1 mr-3" type="text" placeholder="Escriba lo que quiera buscar"></x-jet-input>--}}
            <tr>
                <th>{{__('Name')}}</th>
                <th class="text-center">{{__('risk premium')}}</th>
                <th class="text-center">{{__('subdelegational key')}}</th>
                <th class="text-center">{{__('Business')}}</th>
                <th colspan="3"></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>

        </table>
        {{--            ACCORDION--}}
        <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
            <div class="accordion" id="newItem">

                {{--                    CDMX--------------}}
                @foreach($registers as $register)
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 30%">{{ __($register->name) }}</td>
                                <td style="width: 30%">{{__('3')}}</td>
                                <td style="width: 30%">{{__('123658')}}</td>
                                <td style="width: 30%">Perzona</td>
                                <td style="width: 1%" colspan="3"></td>
                                <td style="width: 3%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$register->id}}"
                                            aria-expanded="false" aria-controls="collapseCDMX">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 3%"><a href="{{route('imss-employer-register.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                                <td style="width: 3%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>
                        <div id="collapse{{$register->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Name')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">{{ $register->name }}</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('risk premium')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">3</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('subdelegational key')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">123658</label></div>
                                </div>

                                <p class="my-2 font-bold">Enviar movimientos al IMSS mediante certificado IMSS</p>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certificate')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS23695</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('IMSS certified user')}}</label></div>
                                    <div class="flrx-2 text-left w-1/2"><label class="my-2 font-bold">IMSS23695</label></div>
                                </div>

                                <div class="flex">
                                    <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Password')}}</label></div>
                                    <div class="flex-2 text-left w-1/2"><label class="my-2 font-bold">••••••••••</label></div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        {{--            ACCORDION--}}

    </div>
</div>
