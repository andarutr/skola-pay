<?php

namespace App\Http\Livewire\Parent\Payment;

use Auth;
use App\Models\Payment;
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

        $payment = Payment::join('kelas','kelas.id_kelas','=','payment.id_kelas')
                            ->where('id_payment', $id)
                            ->first();

        $this->emit('getPayment', $payment);
    }

    public function render()
    {
        $payments = Payment::orderByDesc('id_payment')
                            ->join('users','users.id','=','payment.id_user')
                            ->join('kelas','kelas.id_kelas','=','users.id')
                            ->where('id_user', Auth::user()->id)
                            ->paginate($this->paginate);

        $search = Payment::orderByDesc('id_payment')
                            ->join('users','users.id','=','payment.id_user')
                            ->join('kelas','kelas.id_kelas','=','users.id')
                            ->where('month_payment','like','%'.$this->search.'%')
                            ->paginate($this->paginate);

        return view('livewire.parent.payment.payment-table', [
            'payments' => $this->search === null ? $payments : $search]);
    }
}
