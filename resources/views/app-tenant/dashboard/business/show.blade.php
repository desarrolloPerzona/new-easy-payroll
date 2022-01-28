<x-app-tenant>
    <div class="container mx-auto">
        {{--SHOW CARD--}}

        <div class="accordion" id="businessAccordion">

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
                            <livewire:tenant.business.fiel.upload-file-fiel :title="'Fiscal Data'" :icon="'fad fa-tasks-alt'"/>

                            {{--                                    Sello digital Accordion--}}
                            <livewire:tenant.business.seal.upload-file-seal :title="'Fiscal Data'" :icon="'fad fa-tasks-alt'"/>

                            {{--BANK DATA--}}
                            <livewire:components.content.content-header :title="'Bank Accounts'" :icon="'fas fa-bank'"/>

                            {{--                                    STP Accordion--}}

                            {{--                                    CONDITIONAL TO CHANGE STATUS tag IN VIEW--}}
                            <h2 class="my-2">{{__('STP account')}}
                                @if($business->stp_status === 0)
                                    <span  class="text-xs font-bold text-uppercase text-danger">{{ __('Inactive') }}</span>
                                @elseif($business->stp_status === 1)
                                    <span  class="text-xs font-bold text-uppercase text-warning">{{ __('In progress') }}</span>
                                @elseif($business->stp_status === 2)
                                    <span  class="text-xs font-bold text-uppercase text-info">{{ __('Add stp account') }}</span>
                                @elseif($business->stp_status === 3)
                                    <span  class="text-xs font-bold text-uppercase text-success">{{ __('Active') }}</span>
                                @endif
                            </h2>

                            @if($business->stp_status === 0)
                                <div class="accordion mb-4" id="stpAccordion">
                                    <div class="accordion-item">
                                        <div class="accordion-header bg-secondary " id="stpHeading">
                                            <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseStp" aria-expanded="false" aria-controls="collapseStp">
                                                <i class="fas fa-eye text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Do you requiere STP?')}}
                                            </button>
                                        </div>
                                        <div id="collapseStp" class="accordion-collapse collapse" aria-labelledby="stpHeading" data-bs-parent="#stpAccordion">
                                            <div class="p-2">
                                                <p>Si deseas que tu nómina se disperse de forma automática, necesitas una cuenta STP, solicitala en
                                                    <span class="underline">stp@perzona.mx</span>
                                                </p>
                                                <form action="{{ route('business.stp', $business) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea solicitar una cuenta STP?')">{{__('Solicitar')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            @elseif($business->stp_status === 1)
                                <div class="mb-4">
                                    <button class="btn btn-primary" disabled>
                                        En proceso...
                                    </button>
                                </div>
                                <hr>

                            @elseif($business->stp_status === 2)

                                <div class="accordion mb-4" id="stpAccordion">
                                    <div class="accordion-item">
                                        <div class="accordion-header bg-secondary " id="stpHeading">
                                            <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseStp" aria-expanded="false" aria-controls="collapseStp">
                                                <i class="fas fa-eye text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Do you requiere STP?')}}
                                            </button>
                                        </div>
                                        <div id="collapseStp" class="accordion-collapse collapse" aria-labelledby="stpHeading" data-bs-parent="#stpAccordion">
                                            <div class="p-2">
                                                <div class="bg-white mb-3 rounded">
                                                    <label class="font-bold my-2" for="name">Agregar datos STP para disperión de nómina</label>
                                                    <hr>
                                                    <form class="flex" :class="{'d-none': false}">

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

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            @elseif($business->stp_status === 3)

                                <div class="accordion mb-4" id="stpAccordion">
                                    <div class="accordion-item">
                                        <div class="accordion-header bg-secondary " id="stpHeading">
                                            <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseStp" aria-expanded="false" aria-controls="collapseStp">
                                                <i class="fas fa-eye text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Do you requiere STP?')}}
                                            </button>
                                        </div>
                                        <div id="collapseStp" class="accordion-collapse collapse" aria-labelledby="stpHeading" data-bs-parent="#stpAccordion">
                                            <div class="p-2">
                                                <div class="bg-white mb-3 rounded" x-data="data()">
                                                    <p class="font-bold my-2" for="name">Datos STP para dispersión de nómina</p>
                                                    <hr>
                                                    <div class="flex">
                                                        <span>{{ __('STP account: ')}} <b>{{$business->stp_account}}</b></span>
                                                    </div>

                                                    <div class="w-2/12">
                                                        <div class="btn-top-holder flow-root">
                                                            <button class="cursor-pointer btn btn-outline-danger float-right"
                                                                    onclick="return confirm('¿Desea desvincular su cuenta STP?')">
                                                                {{ __('Unlink STP account') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            @endif

                            {{--                                    Banks table--}}
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
            {{--ACCORDION--}}
        </div>

    </div>
</x-app-tenant>
