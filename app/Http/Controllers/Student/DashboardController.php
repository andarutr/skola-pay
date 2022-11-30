<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menu = 'Dashboard';
        return view('pages.student.dashboard', compact('menu'));
    }
}
