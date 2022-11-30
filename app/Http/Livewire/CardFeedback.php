<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardFeedback extends Component
{
    public $listeners = [
        'successFeedback' => 'successHandlers'
    ];

    public function render()
    {
        return view('livewire.card-feedback');
    }

    public function successHandlers()
    {
        session()->flash('success','Terimakasih atas feedback anda!');
    }
}
