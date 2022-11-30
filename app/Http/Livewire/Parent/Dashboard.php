<?php

namespace App\Http\Livewire\Parent;

use Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $payments = \DB::table('payment')
                        ->join('users','payment.id_user','=','users.id')
                        ->join('kelas','users.id','=','kelas.id_kelas')
                        ->orderByDesc('id_payment')
                        ->where('id_user', Auth::user()->id)
                        ->limit(5)
                        ->get();

        return view('livewire.parent.dashboard', compact('payments'));
    }
}
