<x-app-tenant>
    <div class="container mx-auto">
        <div class="header-page bg-blueSteel py-2 px-3 mb-3 rounded">
            <h2>
                <i class="fas  fa-building mr-2"></i>
                <a href="/business"><span style="display: inline-flex;">{{ __('Businesses') }}</span></a>
                <span class="small">/ {{$business->name}}</span>
            </h2>
        </div>
        <div class="card max-w-7xl mx-auto my-2">
            <div class="car-body bg-white shadow-sm rounded p-4 w-full dark:bg-light">
                <div class="flex mb-4">
                    <div class="p-2 text-dark bold w-1/2 dark:text-white">Nombre:</div>
                    <div class="p-2 w-1/2">{{$business->name}}</div>
                </div>
                <div class="flex mb-4">
                    <div class="dark:bg-secondary p-2 text-white bold w-1/2">Razón social:</div>
                    <div class="p-2 w-1/2">{{$business->business_name??'N/A'}}</div>
                </div>
                <div class="flex mb-4">
                    <div class="bg-gradient-to-r from-gray-200 dark:bg-secondary p-2 text-white bold w-1/2">Logotipo Url:</div>
                    <div class="p-2 w-1/2"><img src="{{$business->logo_url?? asset('images/image_icon.svg')}}" alt="image logo" width="150"></div>
                </div>
                <div class="flex mb-4">
                    <div class="bg-gradient-to-r from-gray-200 dark:bg-secondary p-2 text-white bold w-1/2">Logotipo en recibo:</div>
                    <div class="p-2 w-1/2">{{$business->logo_url === 1? 'Si':'No'}}</div>
                </div>
            </div>

        </div>
        {{--TODO: COMPLETAR AL DISEÑO https://getbootstrap.com/docs/5.0/components/accordion/


        --}}
        <div class="card">
            <div class="card-header bg-blueSteel text-white">
                {{__('Branches')}}
            </div>
            <div class="card-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-blueSteel text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <i class="fas fa-plus-circle mr-2"></i>
                                {{ __('New branch') }}
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>


                @foreach($business->branches as $branch)
                    <div class="branch-card ">
                        {{$branch->name}}
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</x-app-tenant>
