<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class InvoiceTable extends Component
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

    public function getInvoice($id)
    {
        $this->statusPage = 'show';
        
        $invoice = Invoice::where('id_invoice',$id)
                        ->join('users','users.id','=','invoice.id_user')
                        ->join('kelas','kelas.id_kelas','=','users.id_kelas')
                        ->first();

        $this->emit('getInvoice', $invoice);
    }

    public function changeStatusInvoice($id)
    {
        $invoice = Invoice::where('id_invoice', $id)
                            ->first();
                        
        if($invoice->status_invoice === 'Belum Bayar')
        {
            Invoice::where('id_invoice', $id)
                    ->update([
                        'tgl_bayar' => date('d F Y'),
                        'status_invoice' => 'Sudah Bayar',
                        'updated_at' => date('d F Y')
                    ]);
        }else{
            Invoice::where('id_invoice', $id)
                    ->update([
                        'tgl_bayar' => null,
                        'status_invoice' => 'Belum Bayar',
                        'updated_at' => date('d F Y')
                    ]);
        }

        session()->flash('success', 'Berhasil memperbarui status invoice!');
    }

    public function destroy($id)
    {
        Invoice::where('id_invoice', $id)
                ->delete();

        session()->flash('success', 'Berhasil menghapus invoice!');
    }

    public function render()
    {
        $invoice = Invoice::orderByDesc('id_invoice')
                            ->join('users','invoice.id_user','=','users.id')
                            ->paginate($this->paginate);

        $search = Invoice::orderByDesc('id_invoice')
                            ->join('users','invoice.id_user','=','users.id')
                            ->where('no_invoice','like','%'.$this->search.'%')
                            ->orwhere('name','like','%'.$this->search.'%')
                            ->orwhere('username','like','%'.$this->search.'%')
                            ->orwhere('status_invoice','like','%'.$this->search.'%')
                            ->paginate($this->paginate);

        return view('livewire.admin.invoice.invoice-table', [
            'invoice' => $this->search === null ? $invoice : $search]);
    }
}
