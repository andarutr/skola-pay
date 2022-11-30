<?php

namespace App\Http\Livewire\Student\Invoice;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class InvoiceTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $paginate = 5;

    public function render()
    {
        $invoice = \DB::table('invoice')
                        ->join('users','invoice.id_user','=','users.id')
                        ->where('id', Auth::user()->id)
                        ->paginate($this->paginate);

        return view('livewire.student.invoice.invoice-table', compact('invoice'));
    }
}
