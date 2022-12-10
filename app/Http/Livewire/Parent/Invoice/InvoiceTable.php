<?php

namespace App\Http\Livewire\Parent\Invoice;

use Auth;
use App\Models\Invoice;
use App\Models\LinkedUser;
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
        
        $invoice = Invoice::where('id_invoice',$id)
                            ->join('users','users.id','=','invoice.id_user')
                            ->join('kelas','kelas.id_kelas','=','users.id_kelas')
                            ->first();

        $this->emit('getInvoice', $invoice);
    }
    
    public function render()
    {
        $linked_account = LinkedUser::where('id_parent', Auth::user()->id)
                                ->first();

        $invoice = Invoice::where('id_user', $linked_account->id_user)
                            ->join('users','users.id','=','invoice.id_user')
                            ->orderByDesc('id_invoice')
                            ->paginate($this->paginate);

        return view('livewire.parent.invoice.invoice-table', compact('invoice','linked_account'));
    }
}
