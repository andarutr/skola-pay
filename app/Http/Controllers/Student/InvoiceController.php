<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $menu = 'Tagihan';
        return view('pages.student.invoice.list', compact('menu'));
    }
}
