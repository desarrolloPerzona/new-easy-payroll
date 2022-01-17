<div>
    <div class="card bg-white shadow-sm rounded p-4 my-2 mx-auto dark:bg-dark dark:text-white">
        <table class="table table-striped">
            <tr>
                <th style="width:20%">{{__('Name')}}</th>
                <th style="width:20%">{{__('risk premium')}}</th>
                <th style="width:20%">{{__('subdelegational key')}}</th>
                <th style="width:20%">{{__('Business')}}</th>
                <th style="width:20%"></th>
            </tr>
        </table>
        <div class="accordion" id="accordion">
            @foreach($registers as $register)
                <div class="accordion-item">
                    <div class="accordion-header bg-blueSteel " id="heading-{{$register->id}}">
                        <table class="table">
                            <tr>
                                <td style="width:20%; color:white">{{ __($register->name) }}</td>
                                <td style="width:20%; color:white">{{$register->risk_premium}}</td>
                                <td style="width:20%; color:white">{{$register->imss_sub_delegation_key}}</td>
                                <td style="width:20%; color:white">{{$register->branch->name}}</td>
                                <td style="width:20%; color:white">
                                    <div class="mx-2 inline-block">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$register->id}}" aria-expanded="false" aria-controls="collapseCDMX">
                                            <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                        </button>
                                    </div>
                                    <div class="mx-2 inline-block">
                                        <a href="{{route('imss-employer-registers.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                    </div>
                                    <div class="mx-2 inline-block">
                                        <i class="fas fa-trash-alt text-gray-400"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="collapse-{{$register->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
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
</div>
