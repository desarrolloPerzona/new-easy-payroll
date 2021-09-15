@push('in_page_scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            stripe();
        });

        Livewire.on('resetStripe', () => {
            stripe();
            document.getElementById('card-form').reset();
        });
    </script>
    <script>
        function stripe() {
            // CREATE STRIPE CARD INPUTS
            const stripe = Stripe("{{env('STRIPE_KEY')}}");
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');

            // GENERATE TOKEN
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const cardForm = document.getElementById('card-form');
            const clientSecret = cardButton.dataset.secret;

            cardForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const {setupIntent, error} = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card: cardElement,
                            billing_details: {
                                name: cardHolderName.value
                            }
                        }
                    }
                );

                if (error) {
                    document.getElementById('cardErrors').textContent = error.message;
                } else {
                    /* alert(setupIntent.payment_method);*/
                    Livewire.emit('paymentMethodCreate', setupIntent.payment_method);

                }
            });
        }
    </script>
@endpush
<div>
    {{--CARD--}}
    <article class="card  relative">
        {{--SPINER--}}
        <div wire:loading.flex class="bg-gray-200 bg-opacity-25 absolute w-full h-full z-30 items-center justify-content-center">
            <x-widgets.spinner size="20"/>
        </div>
        {{--CARD HEADER--}}
        <div class="card-header">
            <h6 class="text-gray-700">{{__('Payment Method')}}</h6>
        </div>
        <form id="card-form" action="">
            <div class="card-body">
                <div class="flex">

                    <p class="bold mt-2">{{__('Card information')}}</p>

                    <div class="form-group my-2 flex-1 ml-6">
                        <input class="form-control" id="card-holder-name" type="text" placeholder="{{__('Card owner name')}}" required>
                        <!-- Stripe Elements Placeholder -->
                        <div id="card-element" class="form-control p-2 mt-4"></div>
                        <span id="cardErrors" class="text-danger"></span>
                    </div>
                </div>
            </div>
            <div class="card-footer flex justify-end p-3">
                <button id="card-button" class="btn btn-primary" data-secret="{{ $intent->client_secret }}">
                    Update Payment Method
                </button>
            </div>
        </form>
    </article>

</div>



