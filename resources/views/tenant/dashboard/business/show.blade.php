<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.crud.show-page-header :fa-icon="'fa-building'" :model="$business" :title="'Business'" :titleUrl="route('business.index')" :editUrl="route('business.edit',$business->id)"/>
        {{--SHOW CARD--}}
        <div class="card mx-auto my-2">
            <div class="card-header bg-blueSteel text-white">
                {{$business->name}}
            </div>
            <div class="car-body bg-white shadow-sm rounded p-4 w-full dark:bg-light">
                {{--SECTIONS--}}
                <div class="section py-2 border-b-2">
                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">Nombre:</td>
                            <td style="width: 85%;" class="text-left p-2">{{$business->name}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">Logotipo:</td>
                            <td style="width: 85%;" class="text-left p-2">
                                <img src="{{$business->logo_url?? asset('images/image_icon.svg')}}" alt="image logo" width="150">
                                <p class="text-xs">Usar en recibo: {{$business->logo_url === 1? 'Si':'No'}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">Industria:</td>
                            <td style="width: 85%;" class="text-left p-2">{{$business->industry?? 'Null'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">Régimen fiscal:</td>
                            <td style="width: 85%;" class="text-left p-2">{{$business->fiscal_regime?? 'Null'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">RFC:</td>
                            <td style="width: 85%;" class="text-left p-2">{{$business->rfc?? 'Null'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">Razón Social:</td>
                            <td style="width: 85%;" class="text-left p-2">{{$business->business_name?? 'Null'}}</td>
                        </tr>
                    </table>
                </div>
                {{--SECTIONS--}}
                <div class="section py-2 border-b-2">
                    <livewire:components.card-header :title="'Cuentas'"/>

                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 15%;" class="text-right p-2 font-bold">STP:</td>
                            <td style="width: 85%;" class="text-left p-2">{{$business->stp_account?? 'Null'}}</td>
                        </tr>
                        <tr>
                            @if(count($business->banks) <= 0)
                                <td colspan="2">
                                    <livewire:components.crud.empty-model-badge :description="'Please select from menu item'" :parentItem="''" :childItem="''"/>
                                </td>
                            @else
                                <td>
                                    {{--TODO: CREATE BANKS FOREACH--}}
                                </td>

                            @endif
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        {{--TODO: COMPLETAR AL DISEÑO https://getbootstrap.com/docs/5.0/components/accordion/--}}
        {{--SHOW CARD RELATED--}}
        <div class="card">
            <div class="card-header bg-blueSteel text-white">
                {{__('Branches')}}
            </div>
            <div class="card-body dark:bg-light">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-blueSteel text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <i class="fas fa-plus-circle mr-2"></i>
                                {{ __('New branch') }}
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="card my-2">
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group">
                                            <lable>Nombre</lable>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <lable>Descripción</lable>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <lable>Registro Patronal</lable>
                                            <select type="text" class="form-control">
                                                <options></options>
                                            </select>
                                        </div>
                                        <div class="my-2">
                                            <button class="btn btn-primary"><i class="fad fa-paper-plane mr-2"></i></i>Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="branch-holder">

                    @if(count($business->branches) > 0)
                        <td>
                             @foreach($business->branches as $branch)
                               {{-- {{ dd($branch)}}--}}
                            <div class="branch-card p-2 my-2 border-b-2">
                                <table class="table table-borderless">
                                    <tr>
                                        <td style="width: 15%;" class="text-right p-2 font-bold">Nombre:</td>
                                        <td style="width: 85%;" class="text-left p-2">  {{$branch->name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;" class="text-right p-2 font-bold">Registro IMSS Patronall:</td>
                                        <td style="width: 85%;" class="text-left p-2"> {{$branch->imss_patronal??'null'}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;" class="text-right p-2 font-bold">Descripción:</td>
                                        <td style="width: 85%;" class="text-left p-2">{{$business->description?? 'Null'}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;" class="text-right p-2 font-bold">Industria:</td>

                                    </tr>
                                    <tr>
                                        <td style="width: 15%;" class="text-right p-2 font-bold">Razón Social:</td>
                                        <td style="width: 85%;" class="text-left p-2">{{$business->business_name?? 'Null'}}</td>
                                    </tr>
                                </table>
                            </div>
                        @endforeach
                        </td>
                    @else
                        <td colspan="2">
                        <livewire:components.crud.empty-model-badge :description="'Please select from menu item'" :parentItem="''" :childItem="''"/>
                        </td>
                    @endif

                </div>
            </div>
        </div>

    </div>
</x-app-tenant>
