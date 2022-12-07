<?php

namespace App\Http\Livewire\Parent\Invoice;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class InvoiceTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

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
        
        $invoice = \DB::table('invoice')
                        ->join('users','invoice.id_user','=','users.id')
                        ->join('kelas','users.id_kelas','=','kelas.id_kelas')
                        ->where('id_invoice',$id)
                        ->first();

        $this->emit('getInvoice', $invoice);
    }
    
    public function render()
    {
        $linked_account = \DB::table('linked_account')
                                ->where('id_parent', Auth::user()->id)
                                ->first();

        $invoice = \DB::table('invoice')
                        ->join('users','invoice.id_user','=','users.id')
                        ->where('id_user', $linked_account->id_user)
                        ->orderByDesc('id_invoice')
                        ->paginate($this->paginate);

        return view('livewire.parent.invoice.invoice-table', compact('invoice','linked_account'));
    }
}
