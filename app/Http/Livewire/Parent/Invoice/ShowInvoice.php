<?php

namespace App\Http\Livewire\Parent\Invoice;

use Livewire\Component;

class ShowInvoice extends Component
{
    public $id_invoice, $id_user, $name, $username, $phone_number, $nomor_kelas, $prodi_kelas, $no_invoice, $tgl_bayar, $nominal_bayar, $note_invoice, $status_invoice, $updated_at, $created_at;

    protected $listeners = [
        'getInvoice' => 'getInvoiceHandler'
    ];

    public function render()
    {
        return view('livewire.parent.invoice.show-invoice');
    }

    public function getInvoiceHandler($invoice)
    {
        $this->id_invoice = $invoice['id_invoice'];
        $this->id_user = $invoice['id_user'];
        $this->name = $invoice['name'];
        $this->username = $invoice['username'];
        $this->phone_number = $invoice['phone_number'];
        $this->nomor_kelas = $invoice['nomor_kelas'];
        $this->prodi_kelas = $invoice['prodi_kelas'];
        $this->no_invoice = $invoice['no_invoice'];
        $this->tgl_bayar = $invoice['tgl_bayar'];
        $this->nominal_bayar = $invoice['nominal_bayar'];
        $this->note_invoice = $invoice['note_invoice'];
        $this->status_invoice = $invoice['status_invoice'];
        $this->updated_at = $invoice['updated_at'];
        $this->created_at = $invoice['created_at'];
    }
}
