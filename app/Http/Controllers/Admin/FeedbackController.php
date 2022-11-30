<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $menu = 'Feedback';
        return view('pages.admin.feedback.list', compact('menu'));
    }
}
