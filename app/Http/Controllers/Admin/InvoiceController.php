<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $menu = 'Tagihan';
        return view('pages.admin.invoice.list', compact('menu'));
    }
}
