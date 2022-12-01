<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $menu = 'Tagihan';
        return view('pages.parent.invoice.list', compact('menu'));
    }
}
