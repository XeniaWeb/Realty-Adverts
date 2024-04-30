<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;

class UiController extends Controller
{
    public function index()
    {
        return inertia("UI/Index", []);
    }

    public function buttons()
    {
        return inertia('UI/MyButtons', []);
    }

    public function headings()
    {
        return inertia('UI/MyHeadings', []);
    }
}
