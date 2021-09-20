<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PaymentMethodCreate extends Component
{
    public $paymentMethod;

    protected $listeners = ['paymentMethodCreate' => 'paymentMethodCreate'];

    public function render()
    {
        return view('components.payment-method-create', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function paymentMethodCreate($paymentMethod){
        $this->paymentMethod = $paymentMethod;
    }
}
