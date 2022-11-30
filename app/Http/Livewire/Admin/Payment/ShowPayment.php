<?php

namespace App\Http\Livewire\Admin\Payment;

use Livewire\Component;

class ShowPayment extends Component
{
    public $paymentId, $name_student, $name_parent, $nomor_kelas, $prodi_kelas, $jenis_pembayaran, $month_payment, $nominal_payment, $email_payment, $picture_payment, $phone_number, $transfer_by, $virtual_account, $created_at, $updated_at;

    protected $listeners = [
        'getPayment' => 'getPaymentHandlers'
    ];

    public function render()
    {
        return view('livewire.admin.payment.show-payment');
    }

    public function getPaymentHandlers($payment)
    {
        $this->paymentId = $payment['id_payment'];
        $this->name_student = $payment['name_student'];
        $this->name_parent = $payment['name_parent'];
        $this->nomor_kelas = $payment['nomor_kelas'];
        $this->prodi_kelas = $payment['prodi_kelas'];
        $this->jenis_pembayaran = $payment['jenis_pembayaran'];
        $this->picture_payment = $payment['picture_payment'];
        $this->month_payment = $payment['month_payment'];
        $this->nominal_payment = $payment['nominal_payment'];
        $this->email_payment = $payment['email_payment'];
        $this->phone_number = $payment['phone_number'];
        $this->transfer_by = $payment['transfer_by'];
        $this->virtual_account = $payment['virtual_account'];
        $this->created_at = $payment['created_at'];
        $this->updated_at = $payment['updated_at'];
    }
}
