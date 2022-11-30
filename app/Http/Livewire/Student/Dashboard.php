<?php

namespace App\Http\Livewire\Student;

use Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $invoice = \DB::table('invoice')
                        ->where('id_user', Auth::user()->id)
                        ->limit(5)
                        ->get();

        return view('livewire.student.dashboard', compact('invoice'));
    }
}
