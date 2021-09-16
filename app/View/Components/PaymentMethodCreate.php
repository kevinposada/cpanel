<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PaymentMethodCreate extends Component
{
    public function render()
    {
        return view('components.payment-method-create', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }
}
