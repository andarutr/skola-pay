<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkolaPayController extends Controller
{
    public function index()
    {
        $menu = 'Home';
        return view('pages.skolapay.home', compact('menu'));
    }

    public function about()
    {
        $menu = 'Tentang';
        $url_pict = 'banner_2.webp';
        return view('pages.skolapay.about', compact('menu','url_pict'));
    }

    public function payment()
    {
        $menu = 'Payment';
        $url_pict = 'banner_2.webp';
        return view('pages.skolapay.payment', compact('menu','url_pict'));
    }

    public function contact()
    {
        $menu = 'Hubungi';
        $url_pict = 'banner_5.webp';
        return view('pages.skolapay.contact', compact('menu','url_pict'));
    }
}
