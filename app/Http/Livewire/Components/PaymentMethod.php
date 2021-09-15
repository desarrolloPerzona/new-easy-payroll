<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class PaymentMethod extends Component
{


    protected $listeners = ['paymentMethodCreate' => 'paymentMethodCreate'];

    public function render()
    {

        $this->emit('resetStripe');
        return view('livewire.components.payment-method', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function paymentMethodCreate($paymentMethod)
    {
        if(auth()->user()->hasPaymentMethod()){
            auth()->user()->addPaymentMethod($paymentMethod);

        }else{
            auth()->user()->updateDefaultPaymentMethod($paymentMethod);
        }

        $this->emit('paymentMethodRender');

    }

}
