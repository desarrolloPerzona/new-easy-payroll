<div>
    <section class="card relative">
        {{--SPINER--}}
        <div wire:loading.flex class="bg-gray-200 bg-opacity-25 absolute w-full h-full z-30 items-center justify-content-center">
            <x-widgets.spinner size="20"/>
        </div>
        <div class="card-header">
            <h6 class="text-gray-700">{{__('Added Payment Methods')}}</h6>
        </div>
        <div class="card-body">
            @forelse($paymentMethods as $paymentMethod)
                <article class="item text-sm text-gray-700 px-6 py-4 bg-gray-50 shadow-sm border-b border-gray-400 flex">
                    {{--PAYMENT METHOD CARD--}}
                    <div class="mb-0 flex-1 flex items-center">
                        <span class=""><i class="fad fa-credit-card-front fa-2x text-primary"></i></span>
                        <span class="ml-4 font-bold px-2 py-1 text-xs rounded bg-secondary text-white">{{'   '.$paymentMethod->card->brand}}</span>
                        <span class="ml-4 font-bold">{{'   '.$paymentMethod->billing_details->name}}</span>
                        <span class="ml-4"> {{' xxxx-'.$paymentMethod->card->last4}}</span><span class="ml-4 text-xs">{{__('Expire: ').$paymentMethod->card->exp_month.'/'.$paymentMethod->card->exp_year}}</span>
                        @if(auth()->user()->defaultPaymentMethod() && $paymentMethod->id == auth()->user()->defaultPaymentMethod()->id)
                            <span class="ml-4 font-bold px-2 py-1 text-xs rounded bg-secondary text-white">{{__('default')}}</span>
                        @endif
                    </div>
                    @unless($paymentMethod->id == auth()->user()->defaultPaymentMethod()->id)
                        <div class="flex flex-row border border-gray-200 rounded justify-end divide-x divide-gray-200 items-center">
                            <span class="p-2" wire:click="defaultPaymentMethod('{{$paymentMethod->id}}')">
                                <i class="fas fa-star cursor-pointer text-gray-300 hover:text-gray-500"></i>
                            </span>
                            <span class="p-2" wire:click="deletePaymentMethod('{{$paymentMethod->id}}')"><i class="fas fa-trash-alt  cursor-pointer text-red-400 hover:text-red-500"></i></span>
                        </div>
                    @endunless
                </article>
            @empty
                <p>{{__('No payment method')}}</p>
            @endforelse
        </div>
    </section>
</div>
