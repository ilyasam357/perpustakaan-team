<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view('pages.dashboard', [
            'title' => 'dashboard',
        ]);
    }
}