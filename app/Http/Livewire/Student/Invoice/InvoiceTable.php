<?php

namespace App\Http\Livewire\Student\Invoice;

use Auth;
use Livewire\Component;
use App\Models\Invoice;
use Livewire\WithPagination;

class InvoiceTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $paginate = 5;

    public function render()
    {
        $invoice = Invoice::where('id', Auth::user()->id)
                            ->join('users','users.id','=','invoice.id_user')
                            ->paginate($this->paginate);

        return view('livewire.student.invoice.invoice-table', compact('invoice'));
    }
}
