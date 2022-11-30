<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewAccountController extends Controller
{
    public function index()
    {
        $menu = 'New Account';
        return view('pages.admin.account.new-account', compact('menu'));
    }
}
