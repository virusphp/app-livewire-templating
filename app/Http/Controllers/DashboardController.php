<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    public function index()
    {
        $bcrum   = $this->bcrum('Dashboard Apotik');
        return view('dashboard', compact('bcrum'));
    } 
}
