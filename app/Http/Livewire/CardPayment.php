<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardPayment extends Component
{
    public $statusPage = 'payment';

    public function checkPayment()
    {
        $this->statusPage = 'check payment';
    }

    public function paymentSpp()
    {
        $this->statusPage = 'payment';
    }

    public function render()
    {
        return view('livewire.card-payment');
    }
}
