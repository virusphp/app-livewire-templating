<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        return view('master.suplier.index');
    }
}
