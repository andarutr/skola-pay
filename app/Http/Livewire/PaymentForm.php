<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Payment;
use App\Models\History;
use Livewire\Component;
use Livewire\WithFileUploads;

class PaymentForm extends Component
{
    use WithFileUploads;

    public $name_student, $name_parent, $email_payment, $id_kelas, $jenis_pembayaran, $month_payment, $transfer_by, $virtual_account, $nominal_payment, $phone_number, $picture_payment;

    public function store()
    {
        if(!Auth::check())
        {
            return redirect('error-payment');
        }

        $this->validate([
            'name_student' => 'required',
            'name_parent' => 'required',
            'id_kelas' => 'required',
            'jenis_pembayaran' => 'required',
            'month_payment' => 'required',
            'transfer_by' => 'required',
            'virtual_account' => 'required',
            'nominal_payment' => 'required',
            'phone_number' => 'required',
            'picture_payment' => 'image|max:1024'
        ]);

        Payment::create([
                    'id_user' => Auth::user()->id,
                    'name_student' => $this->name_student,
                    'name_parent' => $this->name_parent,
                    'email_payment' => $this->email_payment,
                    'id_kelas' => $this->id_kelas,
                    'jenis_pembayaran' => $this->jenis_pembayaran,
                    'month_payment' => $this->month_payment,
                    'transfer_by' => $this->transfer_by,
                    'virtual_account' => $this->virtual_account,
                    'nominal_payment' => str_replace('.', '' , $this->nominal_payment),
                    'phone_number' => $this->phone_number,
                    'picture_payment' => $this->picture_payment->getClientOriginalName()
                ]);

        $this->picture_payment->storePubliclyAs('assets/images/pembayaran-spp', $this->picture_payment->getClientOriginalName());

        $this->reset();
        
        History::create([
                'id_user' => Auth::user()->id,
                'activity_history' => 'pembayaran',
                'created_at' => now()
                ]);
        
        session()->flash('success','Berhasil melakukan pembayaran SPP!');
    }

    public function render()
    {
        $kelas = \DB::table('kelas')->get();
        return view('livewire.payment-form', compact('kelas'));
    }
}
