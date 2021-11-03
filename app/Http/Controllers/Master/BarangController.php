<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class BarangController extends BackendController
{
    public function index()
    {
        $bcrum = $this->bcrum('Pendaftaran Pasien Baru');
        return view('master.barang.index', compact('bcrum'));
    }
}
