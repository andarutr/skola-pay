<?php

namespace App\Http\Livewire\Parent\Payment;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class PaymentTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public $statusPage = 'main';

    public function goToMain()
    {
        $this->statusPage = 'main';
    }

    public function getPayment($id)
    {
        $this->statusPage = 'show';

        $payment = \DB::table('payment')
                        ->join('kelas','payment.id_kelas','=','kelas.id_kelas')
                        ->where('id_payment', $id)
                        ->first();

        $this->emit('getPayment', $payment);
    }

    public function render()
    {
        $payments = \DB::table('payment')
                        ->join('users','payment.id_user','=','users.id')
                        ->join('kelas','users.id','=','kelas.id_kelas')
                        ->orderByDesc('id_payment')
                        ->where('id_user', Auth::user()->id)
                        ->paginate($this->paginate);

        $search = \DB::table('payment')
                        ->join('users','payment.id_user','=','users.id')
                        ->join('kelas','users.id','=','kelas.id_kelas')
                        ->orderByDesc('id_payment')
                        ->where('month_payment','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.parent.payment.payment-table', [
            'payments' => $this->search === null ? $payments : $search]);
    }
}
