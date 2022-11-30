<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $menu = 'Pembayaran';
        return view('pages.parent.payment.list', compact('menu'));
    }
}
