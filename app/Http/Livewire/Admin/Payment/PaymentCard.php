<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Payment;
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
        
        $payment = Payment::where('id_payment',$id)
                            ->join('kelas','kelas.id_kelas','=','payment.id_kelas')
                            ->first();

        $this->emit('getPayment', $payment);
    }

    public function getPaymentEdit($id)
    {
        $this->statusPage = 'edit';
        
        $payment = Payment::where('id_payment',$id)
                            ->join('kelas','kelas.id_kelas','=','payment.id_kelas')
                            ->first();

        $this->emit('getPaymentEdit', $payment);
    }

    public function render()
    {
        $payments = Payment::orderByDesc('id_payment')
                            ->join('kelas','kelas.id_kelas','=','payment.id_kelas')
                            ->paginate($this->paginate);
                        
        $search = Payment::join('kelas','kelas.id_kelas','=','payment.id_kelas')
                        ->where('name_parent','like','%'.$this->search.'%')
                        ->orwhere('name_student','like','%'.$this->search.'%')
                        ->orwhere('jenis_pembayaran','like','%'.$this->search.'%')
                        ->orwhere('month_payment','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.payment.payment-card', [
            'payments' => $this->search === null ? $payments : $search]);
    }
}
