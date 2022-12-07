<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinkedAccountController extends Controller
{
    public function index()
    {
        $menu = 'Linked Account';
        return view('pages.admin.account.linked-account', compact('menu'));
    }
}
