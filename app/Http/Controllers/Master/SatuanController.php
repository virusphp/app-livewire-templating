<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        return view('master.satuan.index');
    }
}
