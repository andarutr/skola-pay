<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckPaymentForm extends Component
{
    public $search;

    public function render()
    {
        $data_ = 'Selamat Datang!';
        $payments = \DB::table('invoice')
                        ->join('users','invoice.id_user','=','users.id')
                        ->join('kelas','users.id_kelas','=','kelas.id_kelas')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('no_invoice','like','%'.$this->search.'%')
                        ->orwhere('username','like','%'.$this->search.'%')
                        ->limit(2)
                        ->get();

        return view('livewire.check-payment-form', [
            'data_' => $data_,
            'payments' => $this->search === null ? $data_ : $payments
        ]);
    }
}
