<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class PaymentMethodRetrieve extends Component
{


    protected $listeners = ['paymentMethodRender'=>'render'];

    public function render()
    {
    $paymentMethods = auth()->user()->paymentMethods();
        return view('livewire.components.payment-method-retrieve',compact('paymentMethods'));
    }

    public function deletePaymentMethod($id){
        $paymentMethod = auth()->user()->findPaymentMethod($id);
        $paymentMethod->delete();
    }

    public function defaultPaymentMethod($id){
        $paymentMethod = auth()->user()->updateDefaultPaymentMethod($id);

    }
}
