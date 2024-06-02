<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Inertia\Response;
use Inertia\ResponseFactory;

class UiController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        return inertia('UI/Index', []);
    }

    public function buttons(): Response|ResponseFactory
    {
        return inertia('UI/MyButtons', []);
    }

    public function headings(): Response|ResponseFactory
    {
        return inertia('UI/MyHeadings', []);
    }

    public function tabs(): Response|ResponseFactory
    {
        return inertia('UI/MyTabs', []);
    }
}
