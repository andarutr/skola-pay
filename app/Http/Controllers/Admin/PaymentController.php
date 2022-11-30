<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $menu = 'Pembayaran';
        return view('pages.admin.payment.list', compact('menu'));
    }
}
