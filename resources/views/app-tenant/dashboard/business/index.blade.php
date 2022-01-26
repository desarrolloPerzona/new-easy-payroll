<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'Business'" :children="[]" :item-id="''" :icon="'fak fa-empresa-perzona mr-2'"/>
        {{--NEW BUSINESS BTN--}}
        <div class="btn-top-holder my-3">
            <a href="{{route('business.create')}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New business') }}
            </a>
        </div>
        {{--BUSINESS HOLDER--}}
        <div class="card bg-white dark:bg-dark dark:text-white shadow-sm rounded p-4  my-2 mx-auto">
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                {{--ACCORDION--}}
                <div class="accordion" id="businessAccordion">
                    @foreach($businesses as $business)
                        {{ $business->name }}
                        {{--ACCORDION ITEM--}}
                        <div class="accordion-item">
                            {{--ACCORDION HEADER--}}
                            <div class="bg-blueSteel accordion-header" id="heading-{{$loop->iteration}}">
                                <livewire:components.content.accordion-header :model-id="$business->id" :created-at="$business->created_at" :route="'business.edit'" :iteration="$loop->iteration" :name="$business->name"/>
                            </div>
                            {{--ACCORDION COLAPSE--}}
                            <div id="collapse-{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#businessAccordion">
                                <div class="accordion-body mb-3 text-dark bg-gray-200 dark:bg-dark dark:text-white">
                                    {{--CONTENT--}}
                                    {{--CONTENT HEADER--}}
                                    <livewire:components.content.content-header :title="'Business'" :icon="'fas fa-building'"/>
                                    {{--CONTENT TWO COLUMNS TEXT IMAGES AND ARRAYS--}}
                                    <livewire:components.content.content-two-columns-text :title="'Name'" :field="$business->name ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-images :title="'Logo'" :images="$business->getMedia('business')"/>
                                    <livewire:components.content.content-two-columns-text :title="'Industry'" :field="$business->industry ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-text :title="'Fiscal Regime'" :field="$business->fiscal_regime ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-text :title="'Industry'" :field="$business->business_name ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-text :title="'RFC'" :field="$business->rfc ?? __('Fill data')"/>
                                    {{--FISCAL DATA--}}
                                    <livewire:components.content.content-header :title="'Fiscal Data'" :icon="'fad fa-tasks-alt'"/>

{{--                                    Fiel Accordion--}}
                                    <h2 class="my-2">{{__('FIEL')}}</h2>
                                    <div class="accordion mb-4" id="fielAccordion">
                                        <div class="accordion-item">
                                            <div class="accordion-header bg-secondary " id="headingFiel">
                                                <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseFiel" aria-expanded="false" aria-controls="collapseFiel">
                                                    <i class="fas fa-plus-circle text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Add FIEL data')}}
                                                </button>
                                            </div>
                                            <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingFiel" data-bs-parent="#fielAccordion">
                                                <div class="p-2">

                                                    <livewire:components.content.file-upload-pquina :name="'cer'" :max-files="1"
                                                                                                    :file-type="'application/cer'"
                                                                                                    :allow-multiple="'multiple'"
                                                                                                    :accept-files="'.cer'"
                                                                                                    :attributes="''"
                                                                                                    :label="'Certificado (.cer):'"
                                                                                                    :upload-route="'uploadFiles'"
                                                                                                    :icon:="'fad fa-search'"
                                                    />
                                                    <livewire:components.content.file-upload-pquina :name="'key'" :max-files="1"
                                                                                                    :file-type="'application/cer'"
                                                                                                    :allow-multiple="'multiple'"
                                                                                                    :accept-files="'.cer'"
                                                                                                    :attributes="''"
                                                                                                    :label="'Clave privada (.key):'"
                                                                                                    :upload-route="'uploadFiles'"
                                                                                                    :icon:="'fad fa-search'"
                                                    />
                                                    <div class="text-left py-1"><label class="font-bold" for="name">{{__('Private Key Password:')}}</label></div>
                                                    <input class="w-full text-gray-800 rounded mt-1 mb-4 dark:bg-dark dark:text-white" type="text" id="name"
                                                           name="Name" placeholder="Contraseña">

                                                    <div class="w-2/12">
                                                        <div class="btn-top-holder mt-4 flow-root">
                                                            <a class="cursor-pointer btn btn-dark float-right">
                                                                {{ __('Save') }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

{{--                                    Sello digital Accordion--}}
                                    <h2 class="my-2">{{__('Sello Digital')}}</h2>
                                    <div class="accordion mb-4" id="stampAccordion">
                                        <div class="accordion-item">
                                            <div class="accordion-header bg-secondary " id="stampHeading">
                                                <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseStamp" aria-expanded="false" aria-controls="collapseStamp">
                                                    <i class="fas fa-plus-circle text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Add digital seal data')}}
                                                </button>
                                            </div>
                                            <div id="collapseStamp" class="accordion-collapse collapse" aria-labelledby="stampHeading" data-bs-parent="#stampAccordion">
                                                <div class="p-2">

                                                    <livewire:components.content.file-upload-pquina :name="'cer2'" :max-files="1"
                                                                                                    :file-type="'application/cer'"
                                                                                                    :allow-multiple="'multiple'"
                                                                                                    :accept-files="'.cer'"
                                                                                                    :attributes="''"
                                                                                                    :label="'Certificado (.cer):'"
                                                                                                    :upload-route="'uploadFiles'"
                                                                                                    :icon:="'fad fa-search'"
                                                    />
                                                    <livewire:components.content.file-upload-pquina :name="'key2'" :max-files="1"
                                                                                                    :file-type="'application/cer'"
                                                                                                    :allow-multiple="'multiple'"
                                                                                                    :accept-files="'.cer'"
                                                                                                    :attributes="''"
                                                                                                    :label="'Clave privada (.key):'"
                                                                                                    :upload-route="'uploadFiles'"
                                                                                                    :icon:="'fad fa-search'"
                                                    />
                                                    <div class="text-left py-1"><label class="font-bold" for="name">{{__('Private Key Password:')}}</label></div>
                                                    <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                                           name="Name" placeholder="Contraseña">

                                                    <div class="w-2/12">
                                                        <div class="btn-top-holder mt-4 flow-root">
                                                            <a class="cursor-pointer btn btn-dark float-right">
                                                                {{ __('Save') }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--BANK DATA--}}
                                    <livewire:components.content.content-header :title="'Bank Accounts'" :icon="'fas fa-bank'"/>
                                    <h2 class="my-2">{{__('STP account')}}</h2>
                                    @if($business->stp_status === 0)
                                        <div class="accordion mb-2" id="stpAccountSelect-{{$loop->iteration}}">
                                            <div class="accordion-item">
                                                <div class="accordion-header bg-secondary " id="stpAccountSelect-{{$loop->iteration}}">
                                                    <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseStpSelect-{{$loop->iteration}}" aria-expanded="false" aria-controls="collapseStpSelect-{{$loop->iteration}}">
                                                        <i class="fas fa-eye text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Do you requiere STP?')}}
                                                    </button>
                                                </div>
                                                <div id="collapseStpSelect-{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#stpAccountSelect-{{$loop->iteration}}">
                                                    <div class="p-2">
                                                        <p>Si deseas que tu nómina se disperse de forma automática, necesitas una cuenta STP, solicitala en
                                                            <a href="">stp@perzona.mx</a></p>
                                                        <div><label class="font-bold my-2" for="name">Utilizar STP para disperión de nómina</label>
                                                            <div>
                                                                <input type="radio" id="8" name="8" value="8" checked>
                                                                <label for="1">{{__('Yes')}}</label>
                                                            </div>

                                                            <div>
                                                                <input type="radio" id="9" name="9" value="9">
                                                                <label for="2">{{__('No')}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <div class="w-5/12 w-full mr-2">
                                                                <div class="text-left py-1"><label class="font-bold" for="name">{{__('STP account')}}</label></div>
                                                                <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                                                       name="Name" placeholder="03695">
                                                            </div>

                                                            <div class="w-5/12 w-full mr-2">
                                                                <div class="flex-1 text-left py-1"><label class="font-bold"
                                                                                                          for="name">{{__('STP CLABE Interbancaria')}}</label></div>
                                                                <input class="w-full text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name" name="Name" placeholder="••••••••">
                                                            </div>

                                                            <div class="w-2/12">
                                                                <div class="btn-top-holder mt-10 flow-root">
                                                                    <a class="cursor-pointer btn btn-dark float-right">
                                                                        {{ __('Save') }}
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($business->stp_status === 1)
                                        pendiente
                                    @elseif($business->stp_status === 2)
                                        <livewire:components.content.content-two-columns-text :title="'STP'" :field="$business->account ?? __('fill data')"/>
                                    @endif

                                    @if(count($business->banks) === 0)
                                        <a href="{{route('banks.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle mr-2"></i>{{__('Create')}}</a>
                                    @else
                                        @foreach($business->banks as $banks)
                                            <livewire:components.content.content-two-columns-text :title="''" :field="''"/>
                                        @endforeach
                                    @endif
                                    {{--NEW ITEM RELATION--}}
                                    <livewire:components.content.new-item :model="$business" :relation="'branches'"/>
                                    {{--BUSINESS BRANCHES HOLDER--}}
                                    <table class="table table-stripe table-dark">
                                        <tr>
                                            <th>{{__('Branch')}}</th>
                                            <th>{{__('IMSS Employer Registers')}}</th>
                                            <th>{{__('Created at')}}</th>
                                            <th colspan="3"></th>
                                        </tr>

                                        @if(count($business->branches))
                                            @foreach($business->branches as $branch)
                                                <tr>
                                                    <td><span class="uppercase">{{$branch->name}}</span></td>
                                                    <td>

                                                        @if(empty($branch->ImssPatronalRegisters))
                                                            <a href="{{route('imss-employer-registers.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle mr-2"></i>{{__('Create')}}</a>
                                                        @else
                                                            @foreach($branch->ImssPatronalRegisters as $imssPatronalRegister)
                                                                <div class="bg-blueSteel p-2 inline-block mx-2 my-2 text-white rounded">{{$imssPatronalRegister->name}}</div>
                                                            @endforeach
                                                        @endif
                                                        {{$branch->imss_patronal_registry_id}}
                                                    </td>
                                                    <td>{{formatDate($branch->created_at)}}</td>

                                                    <td style="width: 3%">
                                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                                    </td>
                                                    <td style="width: 3%"><i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></td>
                                                    <td style="width: 3%">
                                                        @if($branch->id === 1)
                                                        @else
                                                            <form action="" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button onclick="return confirm('¿Desea eliminar este registro?')"><i class="fas fa-trash text-danger"></i></button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center"><b>{{ __('No registers') }}</b></td>
                                            </tr>
                                        @endif
                                    </table>

                                </div>

                            </div>
                        </div>
                    @endforeach
                    {{--ACCORDION--}}
                </div>
            </div>
        </div>
    </div>
</x-app-tenant>



