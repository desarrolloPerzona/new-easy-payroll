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
                                    <livewire:components.content.content-header :title="'Business'"/>
                                    {{--CONTENT TWO COLUMNS TEXT IMAGES AND ARRAYS--}}
                                    <livewire:components.content.content-two-columns-text :title="'Name'" :field="$business->name ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-images :title="'Logo'" :images="$business->getMedia('business')"/>
                                    <livewire:components.content.content-two-columns-text :title="'Industry'" :field="$business->industry ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-text :title="'Fiscal Regime'" :field="$business->fiscal_regime ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-text :title="'Industry'" :field="$business->business_name ?? __('Fill data')"/>
                                    <livewire:components.content.content-two-columns-text :title="'RFC'" :field="$business->rfc ?? __('Fill data')"/>
                                    <livewire:components.content.content-header :title="'Bank Accounts'"/>
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
                                            <th>{{__('Employer registration')}}</th>
                                            <th>{{__('Created at')}}</th>
                                            <th colspan="3"></th>
                                        </tr>
                                        @foreach($business->branches as $branch)
                                            <tr>
                                                <td><span class="uppercase">{{$branch->name}}</span></td>
                                                <td>
                                                    @if(empty($branch->imss_patronal_registry_id))
                                                        <a href="{{route('employer-register.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle mr-2"></i>{{__('Create')}}</a>
                                                    @else
                                                        {{$branch->patronalRegistry->name}}
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
                                    </table>

                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{--ACCORDION--}}
                </div>
            </div>
        </div>
    </div>
</x-app-tenant>



