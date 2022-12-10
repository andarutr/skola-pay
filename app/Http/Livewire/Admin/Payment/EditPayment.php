<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Payment;
use Livewire\Component;

class EditPayment extends Component
{
    public $paymentId, $name_student, $name_parent, $jenis_pembayaran, $month_payment, $nominal_payment, $email_payment, $picture_payment, $phone_number, $transfer_by, $virtual_account, $created_at;

    public function update()
    {
        $this->validate([
            'name_student' => 'required',
            'name_parent' => 'required',
            'email_payment' => 'required',
            'phone_number' => 'required',
            'jenis_pembayaran' => 'required',
            'transfer_by' => 'required',
            'month_payment' => 'required',
            'virtual_account' => 'required',
            'nominal_payment' => 'required'
        ]);

        $update = Payment::where('id_payment', $this->paymentId)
                        ->update([  
                            'name_student' => $this->name_student,
                            'name_parent' => $this->name_parent,
                            'email_payment' => $this->email_payment,
                            'phone_number' => $this->phone_number,
                            'jenis_pembayaran' => $this->jenis_pembayaran,
                            'transfer_by' => $this->transfer_by,
                            'month_payment' => $this->month_payment,
                            'virtual_account' => $this->virtual_account,
                            'nominal_payment' => $this->nominal_payment
                        ]);

        session()->flash('success','Berhasil memperbarui pembayaran!');
    }

    protected $listeners = [
        'getPaymentEdit' => 'getPaymentEditHandlers'
    ];

    public function render()
    {
        return view('livewire.admin.payment.edit-payment');
    }

    public function getPaymentEditHandlers($payment)
    {
        $this->paymentId = $payment['id_payment'];
        $this->name_student = $payment['name_student'];
        $this->name_parent = $payment['name_parent'];
        $this->jenis_pembayaran = $payment['jenis_pembayaran'];
        $this->picture_payment = $payment['picture_payment'];
        $this->month_payment = $payment['month_payment'];
        $this->nominal_payment = $payment['nominal_payment'];
        $this->email_payment = $payment['email_payment'];
        $this->phone_number = $payment['phone_number'];
        $this->transfer_by = $payment['transfer_by'];
        $this->virtual_account = $payment['virtual_account'];
        $this->created_at = $payment['created_at'];
    }
}
