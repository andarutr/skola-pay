<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RemoveAccountController extends Controller
{
    public function index()
    {
        $menu = 'Remove Account';
        return view('pages.admin.account.remove-account', compact('menu'));
    }
}
