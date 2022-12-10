<?php

namespace App\Http\Livewire\Parent;

use Auth;
use App\Models\Payment;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $payments = Payment::orderByDesc('id_payment')
                            ->join('users','users.id','=','payment.id_user')
                            ->join('kelas','kelas.id_kelas','=','users.id')
                            ->where('id_user', Auth::user()->id)
                            ->limit(5)
                            ->get();

        return view('livewire.parent.dashboard', compact('payments'));
    }
}
