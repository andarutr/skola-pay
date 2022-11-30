<?php

namespace App\Http\Livewire\Admin\Payment;

use Livewire\Component;
use Livewire\WithPagination;

class PaymentCard extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public $statusPage = 'main';

    public function goToMain()
    {
        $this->reset();
        $this->statusPage = 'main';
    }

    public function getPayment($id)
    {
        $this->statusPage = 'show';
        
        $payment = \DB::table('payment')
                        ->join('kelas','payment.id_kelas','=','kelas.id_kelas')
                        ->where('id_payment',$id)
                        ->first();

        $this->emit('getPayment', $payment);
    }

    public function getPaymentEdit($id)
    {
        $this->statusPage = 'edit';
        
        $payment = \DB::table('payment')
                        ->join('kelas','payment.id_kelas','=','kelas.id_kelas')
                        ->where('id_payment',$id)
                        ->first();

        $this->emit('getPaymentEdit', $payment);
    }

    public function render()
    {
        $payments = \DB::table('payment')
                        ->orderByDesc('id_payment')
                        ->join('kelas','payment.id_kelas','=','kelas.id_kelas')
                        ->paginate($this->paginate);
                        
                        $search = \DB::table('payment')
                        ->join('kelas','payment.id_kelas','=','kelas.id_kelas')
                        ->where('name_parent','like','%'.$this->search.'%')
                        ->orwhere('name_student','like','%'.$this->search.'%')
                        ->orwhere('jenis_pembayaran','like','%'.$this->search.'%')
                        ->orwhere('month_payment','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.payment.payment-card', [
            'payments' => $this->search === null ? $payments : $search]);
    }
}
