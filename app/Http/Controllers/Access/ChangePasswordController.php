<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $menu = 'Change Password';
        return view('pages.access.change-password', compact('menu'));
    }
}
